<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Detalhar Funcionário</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/funcionario">Visualizar Funcionários</a></li>
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

                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Nome completo</label>
                                        <input class="form-control" value="<?= $tempFunc['nomFunc'] ?>" readonly="readonly">
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label>Data de Nascimento</label>
                                        <input class="form-control" value="<?= $tempFunc['dtNascFunc'] ?>" readonly="readonly">
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label>Celular</label>
                                        <input class="form-control" value="<?= $tempFunc['celFunc'] ?>" readonly="readonly">
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label>RG</label>
                                        <input class="form-control" value="<?= $tempFunc['RGFunc'] ?>" readonly="readonly">
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label>CPF</label>
                                        <input class="form-control" value="<?= $tempFunc['CPFFunc'] ?>" readonly="readonly">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Endereço</label>
                                        <input class="form-control" value="<?= $tempFunc['endFunc'] ?>" readonly="readonly">
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label>Data de Contratação</label>
                                        <input class="form-control" value="<?= $tempFunc['dtContratFunc'] ?>" readonly="readonly">
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label>Cargo</label>
                                        <input class="form-control" value="<?= $tempFunc['cargoFunc'] ?>" readonly="readonly">
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label>Salário</label>
                                        <input class="form-control" value="<?= $tempFunc['salarioFunc'] ?>" readonly="readonly">
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label>Dia de Pagamento</label>
                                        <input class="form-control" value="<?= $tempFunc['diaPagtoFunc'] ?>" readonly="readonly">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card-footer">
                            <a href="/funcionarios" class="btn btn-primary"><i class="fas fa-caret-left mr-2"></i>Voltar</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>