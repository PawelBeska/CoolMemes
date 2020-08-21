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
                            <table id="example" class="table   " style="width:100%">
                                <thead>
                                <tr>
                                    <th>lp</th>
                                    <th>Autor</th>
                                    <th>Główna</th>
                                    <th>Komentarze</th>
                                    <th>Tagi</th>
                                    <th>Wybierz</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Raz4r</td>
                                    <td><font color="red">Nie</font></td>
                                    <td>15</td>
                                    <th>Śmieszne,Fajne,Śmieszne,Fajne,Śmieszne</th>
                                    <td><div class="btn-group" role="group">
                                            <button id="btnGroupDrop1" type="button"
                                                    class="btn btn-info dropdown-toggle" data-toggle="dropdown"
                                                    aria-haspopup="true" aria-expanded="false">
                                                Wybierz
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                                <a class="dropdown-item" href="#">Podgląd</a>
                                                <a class="dropdown-item" href="#">Edytuj</a>
                                                <a class="dropdown-item" href="#">Statystyki</a>
                                                <a class="dropdown-item" href="#">Usuń</a>
                                            </div>
                                        </div></td>
                                </tr>
                                </tbody>
                                <tfoot>
                                <tr>
                                    <th>lp</th>
                                    <th>Imię</th>
                                    <th>Nazwisko</th>
                                    <th>Numer telefonu</th>
                                    <th>Status</th>
                                    <th>Wybierz</th>
                                </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
