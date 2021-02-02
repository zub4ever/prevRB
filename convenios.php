<?php include("cabecalho.php"); ?>
<div class="jumbotron d-flex justify-content-center bg-secondary">
    <div class="text-black">
        <div class="ml-auto mt-auto mr-auto mb-auto d-flex ">
            <h3 class="text-left font-weight-bold text-uppercase text-white">Convênios</h3>
        </div>
    </div>
</div>
<div class="container pb-3 mb-3 ">
    <div class="row mt-5 mb-5 py-5 d-flex justify-content-center">
        <div class="col-sm-12 col-lg-3 mt-3">
            <a href="documentos/COMPREV_ASSINADO_2015.pdf" class="btn btn-primary" style="width: 100%">
                <h4 class="text-left font-weight-bold text-uppercase text-white">Comprev</h4>
            </a>
        </div>
        <div class="col-sm-12 col-lg-3 mt-3">
            <a href="documentos/convenio_siprev.pdf" class="btn btn-primary" style="width: 100%">
                <h4 class="text-left font-weight-bold text-uppercase text-white">Siprev</h4>
            </a>
        </div>
    </div>
    <div class="d-flex justify-content-around">
        <a class="btn btn-outline-primary" onClick="history.go(-1)" role="button" style="width: 20%">
            <i class="fa fa-arrow-circle-left"></i>
            <span>Voltar</span>
        </a>
    </div>
</div>

<?php include("rodape.php"); ?>