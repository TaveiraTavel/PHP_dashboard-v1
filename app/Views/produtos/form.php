<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0"><?= (isset($tempProd)) ? "Alterar" : "Cadastrar" ?> Produto</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/funcionario">Visualizar Produtos</a></li>
                        <li class="breadcrumb-item active"><?= (isset($tempProd)) ? "Alterar" : "Cadastrar" ?></li>
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
                            <h3 class="card-title">Ficha Técnica</h3>
                        </div>

                        <!-- formuláro enviando dados ao método store da classe Produto -->
                        <form action="/produtos/store" method="post">
                            <div class="card-body">
                                <div class="row">

                                    <?php if (isset($tempProd)) : ?>

                                        <input name="idProd" type="hidden" value="<?= $tempProd['idProd'] ?>">

                                    <?php endif; ?>

                                    <div class="col-lg-5">
                                        <div class="form-group">
                                            <label for="nomProd">Nome</label>
                                            <input id="nomProd" name="nomProd" type="text" class="form-control" value="<?= (isset($tempProd)) ? $tempProd['nomProd'] : "" ?>">
                                        </div>
                                    </div>
                                    <div class="col-lg-7">
                                        <div class="form-group">
                                            <label for="descProd">Descrição</label>
                                            <input id="descProd" name="descProd" type="text" class="form-control" value="<?= (isset($tempProd)) ? $tempProd['descProd'] : "" ?>">
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="form-group">
                                            <label for="qtdProd">Quantidade</label>
                                            <input id="qtdProd" name="qtdProd" type="text" class="form-control" value="<?= (isset($tempProd)) ? $tempProd['qtdProd'] : "" ?>">
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="form-group">
                                            <label for="qtdMinProd">Quantidade Min.</label>
                                            <input id="qtdMinProd" name="qtdMinProd" type="text" class="form-control" value="<?= (isset($tempProd)) ? $tempProd['qtdMinProd'] : "" ?>">
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="form-group">
                                            <label for="valCompProd">Valor de compra</label>
                                            <input id="valCompProd" name="valCompProd" type="text" class="form-control" value="<?= (isset($tempProd)) ? $tempProd['valCompProd'] : "" ?>">
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="form-group">
                                            <label for="valVendProd">Valor de venda</label>
                                            <input id="valVendProd" name="descProd" type="text" class="form-control" value="<?= (isset($tempProd)) ? $tempProd['valVendProd'] : "" ?>">
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="form-group">
                                            <label for="lucroProd">Margem de Lucro</label>
                                            <input id="lucroProd" name="lucroProd" type="text" class="form-control" value="<?= (isset($tempProd)) ? $tempProd['lucroProd'] : "" ?>">
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="form-group">
                                            <label for="validadeProd">Validade</label>
                                            <input id="validadeProd" name="validadeProd" type="date" class="form-control" value="<?= (isset($tempProd)) ? $tempProd['validadeProd'] : "" ?>">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card-footer">
                                <a href="/produtos" class="btn btn-secondary"><i class="fas fa-caret-left mr-2"></i>Voltar</a>
                                <button type="submit" class="btn btn-primary"><i class="fas fa-<?= (isset($tempProd)) ? "save" : "plus-circle" ?> mr-2"></i><?= (isset($tempProd)) ? "Salvar" : "Cadastrar" ?></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>