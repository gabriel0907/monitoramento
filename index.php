<!DOCTYPE html>
<html lang="en">

<?php
require_once 'classes/usuarios.php';
$u = new Usuario;
?>

<head>
    <meta charset="utf-8" />
    <title>We-Log Login</title>
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
    <div id="app" class="app app-full-height app-without-header">
        <!-- BEGIN login -->
        <div class="login">
            <!-- BEGIN login-content -->
            <div class="login-content">
                <form action="" method="POST" name="login_form">
                    <h1 class="text-center">We-Log Login</h1>
                    <br>
                    <div class="mb-3">
                        <label class="form-label">Email do usuário<span class="text-danger">*</span></label>
                        <input type="text" class="form-control form-control-lg bg-white bg-opacity-5" value="" placeholder="Digite seu email cadastrado..." name="email" />
                    </div>
                    <div class="mb-3">
                        <div class="d-flex">
                            <label class="form-label">Senha<span class="text-danger">*</span></label>
                        </div>
                        <input type="password" class="form-control form-control-lg bg-white bg-opacity-5" value="" placeholder="Digite sua senha cadastrada..." name="senha" />
                    </div>
                    <div class="mb-3">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="customCheck1" />
                            <label class="form-check-label" for="customCheck1">Lembrar senha</label>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-outline-theme btn-lg d-block w-100 fw-500 mb-3">Acessar</button>
                </form>
            </div>
            <!-- END login-content -->
            <?php
            if (isset($_POST['email'])) {
                $email = addslashes($_POST['email']);
                $senha = addslashes($_POST['senha']);

                if (!empty($email) && !empty($senha)) {
                    $u->conectar("projeto_login", "localhost", "root", "");
                    if ($u->msgErro == "") {
                        if ($u->logar($email, $senha)) {
                            header("location:inicial.php");
                        } else {
                            echo "Email e/ou senha estão incorretos!";
                        }
                    }
                } else {
                    echo "" . $u->msgErro;
                } {
                    echo "Preencha todos os campos!";
                }
            }

            ?>

        </div>
        <!-- END login -->

        <!-- BEGIN btn-scroll-top -->
        <a href="" data-toggle="scroll-to-top" class="btn-scroll-top fade"><i class="fa fa-arrow-up"></i></a>
        <!-- END btn-scroll-top -->
    </div>
    <!-- END #app -->

    <!-- ================== BEGIN core-js ================== -->
    <script src="assets/js/vendor.min.js"></script>
    <script src="assets/js/app.min.js"></script>
    <!-- ================== END core-js ================== -->



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