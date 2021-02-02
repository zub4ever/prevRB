<?php include("cabecalho.php");?>
<!-- Modal -->
<div class="modal fade" id="myModal" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Atenção</h4>
      </div>
      <div class="modal-body">
        <img src="images/informe_recadastramento.png" align="center" width="100%;">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
      </div>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-md-5">
    <!--Início Slideshow-->
    <div class="panel panel-default">
      <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators 
          <ol class="carousel-indicators">
              <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
              <li data-target="#myCarousel" data-slide-to="1" class="active"></li>
          </ol>-->
        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
          <!-- <div class="item active">
            <a href="dia_aposentado_2018.php">
                <img src="images/encontro2/1.jpeg">
            </a>
            <div class="carousel-caption">
                <h4><a href="dia_aposentado_2018.php" style="color: white;">RBPREV realiza evento em comemoração ao Dia do Aposentado</a></h4>
            </div>
            </div>-->

            <div class="item active">
            <a href="aula_de_informatica_aposentados.php">
            <img src="images/aula_info_01.jpeg">
            </a>
            <div class="carousel-caption">
              <h4><a href="aula_de_informatica_aposentados.php" style="color: white;">Curso de Informática básica para aposentados</a></h4>
            </div>
          </div>

          <div class="item">
            <a href="http://dirf.rbprev.riobranco.ac.gov.br/sisced/" target="_blank">
            <img src="images/comprovante.png">
            </a>
          </div>
          <div class="item">
            <a href="http://portalcidadao.riobranco.ac.gov.br/contracheque/">
            <img src="images/img-servicos.PNG">
            </a>
          </div>
        </div>
        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
    <!--<a href="noticias_anteriores.php" class="btn btn-success">Notícias anteriores</a> | -->
    <a href="rbprevEmNumeros.php" class="btn btn-primary">RBPREV em Números</a> | 
    <a href="documentos/declaracao_de_residencia.pdf" class="btn btn-warning"> Declaraçãode Residência</a>
    <hr>
  </div>
  <div class="col-md-7">
    <div class="col-xs-6 col-md-4">
      <a href="http://aplicacoes.rbprev.riobranco.ac.gov.br/DAP/" class="thumbnail" target="_blank">
      <img src="images/boleto.jpg" alt="Botão Dap">
      </a>
    </div>
    <div class="col-xs-6 col-md-4">
      <a href="documentos/cartilha_rbprev.pdf" class="thumbnail" target="_blank">
      <img src="images/cartilha.png" alt="Botão para cartilha">
      </a>
    </div>
    <div class="col-xs-6 col-md-4">
      <a href="http://simulacao.rbprev.riobranco.ac.gov.br" class="thumbnail" target="_blank">
      <img src="images/simulacao.jpg" alt="Botão Simulação de Aposentadoria">
      </a>
    </div>
    <div class="col-xs-6 col-md-4">
      <a href="investimentos.php" class="thumbnail">
      <img src="images/Investimentos.jpg" alt="Botão de Investimentos">
      </a>
    </div>
    <div class="col-xs-6 col-md-4">
      <a href="portalDaTransparencia.php" class="thumbnail">
      <img src="images/info.jpg" alt="Botão Portal da transparência">
      </a>
    </div>
    <div class="col-xs-6 col-md-4">
      <a href="fale-conosco.php" class="thumbnail">
      <img src="images/faleconosco.jpg" alt="Botão fale conosco">
      </a>
    </div>
    <div class="col-xs-6 col-md-4">
      <!-- <a href="documentos/Certificado.pdf" class="thumbnail" target="_blank">
        <img src="images/crp.jpg" alt="Certificado de Regularidade">
        </a>-->
      <a href="documentos/Decreto_455_de_27_04_2018.pdf" class="thumbnail" target="_blank">
      <img src="images/botao_codigo_e.png" alt="Código de Ética">
      </a>
    </div>
    <div class="col-xs-6 col-md-4">
      <a href="documentos/dbvidasempre.pdf" class="thumbnail" target="_blank">
      <img src="images/dbvidasempre.png" alt="De Bem Com A Vida Sempre">
      </a>
    </div>
    <div class="col-xs-6 col-md-4">
      <a href="http://portalcidadao.riobranco.ac.gov.br/contracheque/" class="thumbnail" target="_blank">
      <img src="images/contracheque.jpg" alt="Botão de acesso ao site da Prefeitura de Rio Branco">
      </a>
    </div>
  </div>
</div>
<br/>
<div class="row">
  <div class="col-md-12">
    <div class="panel panel-primary">
      <div class="panel-heading"> Resumo da Folha - Março de 2019</div>
      <table id="ticket" class="table table-bordered">
        <tr>
          <th>Beneficiários</th>
          <th>Qtd</th>
          <th>Valor</th>
        </tr>
        <tr>
          <th>Aposentadorias FPREV</th>
          <th>658</th>
          <th>R$ 2.452.803,31</th>
        </tr>
        <tr>
          <th>Aposentadorias FFIN</th>
          <th>22</th>
          <th>R$ 210.020,38</th>
        </tr>
        <tr>
          <th>Pensões FPREV</th>
          <th>118</th>
          <th>R$ 203.321,38</th>
        </tr>
        <tr>
          <th>Pensões FFIN</th>
          <th>11</th>
          <th>R$ 55.044,30</th>
        </tr>
        <tr>
          <th>Total de Pagamento dos benefícios - FPREV</th>
          <th>776</th>
          <th>R$ 2.656.124,69</th>
        </tr>
        <tr>
          <th>Total de Pagamento dos benefícios - FFIN</th>
          <th>33</th>
          <th>R$ 265.064,68</th>
        </tr>
        <tr>
          <td><a href="numeros_outros_meses.php">Meses Anteriores</a></td>
        </tr>
      </table>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-md-3">
    <div class="panel panel-default">
      <img src="images/rbprev_servicos.gif" class="img-responsive">
    </div>
  </div>
  <div class="col-md-3">
    <div class="panel panel-default">
      <a href="documentos/Certificado.pdf" target="_blank" style="text-decoration: none;">
      <img src="images/crp.jpg" class="img-responsive">
      </a>
    </div>
  </div>
  <div class="col-md-3">
    <div class="panel panel-default">
      <a href="http://riobranco.ac.gov.br/" target="_blank" style="text-decoration: none;">
      <img src="images/prefeitura-de-rio-branco-300x150.png" class="img-responsive">
      </a>
    </div>
  </div>
  <div class="col-md-3">
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
         js = d.createElement(s); js.id = id;
         js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.8";
         fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));
    </script>
    <div class="fb-page" data-href="https://www.facebook.com/RBPREV.RBO.AC/" data-tabs="timeline" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
      <blockquote cite="https://www.facebook.com/RBPREV.RBO.AC/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/RBPREV.RBO.AC/">RBPREV - Instituto de Previdência do Município de Rio Branco/AC</a></blockquote>
    </div>
  </div>
</div>
<br/>
<?php include("rodape.php");?>