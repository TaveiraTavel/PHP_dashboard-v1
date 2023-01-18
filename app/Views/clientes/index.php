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
                                            <td><a href="/clientes/alterar/<?= $tempCli['idCli'] ?>">Alterar</a> | <a href="/clientes/deletar">Deletar</a></td>
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