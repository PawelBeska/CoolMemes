<section class="admin-content">
    <div class="bg-dark">
        <div class="container  m-b-30">
            <div class="row">
                <div class="col-12 text-white p-t-40 p-b-20">

                    <h4 class="">
                        <div class="avatar avatar-xl">
                                    <span class="avatar-title rounded-circle bg-warning"> <i
                                            class="mdi mdi-clipboard-list-outline"></i> </span>
                        </div> Lista postów
                    </h4>
                    <p class="opacity-75 ">
                        Poniżej znajduje się lista postów aktualnie dodanych do twojego systemu. Masz możliwosć zarządzania i edycji.


                    </p>


                    <button disabled type="button" class="btn m-b-15 ml-2 mr-2 btn-success create">Dodaj posta</button>


                </div>


                <div id="form-errors" class="col-12 p-b-40"></div>
            </div>
        </div>
    </div>


    <div class="container  pull-up">
        <div id="form-errors"></div>
        <div class="row">
            <div class="col-12">
                <div class="card">

                    <div class="card-body">
                        <div class="table-responsive p-t-10">
                            <table id="" class="table" style="width:100%">
                                <thead>
                                <tr>
                                    <th>Autor</th>
                                    <th>Główna</th>
                                    <th>Komentarze</th>
                                    <th>Tagi</th>
                                    <th>Wybierz</th>
                                </tr>
                                </thead>
                                <tbody> </tbody>
                            </table>
                            <script>
                                $(document).ready(function () {
                                    window.datatable = $('.table').DataTable({
                                        columns: [
                                            {data: 'author.name', "sClass": 'author.name'},
                                            {data: 'home', "sClass": 'home'},
                                            {data: 'comments_count', "sClass": 'comments_count'},
                                            {data: 'tags_count', "sClass": 'tags_count'},
                                            {
                                                name: "buttons",
                                                "targets": -1,
                                                "data": null,
                                                "defaultContent": `<div class="btn-group" role="group">
                                            <button id="btnGroupDrop1" type="button"
                                                    class="btn btn-info dropdown-toggle" data-toggle="dropdown"
                                                    aria-haspopup="true" aria-expanded="false">
                                                Wybierz
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                                <a class="dropdown-item view"  href="#">Podgląd</a>
                                                <a class="dropdown-item update" href="#">Szybka edycja</a>
                                                <a class="dropdown-item update" href="#">Edycja</a>
                                                <a class="dropdown-item remove" href="#">Zablokuj</a>
                                            </div>
                                        </div>`
                                            }
                                        ],
                                        "autoWidth": true,
                                        'responsive': true,
                                        "processing": true,
                                        "serverSide": true,
                                        oLanguage: {
                                            sProcessing: `<div class="lime-body">    <div class="container">        <div class="row" style="  position: absolute;  top: 50%;  left: 50%;  transform: translate(-50%, -50%);">            <div class="col-md-8">                <div class="spinner-border" style="color: #747985" le="status">                    <span class="sr-only">Loading...</span>                </div>            </div>        </div>    </div></div>`
                                        },
                                        rowId: 'id',
                                        ajax: {
                                            "url": "{{Route('admin.posts.store')}}",
                                            "type": "POST",
                                            "data":{"_token": "{{ csrf_token() }}"}
                                        }
                                    });
                                });

                            </script>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
