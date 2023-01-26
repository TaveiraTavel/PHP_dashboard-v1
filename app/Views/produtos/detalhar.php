<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Detalhar Produto</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/produto">Visualizar Produtos</a></li>
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
                            <h3 class="card-title">Ficha Técnica</h3>
                        </div>

                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-5">
                                    <div class="form-group">
                                        <label>Nome</label>
                                        <input class="form-control" value="<?= $tempProd['nomProd'] ?>" readonly="readonly">
                                    </div>
                                </div>
                                <div class="col-lg-7">
                                    <div class="form-group">
                                        <label>Descrição</label>
                                        <input class="form-control" value="<?= $tempProd['descProd'] ?>" readonly="readonly">
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label>Quantidade</label>
                                        <input class="form-control" value="<?= $tempProd['qtdProd'] ?>" readonly="readonly">
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label>Quantidade Min.</label>
                                        <input class="form-control" value="<?= $tempProd['qtdMinProd'] ?>" readonly="readonly">
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label>Valor de compra</label>
                                        <input class="form-control" value="<?= $tempProd['valCompProd'] ?>" readonly="readonly">
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label>Valor de venda</label>
                                        <input class="form-control" value="<?= $tempProd['valVendProd'] ?>" readonly="readonly">
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label>Margem de Lucro</label>
                                        <input class="form-control" value="<?= $tempProd['lucroProd'] ?>" readonly="readonly">
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label>Validade</label>
                                        <input class="form-control" value="<?= $tempProd['validadeProd'] ?>" readonly="readonly">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card-footer">
                            <a href="/produtos" class="btn btn-primary"><i class="fas fa-caret-left mr-2"></i>Voltar</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>