<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Minha Conta</h1>
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
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="nomUsu">Nome completo</label>
                                        <input id="nomUsu" name="nomUsu" type="text" class="form-control" value="Exemplo" readonly="reandoly">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="apelidUsu">Usuário</label>
                                        <input id="apelidUsu" name="apelidUsu" type="text" class="form-control" value="Exemplo" readonly="reandoly">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="senhaUsu">Senha</label>
                                        <input id="senhaUsu" name="senhaUsu" type="password" class="form-control" value="*************" readonly="reandoly">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card-footer">
                            <a href="<?= previous_url(); ?>" class="btn btn-secondary"><i class="fas fa-caret-left mr-2"></i>Voltar</a>
                            <a href="" class="btn btn-primary"><i class="fas fa-pen mr-2"></i>Alterar</a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>