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
    const error = ({alert, message}) => `   <div class="alert ${alert}  alert-dismissible fade show" role="alert">

                            <div class="d-flex">

                                <div class="icon">

                                    <i class="icon mdi mdi-check-circle-outline"></i>

                                </div>

                                <div class="content" style="    margin-top: 6px!important;">

                                    ${message}</strong>

                                    <button type="button" style="margin-top: 6px;" class="close" data-dismiss="alert" aria-label="Close">

                                        <span aria-hidden="true">&times;</span>

                                    </button>

                                </div>

                            </div>


                        </div>`;
    if (data['error'])
        selector.prepend(error({'alert': 'alert-border-danger', 'message': data['error']}));
    else if (data['success'])
        selector.prepend(error({'alert': 'alert-border-success', 'message': data['success']}));
    else {
        var l = JSON.parse(data.responseText);
        var i = 0;
        $.each(l['errors'], function (heading, text) {
            i++;
            selector.prepend(error({'alert': 'alert-border-danger', 'message': text}));
        });
    }
}

/* =================================================================
    03. Navbar redirection loading
==================================================================== */
function init() {
    console.log('init');

    $('.js-select2').select2();
    let formCreate = $("form.create");
    formCreate.submit(function (e) {
        e.preventDefault();
        $.ajax({
            url: formCreate.attr('action'),
            type: 'GET',
            global: false,
            cache: false,
            data: formCreate.serialize(),
            success: function (data) {
                errors(data, $('#form-errors'));
                window.datatable.ajax.reload();
            },
            error: function (data) {
                errors(data, $('#form-errors'));
            }
        });
    });
    let formUpdate = $("form.update");
    formUpdate.submit(function (e) {
        e.preventDefault();
        $.ajax({
            url: formUpdate.attr('action'),
            type: 'PUT',
            global: false,
            cache: false,
            data: formUpdate.serialize(),
            success: function (data) {
                errors(data, $('#form-errors'));
                window.datatable.ajax.reload();
                $("form.update select option").each(function ($ez) {
                    $(this).removeAttr('selected')
                });
            },
            error: function (data) {
                errors(data, $('#form-errors'));
            }
        });
    });

    $('button.create').on('click', function () {
        $('div.create').removeClass('d-none');
    });
    var loc = $('form.update').attr('action') ? $('form.update').attr('action') + '/' : location.href + '/';
    $('.table').on('click', 'a.view', function (e) {
        e.preventDefault();
       changeUrl(loc + $(this).parents('tr').attr('id'),false);
    });
    $('.table').on('click', 'a.remove', function (e) {
        e.preventDefault();
        $.ajax({
            url: loc + $(this).parents('tr').attr('id'),
            type: 'DELETE',
            data: {'_token': $('meta[name="csrf-token"]').attr('content')},
            success: function (data) {
                errors(data, $('#form-errors'));
                window.datatable.ajax.reload();
            },
            error: function (data) {
                errors(data, $('#form-errors'));
            }
        });
    });
    $('.table').on('click', 'a.update', function (e) {
        e.preventDefault();
        console.log('update!');
        $('div.update').show();
        $('form.update').attr({
            'id': $(this).parents('tr').attr('id'),
            'action': loc + $(this).parents('tr').attr('id')
        });
        var tr = $(this).parents('tr');
        $('form.update').find(':input.form-control').each(function (e) {
            $(this).find('option').attr("selected", false);
            $('form.update .js-select2').val($('form.update .js-select2').val()).trigger('change');
            let text = tr.find("td." + $(this).attr('id').replace('[]', '')).text();
            if (text.length) {
                if ($(this)[0].nodeName == 'INPUT') {
                    $(this).val(text);
                } else if (text.indexOf('[') > -1) {
                    $('form.update .js-select2[name="group[]"]').val(JSON.parse(text)).trigger('change');
                } else if (text.indexOf('{') > -1) {
                    $(this).val(text);
                } else if (text.indexOf(',') > -1) {
                    text.split(',').forEach(function ($e) {
                        $("form.update select option:contains('" + $e + "')").each(function () {
                            if ($(this).text() == $e) {
                                $(this).attr('selected', 'selected');
                            }
                        });
                    });
                } else {
                    $("form.update select option:contains('" + text + "')").each(function () {
                        if ($(this).text() == text) {
                            $(this).attr('selected', 'selected');
                        }
                    });
                }
                $('form.update .js-select2').val($('form.update .js-select2').val()).trigger('change');
            }
        });


    });
}
function changeUrl(url, container) {
    $.ajax({
        url: url,
        type: 'GET',
        data: null,
        cache: false,
        success: function (data) {
            if (container) {
                $('body').html(data);
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
function RefreshMenu() {
    $('li').removeClass('active');
    $('li > a').each(function () {
        if ($(this).attr('href') === window.location.href) {
            $(this).parent().addClass('active');
        }
    });
}
$(document).ready(function () {
    "use strict";


    RefreshMenu();


    $('li.menu-item > a').on('click', function (e) {
        let container = !!$(this).attr('container');
        if ($(this).attr('redirect')) {
            e.preventDefault();
            changeUrl($(this).attr('href'), container);
        }
    });



    window.addEventListener('popstate', function (event) {
        console.log(event);
        changeUrl(event.state.Url, false);

    });


});
