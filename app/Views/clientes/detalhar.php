<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Detalhar Cliente</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/clientes">Visualizar Clientes</a></li>
                        <li class="breadcrumb-item active">Detalhar</li>
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
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Nome completo</label>
                                        <input id="nomCli" name="nomCli" type="text" class="form-control" value="<?= $tempCli['nomCli'] ?>" readonly="readonly">
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label>Data de Nascimento</label>
                                        <input type="date" class="form-control" value="<?= $tempCli['dtNascCli'] ?>" readonly="readonly">
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label>Celular</label>
                                        <input type="text" class="form-control" value="<?= $tempCli['celCli'] ?>" readonly="readonly">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-8">
                                    <div class="form-group">
                                        <label>Endereço</label>
                                        <input type="text" class="form-control" value="<?= $tempCli['endCli'] ?>" readonly="readonly">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label>Limite de Crédito</label>
                                        <input type="text" class="form-control" value="<?= $tempCli['limitCredCli'] ?>" readonly="readonly">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card-footer">
                            <a class="btn btn-primary" href="/clientes">Voltar</a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>