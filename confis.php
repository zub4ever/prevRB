<?php include("cabecalho.php"); ?>
<div class=" cartone-b jumbotron d-flex justify-content-center bg-secondary">
	<div class="text-black">
		<div class="ml-auto mt-auto mr-auto mb-auto d-flex ">
			<h2 class="text-left font-weight-bold text-uppercase text-white">Conselho Fiscal - CONFIS</h2>
		</div>
	</div>
</div>
<div class="container pb-3 mb-3 ">
	<div class="row mt-5 mb-5 py-5 d-flex justify-content-space-between">
		<div class="col-sm-12 col-lg-3 mt-3">
			<a href="historico-confis.php" class="btn btn-primary" style="width: 100%;">
				<h6 class="text-left font-weight-bold text-uppercase text-white">Histórico</h6>
			</a>
		</div>
		<div class="col-sm-12 col-lg-3 mt-3">
			<a href="conselheiros_confis.php" class="btn btn-primary" style="width: 100%;">
				<h6 class="text-left font-weight-bold text-uppercase text-white">Conselheiros</h6>
			</a>
		</div>
		<div class="col-sm-12 col-lg-3 mt-3">
			<a href="pareceres-confis.php" class="btn btn-primary" style="width: 100%;">
				<h6 class="text-left font-weight-bold text-uppercase text-white">Pareceres</h6>
			</a>
		</div>
		<div class="col-sm-12 col-lg-3 mt-3">
			<a href="resolucoes-confis.php" class="btn btn-primary" style="width: 100%;">
				<h6 class="text-left font-weight-bold text-uppercase text-white">Resoluções</h6>
			</a>
		</div>
		<div class="col-sm-12 col-lg-3 mt-3">
			<a href="atasDasReunioes-confis.php" class="btn btn-primary" style="width: 100%;">
				<h6 class="text-left font-weight-bold text-uppercase text-white">Atas das Reuniões</h6>
			</a>
		</div>
		<div class="col-sm-12 col-lg-3 mt-3">
			<a href="calendario-confis.php" class="btn btn-primary" style="width: 100%;">
				<h6 class="text-left font-weight-bold text-uppercase text-white">Calendário de reuniões</h6>
			</a>
		</div>
		<div class="col-sm-12 col-lg-3 mt-3">
			<a href="documentos/confis/regimento_conselho_fiscal.pdf" class="btn btn-primary" style="width: 100%;">
				<h6 class="text-left font-weight-bold text-uppercase text-white">Regimento Interno</h6>
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
