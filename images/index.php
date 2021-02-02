<?php 
	include("cabecalho.php");
	include('db/consultas.php');
	// Include WordPress
	// define('WP_USE_THEMES', false);
	// require('./noticias/wp-load.php');
	// // 
	// // Define quantos posts serão exibidos
	// query_posts('showposts=4');
	
	?>

	<script type="text/javascript">
		$(document).ready(function() {
			var ls1 = sessionStorage.getItem("modal1");
			// var ls2 = sessionStorage.getItem("modal2");
			if(!ls1){
				$(window).on('load', ()=>{
					$('#avisoModal').modal('show');
					sessionStorage.setItem("modal1", true);
	// 				$('#exampleModal1').modal('show');
	// window.open('cedula_c_tutorial.php', '_self');
	// 				sessionStorage.setItem("modal2", true);
				});
			}
		});
	
	</script>
	
	<div class="modal fade" id="avisoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<img class="img-fluid" src="images/COMUNICADO.jpg">
				</div>
	
			</div>
		</div>
	</div>
	
<!-- <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<img class="img-fluid" src="images/tc4.jpeg">
			</div>
			<a class="trd-btn" href="cedula_c_tutorial.php">CLIQUE AQUI PARA VER</a>
		</div>
	</div>
	</div> -->
<!-- SLIDE -->
<section class="service-area section-gap-a">
	<div id="slideshow" class="carousel slide carousel-fade" data-ride="carousel" align="center"  data-interval="5000">
		<!-- Indicators -->
		<ul class="carousel-indicators">
			<li data-target="#slideshow" data-slide-to="0" class="active"></li>
			<li data-target="#slideshow" data-slide-to="1"></li>
			<li data-target="#slideshow" data-slide-to="2"></li>
		</ul>
		<!-- O slideshow -->
		<div class="carousel-inner">
			<!-- <div class="carousel-item active">
				<div class="d-flex align-items-center justify-content-center min-vh-100">
					<a href="sobre-o-recadastramento.php">
						<img src="images/banner_recadastramento.jpg" alt="Recadastramento" class="img-fluid" />
					</a>
				</div>
				</div> -->
			<!-- <div class="carousel-item">
				<a href="http://rbprev.riobranco.ac.gov.br/">
					<img src="images/bn_novembro.png" alt="" class="img-fluid" />
				</a>
				</div> -->
			<!-- <div class="carousel-item">
				<a href="http://rbprev.riobranco.ac.gov.br/noticia_p080819.php">
					<img src="images/ReceitaComprev.png" alt="Comprev" class="img-fluid" />
				</a>
				</div>
				<div class="carousel-item">
				<a href="http://rbprev.riobranco.ac.gov.br/artigo_fprev.php">
					<img src="images/bannersitefprev.png" alt="" class="img-fluid" />
				</a>
				</div> -->
			<!-- <div class="carousel-item active">
				<a href="documentos/cartilha_reforma.pdf">
					<img src="images/cartilha_reforma.png" alt="" class="img-fluid" />
				</a>
				</div>
				<div class="carousel-item">
				<a href="cedula_c_tutorial.php">
					<img src="images/banner_cedulac.png"  alt="" class="img-fluid" />
				</a>
				</div> -->
			<div class="carousel-item">
				<a href="http://riobranco.ac.gov.br/" target="_blank">
				<img src="images/prefeitura_banner.png" class="img-fluid " alt="Prefeitura de Rio Branco">
				</a>  
			</div>
			<div class="carousel-item">
				<a href="outubro_rosa.php" target="_blank">
				<img src="images/outubro_rosa.jpeg" class="img-fluid " alt="Outubro rosa">
				</a>  
			</div>
			<div class="carousel-item active">
				<a href="https://sistema.ouvidorias.gov.br/publico/AC/RioBranco/manifestacao/RegistrarManifestacao" target="_blank">
				<img src="images/Banner_ouvidoria-rbr.png"  class="img-fluid " alt="Prefeitura de Rio Branco">
				</a>  
			</div>
		</div>
		<!-- controles -->
		<a class="carousel-control-prev" href="#slideshow" data-slide="prev">
		<span class="carousel-control-prev-icon"></span>
		</a>
		<a class="carousel-control-next" href="#slideshow" data-slide="next">
		<span class="carousel-control-next-icon"></span>
		</a>
	</div>
	<!-- FIM SLIDE-->
</section>
<!-- AREA DE SERVICOS -->
<section class="service-area section-gap" id="service">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-12 pb-50 header-text text-center">
				<h1 class="mb-10">Serviços</h1>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-2 col-md-6">
				<div class="single-service">
					<a href="calendarios.php">
						<div class="thumb">
							<img src="images/o1.jpg"  alt="Calendario de pagamentos" >                  
						</div>
					</a>
				</div>
			</div>
			<div class="col-lg-2 col-md-6">
				<div class="single-service">
					<a href="http://portalcidadao.riobranco.ac.gov.br/contracheque/">
						<div class="thumb">
							<img alt="Contracheque" src="images/o2.jpg">                  
						</div>
					</a>
				</div>
			</div>
			<div class="col-lg-2 col-md-6">
				<div class="single-service">
					<a href="http://simulacao.rbprev.riobranco.ac.gov.br/">
						<div class="thumb">
							<img alt="Simular Aposentadoria" src="images/o3.jpg">                 
						</div>
					</a>
				</div>
			</div>
			<div class="col-lg-2 col-md-6">
				<div class="single-service">
					<a href="http://aplicacoes.rbprev.riobranco.ac.gov.br/DAP/">
						<div class="thumb">
							<img data-src="images/o4.jpg" alt="DAP" src="images/o4.jpg">                 
						</div>
					</a>
				</div>
			</div>
			<div class="col-lg-2 col-md-6">
				<div class="single-service">
					<a href="documentos/crp.pdf">
						<div class="thumb">
							<img alt="CRP" src="images/o5.jpg" >                 
						</div>
					</a>
				</div>
			</div>
			<div class="col-lg-2 col-md-6">
				<div class="single-service">
					<a href="documentos.php">
						<div class="thumb">
							<img alt="Documentos" src="images/o6.jpg">                 
						</div>
					</a>
				</div>
			</div>
			<!-- <a href="#" class="trd-btn text-uppercase" align="center" onclick="document.getElementById('sevs').focus()">Outros Serviços</a> -->
		</div>
	</div>
</section>
<!-- FIM DA AREA DE SERVICOS -->
<section class="home-about-area-comunicacao section-gap relative" style="
    border-radius: 70px;">
	<div class="container" style="padding-bottom: 20px;">
		<div class="row justify-content-center">
			<div class="col-md-12 pb-50 header-text text-center">
				<h1 class="mb-10">Canais de Comunicação</h1>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-3 col-md-3">
				<div class="single-service card">
					<a href="atendimento_ao_segurado.php">
						<div class="thumb">
							<img data-src="images/p0.png" src="" class="lz" alt="Atendimento">                 
						</div>
					</a>
				</div>
			</div>
			<!-- <div class="col-lg-3 col-md-3">
				<div class="single-service">
					<a href="fale-conosco.php">
						<div class="thumb">
							<img src="images/p1.png" alt="Fale conosco">                 
						</div>
					</a>
				</div>
				</div> -->
			<div class="col-lg-3 col-md-3">
				<div class="single-service card">
					<a href="https://sistema.ouvidorias.gov.br/publico/AC/RioBranco/manifestacao/RegistrarManifestacao" target="_blank">
						<div class="thumb">
							<!-- <img src="images/p2.png" alt="Ouvidoria">                  -->
							<img data-src="images/Banner_ouvidoria.png" src="" class="lz" alt="Ouvidoria">                 
						</div>
					</a>
				</div>
			</div>
			<div class="col-lg-3 col-md-3">
				<div class="single-service card">
					<a href="duvidas-frequentes.php">
						<div class="thumb">
							<img data-src="images/p3.png" src="" class="lz" alt="Dúvidas Frequentes">                 
						</div>
					</a>
				</div>
			</div>
			<div class="col-lg-3 col-md-3">
				<div class="single-service card" style=" max-height: 74%;
					justify-content: center;">
					<a href="pesquisa_satisfacao.php">
						<div class="thumb" >
							<img data-src="images/pesq_stf.png" src="" class="lz" alt="Pesquisa de Satisfação" >                 
						</div>
					</a>
				</div>
			</div>
		</div>
	</div>
	</div> 
</section>
<!-- AREA DE  -->
<section class="blog-area section-gap">
	<div class="container">
		<div class="row">
			<div class="col">
				<h1>
					RBPREV em Números
				</h1>
				<br><br>
				<p style="text-align: justify;" >
					O RBPREV em números traz informações sobre o Regime Próprio de Previdência do Município de Rio Branco. A publicação apresenta tabelas e gráficos com informações referentes às atividades desenvolvidas pelo RBPREV na gestão dos Fundos Previdenciário e Financeiro, tanto concernente às concessões dos benefícios previdenciários quanto à gestão financeira e meta atuarial.
				</p>
				<div class="row no-gutters" >
					<div class="single-services col">
						<br>
						<a href="rbprevEmNumeros.php" class="primary-btn header-btn text-uppercase mt-10" style="width: 100%;" align="center">RBPREV em Números</a>
						<!-- <a href="documentos/carteira_investimentos/2020/maio.pdf" class="primary-btn header-btn text-uppercase mt-10" style="width: 100%;" align="center">Carteira de Investimentos</a> -->
						<p>
						</p>
					</div>
				</div>
			</div>
			<div class="col-lg-1"></div>
			<div class="col py-2">
				<?php while($dado = mysqli_fetch_array($folhapagto)) { ?>
				<h2>Resumo da folha - <?php echo utf8_decode(mesString($dado['mes'])); ?> de 2020</h2>
				<br>
				<table class="table-fill table-sm">
					<thead>
						<tr>
							<th class="text-left">Beneficiários</th>
							<th class="text-left">Quantidade</th>
							<th class="text-left">Valor</th>
						</tr>
					</thead>
					<tbody class="table-hover">
						<tr>
							<td class="text-left">Aposentadorias FPREV</td>
							<td class="text-left"><?php echo utf8_encode($dado['qtd_apo_fprev']); ?></td>
							<td class="text-left"><?php echo emReais($dado['val_apo_fprev']); ?></td>
						</tr>
						<tr>
							<td class="text-left">Aposentadorias FFIN</td>
							<td class="text-left"><?php echo utf8_encode($dado['qtd_apo_ffin']); ?></td>
							<td class="text-left"><?php echo emReais($dado['val_apo_ffin']); ?></td>
						</tr>
						<tr>
							<td class="text-left">Pensões FPREV</td>
							<td class="text-left"><?php echo utf8_encode($dado['qtd_pen_fprev']); ?></td>
							<td class="text-left"><?php echo emReais($dado['val_pen_fprev']); ?></td>
						</tr>
						<tr>
							<td class="text-left">Pensões FFIN</td>
							<td class="text-left"><?php echo utf8_encode($dado['qtd_pen_ffin']); ?></td>
							<td class="text-left"><?php echo emReais($dado['val_pen_ffin']); ?></td>
						</tr>
						<tr>
							<td class="text-left text-success">Total FPREV</th>
							<td class="text-left text-success"><?php echo utf8_encode($dado['qtd_total_fprev']); ?></td>
							<td class="text-left text-success"><?php echo emReais($dado['val_total_fprev']); ?></td>
						</tr>
						<tr>
							<td class="text-left text-primary">Total FFIN</th>
							<td class="text-left text-primary"><?php echo utf8_encode($dado['qtd_total_ffin']); ?></td>
							<td class="text-left text-primary"><?php echo emReais($dado['val_total_ffin']); ?></td>
						</tr>
					</tbody>
				</table>
				<?php } ?>
				<a href="numeros_outros_meses.php" class="primary-btn header-btn text-uppercase mt-10" style="width: 100%;" align="center">Meses Anteriores</a>
				<div class="row no-gutters" >
					<div class="single-services col">
						<br>
					</div>
				</div>
			</div>
		</div>
	</div>
	</div>
	</div>
</section>
<!-- FIM DA AREA -->
<!-- Aposentados -->
<section class="testomial-area section-gap" id="testimonail">
	<div class="container">
		<div class="row d-flex justify-content-center">
			<div class="menu-content pb-60 col-lg-7">
				<div class="title text-center">
					<h2 class="mb-10 text-light">Aposentados do mês de setembro</h2>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="active-testimonial-carusel">
				<div class="single-testimonial item">
					<!-- 				<img class="mx-auto" data-src="images/aposentados_mes/2020/marco/ap1.jpg" src="" class="lz" alt=""> -->
					
					<h5>Adriana Bahia Ruella</h5>
					<p>
						Auxiliar de Escritório
					</p>
				</div>
				<div class="single-testimonial item">
					<!-- 				<img class="mx-auto" data-src="images/aposentados_mes/2020/marco/ap2.jpg" src="" class="lz" alt=""> -->
				
					<h5>Mariza Barreto da Silva</h5>
					<p>
						Gari
					</p>
				</div>
				<div class="single-testimonial item">
					<!-- 				<img class="mx-auto" data-src="images/aposentados_mes/2020/marco/ap3.jpg" src="" class="lz" alt=""> -->
					
					<h5>Joaquim Rosa dos Santos</h5>
					<p>
						Auditor Fiscal de Tributos
					</p>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="container" style="padding: 150px 0">
	<div class="col-md-12 theme-avisos">
		<h2 class="title title-divulgacao text-center"><span class="text-dark">OUTROS LINKS</span></h2>
	</div>
	<div class="links-sistemas">
	<div class="links-divulga text-center">
		<a href="http://riobranco.ac.gov.br/" title="Portal da Prefeitura de Rio Branco" target="_blank">
		<img class="on-contrast-force-gray" src="./img/icones-links/pmrb.png" alt="Portal da Prefeitura de Rio Branco" height="100px"></a>
		<a href="http://www.previdencia.gov.br/noticias/" title="Secretaria de Previdência" target="_blank">
		<img class="on-contrast-force-gray" src="./img/icones-links/secretaria-prev.png" alt="Secretaria de Previdência" height="100px"></a>
		<a href="https://www.riobranco.ac.leg.br/" title="Câmara Municipal" target="_blank">
		<img class="on-contrast-force-gray" src="./img/icones-links/camara-mun.png" alt="Câmara Municipal" height="100px"></a>
		<a href="http://diario.ac.gov.br/" title="Diário Oficial" target="_blank">
		<img class="on-contrast-force-gray" src="./img/icones-links/diario.png" alt="Diário Oficial"  height="100px"></a>
		<a href="https://cadprev.previdencia.gov.br/" title="CADPREV">
		<img class="on-contrast-force-gray" src="./img/icones-links/cadprev.png" alt="CADPREV"  height="100px"></a>
		<a href="https://www.inss.gov.br/" title="INSTITUTO NACIONAL DO SEGURO SOCIAL">
		<img class="on-contrast-force-gray" src="./img/icones-links/inss.png" alt="INSTITUTO NACIONAL DO SEGURO SOCIAL" height="100px"></a>
		<a href="http://www.tce.ac.gov.br/" title="TCE-AC" target="_blank">
		<img class="on-contrast-force-gray" src="./img/icones-links/tce.png" alt="TCE-AC" height="100px"></a>
		<a href="sistemas.php" title="Sistemas internos" target="_blank">
		<img class="on-contrast-force-gray" src="./img/icones-links/sistemas.png" alt="Sistemas internos" height="100px"></a>
	</div>
</div>
</section>
<!-- FIM Aposentadorias -->        

<?php include("rodape.php");?>