<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8" />
    <title>Pagina Inicial</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <!-- ================== BEGIN core-css ================== -->
    <link href="dist/assets/css/vendor.min.css" rel="stylesheet" />
    <link href="dist/assets/css/app.min.css" rel="stylesheet" />
    <!-- ================== END core-css ================== -->

    <!-- ================== BEGIN page-css ================== -->
    <link href="dist/assets/plugins/jvectormap-next/jquery-jvectormap.css" rel="stylesheet" />
    <!-- ================== END page-css ================== -->

</head>

<body>
    <!-- BEGIN #app -->
    <div id="app" class="app app-content-full-height app-without-sidebar ">
        <!-- BEGIN #header -->
        <div id="header" class="app-header">
            <!-- BEGIN brand -->
            <div class="row menu">
                <div class="col-11">
                    <div class="brand">
                        <a href="dashboard.php" class="brand-logo">
                            <span class="brand-img">
                                <span class="brand-img-text text-theme">W</span>
                            </span>
                            <span class="nav-link"><strong>WeLog Monitoramento</strong></span>
                        </a>
                    </div>
                </div>
                <div class="col-1 menu-item dropdown dropdown-mobile-full">
                    <div class="brand">
                        <a href="index.php" class="brand-logo">
                            <span class="nav-link"><i class="fas fa-angle-double-left" style="font-size:15px;"></i><strong>Sair</strong></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- END #header -->

        <!-- BEGIN #content -->
        <div id="content" class="app-content">
            <!-- BEGIN row -->
            <div class="row">
                <div class="col-sm-4">
                    <a href="listas/cameras.php" class="card text-decoration-none">
                        <div class="card-body px-4 d-flex align-items-center text-white m-5px bg-white bg-opacity-15">
                            <div class="flex-fill">
                                <h2>Lista de Câmeras</h2>
                                <button type="button" class="btn btn-outline-theme btn-lg">Acessar</button>
                            </div>
                            <div class="opacity-5">
                                <i class="fa fa-video fa-4x"></i>
                            </div>
                        </div>

                        <!-- card-arrow -->
                        <div class="card-arrow">
                            <div class="card-arrow-top-left"></div>
                            <div class="card-arrow-top-right"></div>
                            <div class="card-arrow-bottom-left"></div>
                            <div class="card-arrow-bottom-right"></div>
                        </div>
                    </a>
                    <!-- END card-body -->

                </div>
                <div class="col-sm-4">
                    <a href="listas/servidores.php" class="card text-decoration-none">
                        <div class="card-body px-4 d-flex align-items-center text-white m-5px bg-white bg-opacity-15">
                            <div class="flex-fill">
                                <h2>Lista de Servidores</h2>
                                <button type="button" class="btn btn-outline-theme btn-lg">Acessar</button>
                            </div>
                            <div class="opacity-5">
                                <i class="fa fa-server fa-4x"></i>
                            </div>
                        </div>

                        <!-- card-arrow -->
                        <div class="card-arrow">
                            <div class="card-arrow-top-left"></div>
                            <div class="card-arrow-top-right"></div>
                            <div class="card-arrow-bottom-left"></div>
                            <div class="card-arrow-bottom-right"></div>
                        </div>
                    </a>
                    <!-- END card-body -->

                </div>
                <div class="col-sm-4">
                    <a href="listas/switchs.php" class="card text-decoration-none">
                        <div class="card-body px-4 d-flex align-items-center text-white m-5px bg-white bg-opacity-15">
                            <div class="flex-fill">
                                <h2>Lista de Switch</h2>
                                <button type="button" class="btn btn-outline-theme btn-lg">Acessar</button>
                            </div>
                            <div class="opacity-5">
                                <i class="fa fa-sitemap fa-4x"></i>
                            </div>
                        </div>

                        <!-- card-arrow -->
                        <div class="card-arrow">
                            <div class="card-arrow-top-left"></div>
                            <div class="card-arrow-top-right"></div>
                            <div class="card-arrow-bottom-left"></div>
                            <div class="card-arrow-bottom-right"></div>
                        </div>
                    </a>
                    <!-- END card-body -->

                </div>

            </div>
            <div class="row">
                <div class="col-sm-4">
                    <a href="listas/nvrs.php" class="card text-decoration-none">
                        <div class="card-body px-4 d-flex align-items-center text-white m-5px bg-white bg-opacity-15">
                            <div class="flex-fill">
                                <h2>Lista de NVRs</h2>
                                <button type="button" class="btn btn-outline-theme btn-lg">Acessar</button>
                            </div>
                            <div class="opacity-5">
                                <i class="fa fa-hdd fa-4x"></i>
                            </div>
                        </div>

                        <!-- card-arrow -->
                        <div class="card-arrow">
                            <div class="card-arrow-top-left"></div>
                            <div class="card-arrow-top-right"></div>
                            <div class="card-arrow-bottom-left"></div>
                            <div class="card-arrow-bottom-right"></div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-4">
                    <a href="listas/controladora.php" class="card text-decoration-none">
                        <div class="card-body px-4 d-flex align-items-center text-white m-5px bg-white bg-opacity-15">
                            <div class="flex-fill">
                                <h2>Controle de Acesso</h2>
                                <button type="button" class="btn btn-outline-theme btn-lg">Acessar</button>
                            </div>
                            <div class="opacity-5">
                                <i class="fa fa-window-restore fa-4x"></i>
                            </div>
                        </div>

                        <!-- card-arrow -->
                        <div class="card-arrow">
                            <div class="card-arrow-top-left"></div>
                            <div class="card-arrow-top-right"></div>
                            <div class="card-arrow-bottom-left"></div>
                            <div class="card-arrow-bottom-right"></div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-4">
                    <a href="dashboard.php" target="_blank" class="card text-decoration-none">
                        <div class="card-body px-4 d-flex align-items-center text-white m-5px bg-white bg-opacity-15">
                            <div class="flex-fill">
                                <h2>Dashboard Geral</h2>
                                <button href="" type="button" class="btn btn-outline-theme btn-lg">Acessar</button>
                            </div>
                            <div class="opacity-5">
                                <i class="fa fa-chart-line fa-4x"></i>
                            </div>
                        </div>

                        <!-- card-arrow -->
                        <div class="card-arrow">
                            <div class="card-arrow-top-left"></div>
                            <div class="card-arrow-top-right"></div>
                            <div class="card-arrow-bottom-left"></div>
                            <div class="card-arrow-bottom-right"></div>
                        </div>
                    </a>
                </div>
            </div>

            <!-- END #content -->

            <!-- BEGIN btn-scroll-top -->
            <a href="#" data-toggle="scroll-to-top" class="btn-scroll-top fade"><i class="fa fa-arrow-up"></i></a>
            <!-- END btn-scroll-top -->
        </div>
        <!-- END #app -->

        <!-- ================== BEGIN core-js ================== -->
        <script src="dist/assets/js/vendor.min.js"></script>
        <script src="dist/assets/js/app.min.js"></script>
        <!-- ================== END core-js ================== -->

        <!-- ================== BEGIN page-js ================== -->
        <script src="dist/assets/plugins/jvectormap-next/jquery-jvectormap.min.js"></script>
        <script src="dist/assets/plugins/jvectormap-content/world-mill.js"></script>
        <script src="dist/assets/plugins/apexcharts/dist/apexcharts.min.js"></script>
        <script src="dist/assets/js/demo/dashboard.demo.js"></script>
        <!-- ================== END page-js ================== -->


        <script>
            (function(i, s, o, g, r, a, m) {
                i['GoogleAnalyticsObject'] = r;
                i[r] = i[r] || function() {
                    (i[r].q = i[r].q || []).push(arguments)
                }, i[r].l = 1 * new Date();
                a = s.createElement(o),
                    m = s.getElementsByTagName(o)[0];
                a.async = 1;
                a.src = g;
                m.parentNode.insertBefore(a, m)
            })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

            ga('create', 'UA-53034621-1', 'auto');
            ga('send', 'pageview');
        </script>
</body>

</html>