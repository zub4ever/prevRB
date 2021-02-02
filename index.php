<?php 
	include("cabecalho.php");
	include('db/consultas.php');
	// Include WordPress
	define('WP_USE_THEMES', false);
	require('./noticias/wp-load.php');
	$query = new WP_Query( array(
	'posts_per_page' => 3,
	'no_found_rows'  => true,
	) );
	// 
	// Define quantos posts serão exibidos
	query_posts('showposts=3');
	
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
					<img class="img-fluid" src="images/COMUNICADO.jpeg">
				</div>
	
			</div>
		</div>
	</div>
	
<!--<div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<img class="img-fluid" src="images/recadastramento_online.jpeg">
			</div>
			<div class="container d-flex">
				<a class="trd-btn" href="https://forms.gle/KK5foNjzbv2bdsnz7">Formulário</a>
				<a class="trd-btn" href="https://wa.link/8bg39q">Fale conosco via WhatsApp<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" data-supported-dps="24x24" fill="currentColor" width="24" height="24" focusable="false"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z"></path></svg></a>
			</div>
			<hr>
		</div>
	</div>
	</div>-->
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
				<a href="documentos/novembro_azul.pdf">
					<img src="images/novembro_azul.png" alt="" class="img-fluid" />
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
			<div class="carousel-item active">
				<a href="sobre-o-recadastramento.php">
			<img src="images/RecadastramentoOnline.png" class="img-fluid " alt="Recadastramento Online">
				</a>  
			</div>
			<!-- <div class="carousel-item active">
				<a href="outubro_rosa.php" target="_blank">
				<img src="images/outubro_rosa.png" class="img-fluid " alt="Outubro rosa">
				</a>  
			</div> -->
			<!-- <div class="carousel-item active">
				<a href="https://sistema.ouvidorias.gov.br/publico/AC/RioBranco/manifestacao/RegistrarManifestacao" target="_blank">
				<img src="images/Banner_ouvidoria-rbr.png"  class="img-fluid " alt="Prefeitura de Rio Branco">
				</a>  
			</div> -->
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
							<img src="images/p0.png" alt="Atendimento">                 
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
							<img src="images/Banner_ouvidoria.png" alt="Ouvidoria">                 
						</div>
					</a>
				</div>
			</div>
			<div class="col-lg-3 col-md-3">
				<div class="single-service card">
					<a href="duvidas-frequentes.php">
						<div class="thumb">
							<img src="images/p3.png" alt="Dúvidas Frequentes">                 
						</div>
					</a>
				</div>
			</div>
			<div class="col-lg-3 col-md-3">
				<div class="single-service card" style=" max-height: 74%;
					justify-content: center;">
					<a href="pesquisa_satisfacao.php">
						<div class="thumb" >
							<img src="images/pesq_stf.png" alt="Pesquisa de Satisfação" >                 
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
					<h2 class="mb-10 text-light">Aposentados do mês de Janeiro</h2>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="active-testimonial-carusel">
				<div class="single-testimonial item">
					 				<img class="mx-auto" src="images/aposentados_mes/2021/Janeiro/01.png" src="" class="lz" alt="">
					
					<h5>Rahete Casseb Braga Borges</h5>
					<p>
						Professora - P2
					</p>
				</div>
				<div class="single-testimonial item">
					 				<img class="mx-auto" src="images/aposentados_mes/2021/Janeiro/02.png" src="" class="lz" alt="">
					
					<h5>Sebastiana da Silva</h5>
					<p>
						Gari
					</p>
				</div>
				<div class="single-testimonial item">
					 				<img class="mx-auto" src="images/aposentados_mes/2021/Janeiro/03.png" src="" class="lz" alt="">
					
					<h5>Jecifran Ossan Gonçalves Vasconcelos</h5>
					<p>
						Inspetora de Alunos
					</p>
				</div>
				<div class="single-testimonial item">
					 				<img class="mx-auto" src="images/aposentados_mes/2021/Janeiro/04.png" src="" class="lz" alt="">
					
					<h5>Nazaré Fernandes da Silva</h5>
					<p>
						Professora - P2
					</p>
				</div>
				<div class="single-testimonial item">
					 				<img class="mx-auto" src="images/aposentados_mes/2021/Janeiro/05.png" src="" class="lz" alt="">
					
					<h5>Deiglandes Maria Ferreira Castelo</h5>
					<p>
						Professora - P2
					</p>
				</div>
				<div class="single-testimonial item">
					 				<img class="mx-auto" src="images/aposentados_mes/2021/Janeiro/06.png" src="" class="lz" alt="">
					
					<h5>Lucila Lima Santiago da Costa</h5>
					<p>
						Professora - P2
					</p>
				</div>
				<div class="single-testimonial item">
					 				<img class="mx-auto" src="images/aposentados_mes/2021/Janeiro/07.png" src="" class="lz" alt="">
					
					<h5>Maria Alzenir Magalhães de Lira</h5>
					<p>
						Professora - P2
					</p>
				</div>
			</div>
		</div>
	</div>
</section>
<section>
	<div class="container">
		<div class="title text-center">
					<h2 class="mb-10 text-dark">Últimas Notícias</h2>
				</div>
				<br>
		<div class="row">
			<p align="justify" style="text-indent:10mm;">
				<div class="container">
					<div class="row">
						<?php while ($query->have_posts()): $query->the_post(); ?>
							<div class="col-lg-4 col-md-12 single-blog">
								<div class="thumb card">
									<?php the_post_thumbnail(); ?>       
								</div>
								<p class="meta"><?php the_time("d/m/Y"); ?></p>
								<a href="<?php the_permalink(); ?>">
									<h5 align="justify text-uppercase"><?php the_title(); ?></h5>
								</a>
							</div>
						<?php endwhile;?>
						<script type="text/javascript">$( "img" ).addClass( "img-fluid" );</script>
						<hr><br>
					</div>
				</div>
			</p>
			<hr>
		</div>
		<div class="col-md-12 theme-avisos text-center">
			<a href="http://rbprev.riobranco.ac.gov.br/noticias/" class="primary-btn header-btn text-uppercase mt-10  text-center" align="center">Notícias Anteriores</a>
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
