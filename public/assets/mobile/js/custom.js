init();
$(document).on({
    ajaxStart: function (e) {
        NProgress.start();
    },

    ajaxStop: function () {
        NProgress.done();

    }
});



$('.custom-file-input').on('change',function(){
    var fileName = document.getElementById("exampleInputFile").files[0].name;
    $(this).next('.form-control-file').addClass("selected").html(fileName);
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



/*
 * HEADER FUNCTIONS
 */

class Dropdown {
    constructor(eventSelector, openingSelector) {
        $(eventSelector).on('click', function (e) {
            if (openingSelector.is(":visible"))
                openingSelector.hide();
            else {
                $('.dropdown-menu').each(function () {
                    $(this).hide();
                });
                openingSelector.show();
            }
        });
    }
}

new Dropdown($('div.avatar'), $('div.popup-menu.user'));
new Dropdown($('a.search'), $('div.popup-menu.search-menu'));
new Dropdown($('div.notification'), $('div.notification-menu'));
new Dropdown($('div.option'), $('div.popup-menu.profile-more'));


  function changeUrl(url, container) {
        $.ajax({
            url: url,
            type: 'GET',
            data: null,
            cache: false,
            success: function (data) {
              console.log(data);
                if (container) {
                    $('div#app').html(data);
                } else {
                    $('div#content').html(data);
                }
                if (typeof (history.pushState) != "undefined") {
                    let obj = {Page: window.location.pathname, Url: url};
                    history.pushState(obj, obj.Page, obj.Url);
                } else {
                    window.location.href = url;
                }
              init();
                RefreshMenu();
            }
        });
    }


  function init()
{
  
    $('a:not(#redirect-ignore)').on('click', function (e) {
          e.preventDefault();
      console.log('asd');
        let container = !!$(this).attr('container');
        if ($(this).attr('redirect')) {
            e.preventDefault();
            changeUrl($(this).attr('href'), container);
        }
    });
    window.addEventListener('popstate', function (event) {
        changeUrl(event.state.Url,false);

    });
  
}


    function RefreshMenu() {
        $('li.selected').removeClass('selected');
        $('li > a').each(function () {
            if ($(this).attr('href') === window.location.href) $(this).parent().addClass('selected');
        });
    }


$(document).ready(function () {
    "use strict";
    RefreshMenu();
    $("a.account#redirect-ignore").click(function (){
       $("#menu_konta").addClass("overlay-layer");
       $("#menu_konta_cien").addClass("shade");
    });
    $("#menu_konta_cien").click(function(){
        $("#menu_konta").removeClass("overlay-layer");
        $("#menu_konta_cien").removeClass("shade");
    });

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
