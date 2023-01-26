<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0"><?= (isset($tempFunc)) ? "Alterar" : "Cadastrar" ?> Funcionário</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/funcionario">Visualizar Funcionários</a></li>
                        <li class="breadcrumb-item active"><?= (isset($tempFunc)) ? "Alterar" : "Cadastrar" ?></li>
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

                        <!-- formuláro enviando dados ao método store da classe Funcionario -->
                        <form action="/funcionarios/store" method="post">
                            <div class="card-body">
                                <div class="row">

                                    <?php if (isset($tempFunc)) : ?>

                                        <input name="idFunc" type="hidden" value="<?= $tempFunc['idFunc'] ?>">

                                    <?php endif; ?>

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="nomFunc">Nome completo</label>
                                            <input id="nomFunc" name="nomFunc" type="text" class="form-control" value="<?= (isset($tempFunc)) ? $tempFunc['nomFunc'] : "" ?>">
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="form-group">
                                            <label for="dtNascFunc">Data de Nascimento</label>
                                            <input id="dtNascFunc" name="dtNascFunc" type="date" class="form-control" value="<?= (isset($tempFunc)) ? $tempFunc['dtNascFunc'] : "" ?>">
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="form-group">
                                            <label for="celFunc">Celular</label>
                                            <input id="celFunc" name=" celFunc" type="text" class="form-control" value="<?= (isset($tempFunc)) ? $tempFunc['celFunc'] : "" ?>">
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="form-group">
                                            <label for="RGFunc">RG</label>
                                            <input id="RGFunc" name="RGFunc" type="text" class="form-control" value="<?= (isset($tempFunc)) ? $tempFunc['RGFunc'] : "" ?>">
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="form-group">
                                            <label for="CPFFunc">CPF</label>
                                            <input id="CPFFunc" name="CPFFunc" type="text" class="form-control" value="<?= (isset($tempFunc)) ? $tempFunc['CPFFunc'] : "" ?>">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="endFunc">Endereço</label>
                                            <input id="endFunc" name="endFunc" type="text" class="form-control" value="<?= (isset($tempFunc)) ? $tempFunc['endFunc'] : "" ?>">
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="form-group">
                                            <label for="dtContratFunc">Data de Contratação</label>
                                            <input id="dtContratFunc" name="dtContratFunc" type="date" class="form-control" value="<?= (isset($tempFunc)) ? $tempFunc['dtContratFunc'] : "" ?>">
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="form-group">
                                            <label for="cargoFunc">Cargo</label>
                                            <input id="cargoFunc" name="cargoFunc" type="text" class="form-control" value="<?= (isset($tempFunc)) ? $tempFunc['cargoFunc'] : "" ?>">
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="form-group">
                                            <label for="salarioFunc">Salário</label>
                                            <input id="salarioFunc" name="salarioFunc" type="text" class="form-control" value="<?= (isset($tempFunc)) ? $tempFunc['salarioFunc'] : "" ?>">
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="form-group">
                                            <label for="diaPagtoFunc">Dia de Pagamento</label>
                                            <input id="diaPagtoFunc" name="diaPagtoFunc" type="text" class="form-control" value="<?= (isset($tempFunc)) ? $tempFunc['diaPagtoFunc'] : "" ?>">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card-footer">
                                <a href="/funcionarios" class="btn btn-secondary"><i class="fas fa-caret-left mr-2"></i>Voltar</a>
                                <button type="submit" class="btn btn-primary"><i class="fas fa-<?= (isset($tempFunc)) ? "save" : "plus-circle" ?> mr-2"></i><?= (isset($tempFunc)) ? "Salvar" : "Cadastrar" ?></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>