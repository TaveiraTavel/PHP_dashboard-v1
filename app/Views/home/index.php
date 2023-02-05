<?php
$session = session();
$alert = $session->get('alert');
$nomUsu = $session->get('nomUsu');
?>

<?php if (!empty($alert)) : ?>

    <!-- SweetAlert2 -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="<?= base_url('theme/dist/css/sweetalert2.min.css') ?>">

    <script>
        Swal.fire({
            toast: true,
            position: 'top-end',
            icon: 'success',
            title: 'Bem-vindo(a) <?= $nomUsu ?>!',
            showConfirmButton: false,
            timer: 2500,
            timerProgressBar: true
        })
    </script>

<?php endif; ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Página Inicial</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-2">
                    <div class="info-box">
                        <span class="info-box-icon bg-info"><i class="fas fa-users"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">Clientes</span>
                            <span class="info-box-number"><?= $countCli ?></span>
                        </div>
                    </div>
                </div>

                <div class="col-md-2">
                    <div class="info-box">
                        <span class="info-box-icon bg-success"><i class="fas fa-users"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">Funcionários</span>
                            <span class="info-box-number"><?= $countFunc ?></span>
                        </div>
                    </div>
                </div>

                <div class="col-md-2">
                    <div class="info-box">
                        <span class="info-box-icon bg-warning"><i class="fas fa-box-open"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">Produtos</span>
                            <span class="info-box-number"><?= $countProd ?></span>
                        </div>
                    </div>
                </div>

            </div>
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->