<?php include("cabecalho.php"); ?>
<section style="text-align: center;">
  <div class="container" style="margin-top: 5%; margin-bottom: 10%; background-color: #43a9e012; padding: 50px; width: 100%;">
    <h2>Planejamentos</h2><br>
    <div class="row">
      <div class="col-lg-12 col-md-12" align="center">
      	<div class="btn-group mt-10" role="group">
          <a href="#documentos/planejamento_2021.pdf" class="btn btn-primary text-uppercase mt-10">Planejamento 2021</a>  
        </div>
        <div class="btn-group mt-10" role="group">
          <div class="button-group-area" align="center">
            <button id="btnGroupDrop1" type="button" class="btn btn-primary text-uppercase mt-10 dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
               Planejamento 2020
            </button>
            <div aria-labelledby="btnGroupDrop1" class="dropdown-menu" id="drop2">
                <a class="dropdown-item" href="documentos/planejamento_2020.pdf">Planejamento</a>
                <a class="dropdown-item" href="documentos/plano_de_acao_2020.pdf">Plano de Ação</a>
            </div>
        </div>
        </div>
        <div class="btn-group mt-10" role="group">
          <div class="button-group-area" align="center">
            <button id="btnGroupDrop1" type="button" class="btn btn-primary text-uppercase mt-10 dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
               Planejamento 2019
            </button>
            <div aria-labelledby="btnGroupDrop1" class="dropdown-menu" id="drop2">
                <a class="dropdown-item" href="documentos/planejamento_estrategico.pdf">Planejamento</a>
                <a class="dropdown-item" href="documentos/lista_presenca_planejamento.PDF">Lista de Presença</a>
                <a class="dropdown-item" href="documentos/plano_de_acao_2019.pdf">Plano de Ação</a>
                <a class="dropdown-item" href="documentos/relatorio_planejamento2019.pdf">Relatório</a>
            </div>
        </div>
        </div>
        <div class="btn-group mt-10" role="group">
          <a href="documentos/plano_100_dias.pdf" class="btn btn-primary text-uppercase mt-10">Planejamento 2017</a>  
        </div>
        <div class="btn-group mt-10" role="group">
          <a href="documentos/planejamento_2016.pdf" class="btn btn-primary text-uppercase mt-10">Planejamento 2016</a> 
        </div>
        <div class="btn-group mt-10" role="group">
           <a href="documentos/planejamento_2015.pdf" class="btn btn-primary text-uppercase mt-10">Planejamento 2015</a>
        </div>
        <a class="nav-link btn-outline-primary btn mt-10" onClick="history.go(-1)" role="button" Style="width: 10%;cursor:pointer;"><i class="fa fa-arrow-circle-left"></i><span>Voltar</span></a>
      </div>
    </div>
  </div>
</section>
<?php include("rodape.php"); ?>