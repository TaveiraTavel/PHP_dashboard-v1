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
            <form action="/funcionarios/excluir" method="post">
                <input type="hidden" id="idFunc" name="idFunc" value="">
                <div class="modal-header">
                    <h4 class="modal-title">Excluir registro</h4>
                </div>
                <div class="modal-body">
                    <p>Você tem certeza que deseja deletar esse funcionários?</p>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
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
                    <h1 class="m-0">Visualizar Funcionários</h1>
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
                            <a href="/funcionarios/cadastrar" class="card-title"><i class="fas fa-plus-circle mr-2"></i>Cadastrar Novo</a>
                            <div class="card-tools">
                                <div class="input-group input-group-sm" style="width: 150px;">
                                    <input type="text" name="table_search" class="form-control float-right" placeholder="Buscar">
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
                                        <th>CPF</th>
                                        <th>RG</th>
                                        <th>Celular</th>
                                        <th>Cargo</th>
                                        <th>Ações</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <!-- looping para listar todos os funcionários da lista passada 
                                         pelo método index da controller funcionários               -->
                                    <?php if (!empty($tempFuncList)) : ?>
                                        <?php helper('echomasks_helper');
                                        foreach ($tempFuncList as $tempFunc) : ?>

                                            <tr>
                                                <td><?= $tempFunc['idFunc'] ?></td>
                                                <td><?= $tempFunc['nomFunc'] ?></td>
                                                <td><?= echocpf($tempFunc['CPFFunc']) ?></td>
                                                <td><?= echorg($tempFunc['RGFunc']) ?></td>
                                                <td><?= echocel($tempFunc['celFunc']) ?></td>
                                                <td><?= $tempFunc['cargoFunc'] ?></td>
                                                <td><a class="btn btn-outline-primary mr-2" href="/funcionarios/detalhar/<?= $tempFunc['idFunc'] ?>"><span class="fas fa-search mr-2">
                                                        </span>Detalhar</a>
                                                    <a class="btn btn-outline-warning mr-2" href="/funcionarios/alterar/<?= $tempFunc['idFunc'] ?>"><span class="fas fa-edit mr-2">
                                                        </span>Alterar</a>
                                                    <button type="button" class="btn btn-outline-danger mr-2" onclick="document.getElementById('idFunc').value = '<?= $tempFunc['idFunc'] ?>'" data-toggle="modal" data-target="#modal-default">
                                                        <span class="fas fa-trash mr-2">
                                                        </span>Deletar</button>
                                                </td>
                                            </tr>

                                        <?php endforeach; ?>
                                    <?php else : ?>
                                        <tr>
                                            <td colspan="12">Nenhum funcionário cadastrado!</td>
                                        </tr>
                                    <?php endif; ?>

                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>