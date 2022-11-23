<?php
include("classes/conexao.php");

$consulta = "SELECT * FROM controladora";
$controladora = $con->query($consulta) or die($con->error);


$status[0] = "OFFLINE";
$status[1] = "ONLINE";

$status_cor[0] = "danger";
$status_cor[1] = "success";

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta http-equiv="refresh" content="5">
    <meta charset="utf-8" />
    <title>Dashboard Controladoras</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <!-- ================== BEGIN core-css ================== -->
    <link href="dist/assets/css/vendor.min.css" rel="stylesheet" />
    <link href="dist/assets/css/app.min.css" rel="stylesheet" />
    <!-- ================== END core-css ================== -->

</head>

<body class='pace-top'>
    <!-- BEGIN #app -->
    <div id="app" class="app app-content-full-height app-without-sidebar ">
        <!-- BEGIN #header -->
        <div id="header" class="app-header">
            <!-- BEGIN brand -->
            <div class="row menu">
                <div class="col-9">
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
                <div class="col-2 menu-item dropdown dropdown-mobile-full">
                    <div class="brand">
                        <a href="inicial.php" class="brand-logo">
                            <span class="nav-link"><i class="fas fa-home" style="font-size:15px;"></i><strong>Pagina inicial</strong></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- BEGIN pos -->
        <div class="pos card" id="pos">
            <div class="pos-container card-body">
                <!-- BEGIN pos-menu -->
                <div class="pos-menu">
                    <!-- BEGIN nav-container -->
                    <div class="nav-container">
                        <div data-scrollbar="true" data-height="100%" data-skip-mobile="true">
                            <ul class="nav nav-tabs">
                                <li class="nav-item">
                                    <a class="nav-link" href="dashboard.php" data-filter="all">
                                        <div class="card">
                                            <div class="card-body">
                                                <i class="fa fa-fw fa-video"></i> CÂMERAS
                                            </div>
                                            <div class="card-arrow">
                                                <div class="card-arrow-top-left"></div>
                                                <div class="card-arrow-top-right"></div>
                                                <div class="card-arrow-bottom-left"></div>
                                                <div class="card-arrow-bottom-right"></div>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="dash_nvrs.php" data-filter="snacks">
                                        <div class="card">
                                            <div class="card-body">
                                                <i class="fa fa-fw fa-hdd"></i> NVRs
                                            </div>
                                            <div class="card-arrow">
                                                <div class="card-arrow-top-left"></div>
                                                <div class="card-arrow-top-right"></div>
                                                <div class="card-arrow-bottom-left"></div>
                                                <div class="card-arrow-bottom-right"></div>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="dash_switchs.php" data-filter="snacks">
                                        <div class="card">
                                            <div class="card-body">
                                                <i class="fa fa-fw fa-sitemap"></i>SWITCHS
                                            </div>
                                            <div class="card-arrow">
                                                <div class="card-arrow-top-left"></div>
                                                <div class="card-arrow-top-right"></div>
                                                <div class="card-arrow-bottom-left"></div>
                                                <div class="card-arrow-bottom-right"></div>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="dash_servidores.php" data-filter="snacks">
                                        <div class="card">
                                            <div class="card-body">
                                                <i class="fa fa-fw fa-server"></i> SERVIDORES
                                            </div>
                                            <div class="card-arrow">
                                                <div class="card-arrow-top-left"></div>
                                                <div class="card-arrow-top-right"></div>
                                                <div class="card-arrow-bottom-left"></div>
                                                <div class="card-arrow-bottom-right"></div>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active" href="dash_controladora.php" data-filter="snacks">
                                        <div class="card">
                                            <div class="card-body">
                                                <i class="fa fa-fw fa-window-restore"></i>CONTROLADORA
                                            </div>
                                            <div class="card-arrow">
                                                <div class="card-arrow-top-left"></div>
                                                <div class="card-arrow-top-right"></div>
                                                <div class="card-arrow-bottom-left"></div>
                                                <div class="card-arrow-bottom-right"></div>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- END nav-container -->
                </div>
                <!-- END pos-menu -->

                <!-- BEGIN pos-content -->
                <div class="pos-content">
                    <div class="row">
                        <?php while ($dado = $controladora->fetch_array()) { ?>
                            <div class="col-xl-2">
                                <div class="pos-content-container h-100 p-4" data-scrollbar="true" data-height="100%">
                                    <!-- <div class="col-sm-2"> -->
                                    <a class="card text-decoration-none">
                                        <?php ?>
                                        <div class="card-body d-f text-white m-5px bg-white bg-opacity-15">
                                            <div class="flex-fill"><strong>
                                                    <div class="text-<?php echo $status_cor[$dado['status']] ?>"><?php echo $status[$dado['status']] ?>
                                                        <i class="fa fa-window-restore fa-1x"></i>
                                                        <div class="mb-1"><?php echo $dado['controladora_nome'] ?>
                                                            <div class="mb-1"><?php echo $dado['controladora_ip'] ?></div>
                                                        </div>
                                                    </div>
                                                </strong>
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
                                    <!-- </div> -->

                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
                <!-- END pos-content -->

            </div>
            <div class="card-arrow">
                <div class="card-arrow-top-left"></div>
                <div class="card-arrow-top-right"></div>
                <div class="card-arrow-bottom-left"></div>
                <div class="card-arrow-bottom-right"></div>
            </div>
        </div>
        <!-- END pos -->
    </div>
    <!-- END #app -->

    <!-- ================== BEGIN core-js ================== -->
    <script src="assets/js/vendor.min.js"></script>
    <script src="assets/js/app.min.js"></script>
    <!-- ================== END core-js ================== -->

    <!-- ================== BEGIN page-js ================== -->
    <script src="../assets/js/demo/pos-customer-order.demo.js"></script>
    <!-- ================== END page-js ================== -->

</body>

</html>