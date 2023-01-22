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
            icon: <?= in_array($alert, array('success_create', 'success_update', 'success_delete')) ? '\'success\'' : '' ?>,
            title: 'Registro <?= ($alert == 'success_create') ? 'criado' : (($alert == 'success_update') ? 'editado' : (($alert == 'success_delete') ? 'apagado' : '')) ?> com sucesso!',
            showConfirmButton: false,
            timer: 2500,
            timerProgressBar: true
        })
    </script>

<?php endif; ?>

<div class="modal fade" id="modal-default">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="/clientes/excluir" method="post">
                <input type="hidden" id="idCli" name="idCli" value="">
                <div class="modal-header">
                    <h4 class="modal-title">Excluir Registro</h4>
                </div>
                <div class="modal-body">
                    <p>Você tem certeza que deseja deletar esse Cliente?</p>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                    <button type="submit" class="btn btn-danger">Deletar Registro</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Visualizar Clientes</h1>
                </div>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <a href="/clientes/cadastrar" class="card-title">Cadastrar Novo</a>
                            <div class="card-tools">
                                <div class="input-group input-group-sm" style="width: 150px;">
                                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">
                                    <div class="input-group-append">
                                        <button type="submit" class="btn btn-default">
                                            <i class="fas fa-search"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body table-responsive p-0" style="max-height: 70vh;">
                            <table class="table table-head-fixed text-nowrap">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Nome</th>
                                        <th>Data de Nascimento</th>
                                        <th>Celular</th>
                                        <th>Endereço</th>
                                        <th>Limite de Crédito</th>
                                        <th>Ações</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <!-- looping para listar todos os clientes da lista passada 
                                         pelo método index da controller Clientes               -->
                                    <?php foreach ($tempCliList as $tempCli) : ?>

                                        <tr>
                                            <td><?= $tempCli['idCli'] ?></td>
                                            <td><?= $tempCli['nomCli'] ?></td>
                                            <td><?= $tempCli['dtNascCli'] ?></td>
                                            <td><?= $tempCli['celCli'] ?></td>
                                            <td><?= $tempCli['endCli'] ?></td>
                                            <td><?= $tempCli['limitCredCli'] ?></td>
                                            <td><a class="btn btn-outline-primary mr-2" href="/clientes/detalhar/<?= $tempCli['idCli'] ?>"><span class="fas fa-search mr-2">
                                                    </span>Detalhar</a>
                                                <a class="btn btn-outline-warning mr-2" href="/clientes/alterar/<?= $tempCli['idCli'] ?>"><span class="fas fa-edit mr-2">
                                                    </span>Alterar</a>
                                                <button type="button" class="btn btn-outline-danger mr-2" onclick="document.getElementById('idCli').value = '<?= $tempCli['idCli'] ?>'" data-toggle="modal" data-target="#modal-default">
                                                    <span class="fas fa-trash mr-2">
                                                    </span>Deletar</button>
                                            </td>
                                        </tr>

                                    <?php endforeach; ?>

                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>