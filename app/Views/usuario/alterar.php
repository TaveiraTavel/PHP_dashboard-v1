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
            icon: <?= in_array($alert, array('error_senhaatual', 'error_confirmsenha')) ? '\'error\'' : '' ?>,
            title: 'A senha <?= ($alert == 'error_senhaatual') ? 'atual' : (($alert == 'error_confirmsenha') ? 'nova' : '') ?> não coincide!',
            showConfirmButton: false,
            timer: 2500,
            timerProgressBar: true
        })
    </script>

<?php endif; ?>

<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Minha Conta</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/funcionario">Meus Dados</a></li>
                        <li class="breadcrumb-item active">Alterar</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Dados Pessoais</h3>
                        </div>

                        <!-- formuláro enviando dados ao método store da classe Produto -->
                        <form action="/usuario/store" method="post">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label for="nomUsu">Nome completo</label>
                                            <input id="nomUsu" name="nomUsu" type="text" class="form-control" value="<?= $tempUsu['nomUsu'] ?>">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label for="apelidUsu">Usuário</label>
                                            <input id="apelidUsu" name="apelidUsu" type="text" class="form-control" value="<?= $tempUsu['apelidUsu'] ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label for="senhaAtual">Senha Atual</label>
                                            <input id="senhaAtual" name="senhaAtual" type="password" class="form-control" value="">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label for="senhaNova">Nova Senha</label>
                                            <input id="senhaNova" name="senhaNova" type="password" class="form-control" value="">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label for="senhaNovaConf">Confirmar Nova Senha</label>
                                            <input id="senhaNovaConf" name="senhaNovaConf" type="password" class="form-control" value="">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card-footer">
                                <a href="/usuario" class="btn btn-secondary"><i class="fas fa-caret-left mr-2"></i>Voltar</a>
                                <button type="submit" class="btn btn-primary"><i class="fas fa-save mr-2"></i>Salvar</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>