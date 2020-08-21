<section class="admin-content">
    <div class="bg-dark">
        <div class="container  m-b-30">
            <div class="row">
                <div class="col-12 text-white p-t-40 p-b-90">

                    <h4 class="">  <div class="avatar avatar-md">
                                    <span class="avatar-title rounded-circle bg-info"> <i
                                                class="mdi mdi-desktop-mac"></i> </span>
                        </div> Witaj, {{\Illuminate\Support\Facades\Auth::user()->name}}!
                    </h4>
                    <p class="opacity-75 ">
                        Znajdujesz się aktualnie na pulpicie swojego konta. Możesz tutaj w szybki sposób zarządzać działaniem twojej firmy. Powodzenia!
                    </p>


                </div>
            </div>
        </div>
    </div>

    <div class="container  pull-up">
        <div class="row col-lg-12">
            <div class="card m-b-30 col-md-4">
                <div class="card-header">
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-7">
                            <h6 class="fw-600">Nowych użytkowników</h6>
                            <p class="text-muted">
                                W dniu
                            </p>
                        </div>
                        <div class="col-md-5 my-auto text-right">
                            <h2 class="text-primary"><i class="mdi mdi-account-heart"></i></h2>

                        </div>
                    </div>
                    <div class="progress" style="height: 5px">
                        <div class="progress-bar" role="progressbar" style="width: 100%" aria-valuenow="0"
                             aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <div class="row m-t-10">
                        <div class="col-md-7">

                            <p class="text-muted">
                                22.02.2020
                            </p>
                        </div>
                        <div class="col-md-5 text-right">
                            <p class="text-primary">45 użytkowników</p>

                        </div>
                    </div>
                </div>
            </div>
            <div class="card m-b-30 col-md-4" style="left:1.5%">
                <div class="card-header">
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-7">
                            <h6 class="fw-600">Nowe posty (boty)</h6>
                            <p class="text-muted">
                                W dniu
                            </p>
                        </div>
                        <div class="col-md-5 my-auto text-right">
                            <h2 class="text-primary"><i class="mdi mdi-file-code"></i></h2>

                        </div>
                    </div>
                    <div class="progress" style="height: 5px">
                        <div class="progress-bar" role="progressbar" style="width: 100%" aria-valuenow="0"
                             aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <div class="row m-t-10">
                        <div class="col-md-7">

                            <p class="text-muted">
                                22.02.2020
                            </p>
                        </div>
                        <div class="col-md-5 text-right">
                            <p class="text-primary">45 postów</p>

                        </div>
                    </div>
                </div>
            </div>
            <div class="card m-b-30 col-md-4" style="left:3%">
                <div class="card-header">
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-7">
                            <h6 class="fw-600">Posty (Użytkownicy)</h6>
                            <p class="text-muted">
                                W dniu
                            </p>
                        </div>
                        <div class="col-md-5 my-auto text-right">
                            <h2 class="text-primary"><i class="mdi mdi-file-plus"></i></h2>

                        </div>
                    </div>
                    <div class="progress" style="height: 5px">
                        <div class="progress-bar" role="progressbar" style="width: 100%" aria-valuenow="0"
                             aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <div class="row m-t-10">
                        <div class="col-md-7">

                            <p class="text-muted">
                                22.02.2020
                            </p>
                        </div>
                        <div class="col-md-5 text-right">
                            <p class="text-primary">45 postów</p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">

                <!--widget card begin-->
                <div class="card m-b-30">
                    <div class="card-header">
                        <h5 class="m-b-0">
                            <i class="mdi mdi-calendar"></i> Kalendarz
                        </h5>
                        <p class="m-b-0 text-muted">
                            Kalendarz na miesiąc.
                        </p>
                    </div>
                    <div class="card-body ">
                        <div class="col-md-12 m-b-30">
                            <div class="card">
                                <div class="card-body">
                                    <div id="calendar"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--widget card ends-->

                <!--widget card begin-->
                <div class="card m-b-30 ">
                    <div class="card-header">
                        <h5 class="m-b-0">
                            <i class="mdi mdi-information-variant"></i>
                            Informacje
                        </h5>
                        <p class="m-b-0 opacity-50">
                            Informacje nadawane przez własciciela serwisu.
                        </p>
                    </div>
                    <div class="card-body ">
                        <div class="accordion " id="accordionExample3">
                            <div class="card">
                                <div class="card-header" id="exampleOne">
                                    <h5 class="mb-0">
                                        <a href="#!" class="d-block" data-toggle="collapse"
                                           data-target="#example3-collapseOne" aria-expanded="true"
                                           aria-controls="collapseOne">
                                            <i class="mdi mdi-home"></i> Collapsible Group Item #1
                                        </a>
                                    </h5>
                                </div>

                                <div id="example3-collapseOne" class="collapse show" aria-labelledby="exampleOne"
                                     data-parent="#accordionExample3">
                                    <div class="card-body">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                        richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard
                                        dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon
                                        tempor, sunt aliqua put a bird on it squid single-origin coffee nulla
                                        assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore
                                        wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher
                                        vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic
                                        synth nesciunt you probably haven't heard of them accusamus labore
                                        sustainable VHS.
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="exampleTwo">
                                    <h5 class="mb-0">
                                        <a href="#!" class="d-block collapsed" data-toggle="collapse"
                                           data-target="#example3-collapseTwo" aria-expanded="false"
                                           aria-controls="collapseTwo">
                                            <i class="mdi mdi-message"></i> Collapsible Group Item #2
                                        </a>
                                    </h5>
                                </div>
                                <div id="example3-collapseTwo" class="collapse" aria-labelledby="exampleTwo"
                                     data-parent="#accordionExample3">
                                    <div class="card-body">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                        richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard
                                        dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon
                                        tempor, sunt aliqua put a bird on it squid single-origin coffee nulla
                                        assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore
                                        wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher
                                        vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic
                                        synth nesciunt you probably haven't heard of them accusamus labore
                                        sustainable VHS.
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="exampleThree">
                                    <h5 class="mb-0">
                                        <a href="#!" class="d-block collapsed" data-toggle="collapse"
                                           data-target="#example3-collapseThree" aria-expanded="false"
                                           aria-controls="collapseThree">
                                            <i class="mdi mdi-lock"></i> Collapsible Group Item #3
                                        </a>
                                    </h5>
                                </div>
                                <div id="example3-collapseThree" class="collapse" aria-labelledby="exampleThree"
                                     data-parent="#accordionExample3">
                                    <div class="card-body">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                        richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard
                                        dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon
                                        tempor, sunt aliqua put a bird on it squid single-origin coffee nulla
                                        assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore
                                        wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher
                                        vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic
                                        synth nesciunt you probably haven't heard of them accusamus labore
                                        sustainable VHS.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--widget card ends-->


            </div>

        </div>


    </div>
</section>
