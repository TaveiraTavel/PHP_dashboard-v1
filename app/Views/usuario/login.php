<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard | Login</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= base_url('theme/plugins/fontawesome-free/css/all.min.css') ?>">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="<?= base_url('theme/plugins/icheck-bootstrap/icheck-bootstrap.min.css') ?>">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url('theme/dist/css/adminlte.min.css') ?>">

</head>

<body class="hold-transition login-page">

    <?php
    $session = session();
    $alert = $session->get('alert');
    ?>

    <?php if (isset($alert)) : ?>

        <!-- SweetAlert2 -->
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <link rel="stylesheet" href="<?= base_url('theme/dist/css/sweetalert2.min.css') ?>">

        <script>
            Swal.fire({
                toast: true,
                position: 'top-end',
                icon: 'error',
                title: 'Usuário e senha não coincidem!',
                showConfirmButton: false,
                timer: 3500,
                timerProgressBar: true
            })
        </script>

    <?php endif; ?>

    <div class="login-box">
        <div class="login-logo">
            <i class="fas fa-fire ml-4 mr-3 mb-4 d-block" style="color: #cc5c1c; font-size: 92px;"></i>
            <a><b>Dashboard</b> CodeIgniter 4</a>
        </div>
        <!-- /.login-logo -->
        <div class="card">
            <div class="card-body login-card-body">
                <p class="login-box-msg">Acesse sua conta para continuar</p>

                <form action="/usuario/autenticar" method="post">
                    <div class="input-group mb-3">
                        <input name="apelidUsu" id="apelidUsu" type="text" class="form-control" placeholder="Usuário">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input name="senhaUsu" id="senhaUsu" type="password" class="form-control" placeholder="Senha">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary btn-block">Conectar-se</button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>
            </div>
            <!-- /.login-card-body -->
        </div>
    </div>
    <!-- /.login-box -->

    <a href="https://github.com/TaveiraTavel" class="mt-2">By: <i class="fab fa-github"></i> Mateus Taveira</p>

        <!-- jQuery -->
        <script src="<?= base_url('theme/plugins/jquery/jquery.min.js') ?>"></script>
        <!-- Bootstrap 4 -->
        <script src="<?= base_url('theme/plugins/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
        <!-- AdminLTE App -->
        <script src="<?= base_url('theme/dist/js/adminlte.min.js') ?>"></script>
</body>

</html>