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
            <form action="/produtos/excluir" method="post">
                <input type="hidden" id="idProd" name="idProd" value="">
                <div class="modal-header">
                    <h4 class="modal-title">Excluir registro</h4>
                </div>
                <div class="modal-body">
                    <p>Você tem certeza que deseja deletar esse produto?</p>
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
                    <h1 class="m-0">Visualizar Produtos</h1>
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
                            <a href="/produtos/cadastrar" class="card-title"><i class="fas fa-plus-circle mr-2"></i>Cadastrar Novo</a>
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
                                        <th>Quantidade</th>
                                        <th>Quantidade Min.</th>
                                        <th>Preço</th>
                                        <th>Ações</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <!-- looping para listar todos os funcionários da lista passada 
                                         pelo método index da controller funcionários               -->
                                    <?php if (!empty($tempProdList)) : ?>
                                        <?php helper('echomasks_helper');
                                        foreach ($tempProdList as $tempProd) : ?>

                                            <tr>
                                                <td><?= $tempProd['idProd'] ?></td>
                                                <td><?= $tempProd['nomProd'] ?></td>
                                                <td><?= $tempProd['qtdProd'] ?></td>
                                                <td><?= $tempProd['qtdMinProd'] ?></td>
                                                <td><?= echomoney($tempProd['valVendProd']) ?></td>
                                                <td><a class="btn btn-outline-primary mr-2" href="/produtos/detalhar/<?= $tempProd['idProd'] ?>"><span class="fas fa-search mr-2">
                                                        </span>Detalhar</a>
                                                    <a class="btn btn-outline-warning mr-2" href="/produtos/alterar/<?= $tempProd['idProd'] ?>"><span class="fas fa-edit mr-2">
                                                        </span>Alterar</a>
                                                    <button type="button" class="btn btn-outline-danger mr-2" onclick="document.getElementById('idProd').value = '<?= $tempProd['idProd'] ?>'" data-toggle="modal" data-target="#modal-default">
                                                        <span class="fas fa-trash mr-2">
                                                        </span>Deletar</button>
                                                </td>
                                            </tr>

                                        <?php endforeach; ?>
                                    <?php else : ?>
                                        <tr>
                                            <td colspan="100%">Nenhum produto cadastrado!</td>
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