<?php include("cabecalho.php"); define('WP_USE_THEMES', false);
require('./noticias/wp-load.php');

//Define quantos posts serão exibidos
$tags = "#DeBemComAVidaSempre";
$query = new WP_Query( array(
	'posts_per_page' => -1,
	'no_found_rows'  => true,
	'tag'            => '#DeBemComAVidaSempre'
) );
query_posts('showposts=600');?>
<section>
	<div class="container" style="margin-top: 5%; margin-bottom: 20%; background-color: #43a9e012; padding: 50px;">
		<h2>ATIVIDADES DESENVOLVIDAS</h2><br>
		<div class="row">


			<p align="justify" style="text-indent:10mm;">
				<img src="images/logo_d_bem_com_a_vida.png" style="width:220px; float: right;">
				As atividades do Programa ocorrem na sede do Instituto, em parceria com órgãos da prefeitura de Rio Branco, por meio da Secretaria Municipal de Saúde e Conselho do Idoso, bem como outros órgãos parceiros, tais como SESC, por meio do grupo de idosos, dentre outros parceiros.
				<br>

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
				<a class="nav-link btn-outline-primary btn" onClick="history.go(-1)" role="button" Style="cursor:pointer;"><i class="fa fa-arrow-circle-left"></i><span>Voltar</span></a>
			</p>


			<hr>
			<br>


		</div>
	</div>
</section>
<?php include("rodape.php"); ?>