init();
$(document).on({
    ajaxStart: function (e) {
        NProgress.start();
    },

    ajaxStop: function () {
        NProgress.done();

    }
});

function errors(data, selector) {
    selector.empty();
    selector.show();
    const error = ({alert, message}) => `<div class="alert alert-sm alert-border-left ${alert} alert-dismissable text-center">
                                               <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                               <i class="fa fa-info pr10" style="margin-right: 6px"></i> ${message} </div>`;
    if (data['error'])
        selector.prepend(error({'alert': 'alert-danger', 'message': data['error']}));
    else if (data['success'])
        selector.prepend(error({'alert': 'alert-success', 'message': data['success']}));
    else {
        let l = JSON.parse(data.responseText);
        let i = 0;
        $.each(l['errors'], function (heading, text) {
            i++;
            selector.prepend(error({'alert': 'alert-danger', 'message': text}));
        });
    }
}


function changeUrl(url, container, menu) {
    console.log('changeURL EVENT');
    $.ajax({
        url: url,
        type: 'GET',
        data: null,
        cache: false,
        success: function (data) {

            if (container) {
                $('body').html(data);
            } else {
                $('div#app').html(data);
            }
            if (menu) {
                $('div#header').show();
            } else {
                $('div#header').hide();
            }
            if (typeof (history.pushState) != "undefined") {
                let obj = {Page: window.location.pathname, Url: url};
                history.pushState(obj, obj.Page, obj.Url);
            } else {
                window.location.href = url;
            }
            $("section#menu_konta").removeClass("overlay-layer");
            $("div#menu_konta_cien").removeClass("shade");
            RefreshMenu();
            init();

        }
    });
}








window.addEventListener('popstate', function (event) {
    console.log('popstate EVENT');
    changeUrl(event.state.Url, false);


});


function RefreshMenu() {
    $('li.selected').removeClass('selected');
    $('li > a').each(function () {
        if ($(this).attr('href') === window.location.href) $(this).parent().addClass('selected');
    });
}

function init()
{
    $('a:not(#redirect-ignore)').off('click').on('click', function (e) {
        e.preventDefault();
        let container = !!$(this).attr('container');
        let menu = !!$(this).data('menu');
        if ($(this).attr('redirect')) {
            e.preventDefault();
            changeUrl($(this).attr('href'), container, menu);
        }
    });

    $("a.account#redirect-ignore").off('click').on('click',function () {
        $("#menu_konta").addClass("overlay-layer");
        $("#menu_konta_cien").addClass("shade");
    });
    $("#menu_konta_cien").off('click').on('click',function () {
        $("#menu_konta").removeClass("overlay-layer");
        $("#menu_konta_cien").removeClass("shade");
    });

    $('.shade').off('click').on('click', function () {
        $("html").removeClass("slideout-open");
        $("div#sidebar").hide();
    });
    $('a.menu:not(.arrow)').off('click').on('click',function(){
        $("html").addClass("slideout-open");
        $("div#sidebar").show();
    });

    if($('div#items').length)
    {
        console.log('DIV NA POSTY ISTNIEJE');
        postsInit();
    }

}


$(document).ready(function () {
    RefreshMenu();

    let formLogin = $("form#login");
    formLogin.submit(function (e) {
        e.preventDefault();
        $.ajax({
            url: formLogin.attr('action'),
            type: 'POST',
            global: false,
            cache: false,
            data: formLogin.serialize(),
            success: function () {
                location.reload();
            },
            error: function (data) {
                errors(data, $('#form-errors'));
            }
        });
    });
    let registerForm = $("form#register");
    registerForm.submit(function (e) {
        e.preventDefault();
        $.ajax({
            url: registerForm.attr('action'),
            type: 'POST',
            global: false,
            cache: false,
            data: registerForm.serialize(),
            success: function () {
                errors({'success': 'Pomyślnie utworzono konto. <br> Informacje na temat aktywacji konta zostały wysłane na twój adres email.'}, $('#form-errors'));
            },
            error: function (data) {
                errors(data, $('#form-errors'));
            }
        });
    });


});
