<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Alterar Cliente</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/clientes">Visualizar Clientes</a></li>
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

                        <!-- formuláro enviando dados ao método store da classe Clientes -->
                        <form action="/clientes/store" method="post">
                            <div class="card-body">
                                <div class="row">
                                    <input name="idCli" type="hidden" value="<?= $tempCli['idCli'] ?>">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="nomCli">Nome completo</label>
                                            <input id="nomCli" name="nomCli" type="text" class="form-control" value="<?= $tempCli['nomCli'] ?>">
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="form-group">
                                            <label for="dtNascCli">Data de Nascimento</label>
                                            <input id="dtNascCli" name="dtNascCli" type="date" class="form-control" value="<?= $tempCli['dtNascCli'] ?>">
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="form-group">
                                            <label for="celCli">Celular</label>
                                            <input id="celCli" name=" celCli" type="text" class="form-control" value="<?= $tempCli['celCli'] ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-8">
                                        <div class="form-group">
                                            <label for="endCli">Endereço</label>
                                            <input id="endCli" name="endCli" type="text" class="form-control" value="<?= $tempCli['endCli'] ?>">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label for="limitCredCli">Limite de Crédito</label>
                                            <input id="limitCredCli" name="limitCredCli" type="text" class="form-control" value="<?= $tempCli['limitCredCli'] ?>">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card-footer">
                                <a href="/clientes" class="btn btn-secondary"><i class="fas fa-caret-left mr-2"></i>Voltar</a>
                                <button type="submit" class="btn btn-primary"><i class="fas fa-save mr-2"></i>Salvar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>