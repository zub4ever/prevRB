<?php 
include("cabecalho.php");
include('db/consultas.php');
?>
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
<script>
	$(document).ready(function() {
		$('#table-dados').DataTable( {
			"language": {
				"sEmptyTable": "Nenhum registro encontrado",
				"sInfo": "Mostrando de _START_ até _END_ de _TOTAL_ registros",
				"sInfoEmpty": "Mostrando 0 até 0 de 0 registros",
				"sInfoFiltered": "(Filtrados de _MAX_ registros)",
				"sInfoPostFix": "",
				"sInfoThousands": ".",
				"sLengthMenu": "_MENU_ Resultados por página",
				"sLoadingRecords": "Carregando...",
				"sProcessing": "Processando...",
				"sZeroRecords": "Nenhum registro encontrado",
				"sSearch": "Pesquisar",
				"oPaginate": {
					"sNext": "Próximo",
					"sPrevious": "Anterior",
					"sFirst": "Primeiro",
					"sLast": "Último"
				}, 
				"oAria": {
					"sSortAscending": ": Ordenar colunas de forma ascendente",
					"sSortDescending": ": Ordenar colunas de forma descendente"
				}
			}
		} );
	} );

</script>
<div class="d-flex justify-content-center bg-secondary py-5">
	<div class="text-black">
		<div class="ml-auto mt-auto mr-auto mb-auto d-flex ">
			<h2 class="text-left font-weight-bold text-uppercase text-white">Dados de aposentadorias concedidas</h2>
		</div>
	</div>
</div>
<div class="container-fluid mt-4 pb-3 mb-3 ">
	<div class="table-responsive">
		<!-- <iframe
		src="http://rbprev.riobranco.ac.gov.br:3000/public/question/fb37c5d8-fd1d-4b8e-98db-36081047c5f3"
		frameborder="0"
		width="100%"
		height="800"
		allowtransparency
		></iframe> -->
                    <table id="table-dados" class="table table-striped table-bordered" style="width:100%" onload="ativaPage();" >
                        <thead>
                            <tr>
                                <th>Nome</th>
                                <th>Origem</th>
                                <th>Cargo</th>
                                <th>Tipo</th>
                                <th>Mês de Aposentadoria</th>
                                <th>Ano de Aposentadoria</th>
                            </tr>
                        </thead>
                        <tbody> 
                            <?php while($dado = mysqli_fetch_array($apoConcedidas)) { ?>
                                <tr>
                                    <td><?php echo utf8_encode($dado['nome']); ?></td>
                                    <td><?php echo utf8_encode($dado['lotacao']); ?></td>
                                    <td><?php echo utf8_encode($dado['cargo']); ?></td>
                                    <td><?php echo utf8_encode($dado['regra']); ?></td>
                                    <td><?php 
                                        $data = utf8_encode(data($dado['data']));
                                        $data = explode('/', $data);
                                        echo abs($data[1]); ?>        
                                    </td>
                                    <td><?php echo utf8_encode($data[2]); ?></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Nome</th>
                                <th>Origem</th>
                                <th>Cargo</th>
                                <th>Tipo</th>
                                <th>Mês de Aposentadoria</th>
                                <th>Ano de Aposentadoria</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
                <br>
                <div class="container">
                <div class="row mt-5 mb-5 py-2 d-flex justify-content-space-around">

                	<div class="col-sm-12 col-lg-3 mt-3">
                		<a class="btn btn-primary" href="documentos/aposentadoria_2020.pdf" style="width: 100%;">Aposentadorias 2020</a>
                	</div>

                	<div class="col-sm-12 col-lg-3 mt-3">
                		<a class="btn btn-primary" href="documentos/aposentadoria_2019.pdf" style="width: 100%;">Aposentadorias 2019</a>
                	</div>

                	<div class="col-sm-12 col-lg-3 mt-3">
                		<a class="btn btn-primary" href="documentos/aposentadoria_2018.pdf" style="width: 100%;">Aposentadorias 2018</a>
                	</div>

                	<div class="col-sm-12 col-lg-3 mt-3">
                		<a class="btn btn-primary" href="documentos/aposentadoria_janeiro_2017.pdf" style="width: 100%;">Aposentadorias 2017</a>
                	</div>

                	<div class="col-sm-12 col-lg-3 mt-3">
                		<a class="btn btn-primary dropdown-toggle" data-toggle="dropdown" href="#" style="width: 100%;">Aposentadorias 2016<span class="caret"></a>
                			<ul class="dropdown-menu">
                				<li><a class="dropdown-item" href="documentos/aposentadoria_janeiro_2016.pdf" target="_blank">Janeiro</a></li>
                				<li><a class="dropdown-item" href="documentos/aposentadoria_fevereiro_2016.pdf" target="_blank">Fevereiro</a></li>
                				<li><a class="dropdown-item" href="documentos/aposentadoria_marco_2016.pdf" target="_blank">Março</a></li>
                				<li><a class="dropdown-item" href="documentos/aposentadoria_abril_2016.pdf" target="_blank">Abril</a></li>
                				<li><a class="dropdown-item" href="documentos/aposentadoria_maio_2016.pdf" target="_blank">Maio</a></li>
                				<li><a class="dropdown-item" href="documentos/aposentadoria_junho_2016.pdf" target="_blank">Junho</a></li>
                				<li><a class="dropdown-item" href="documentos/aposentadoria_julho_2016.pdf" target="_blank">Julho</a></li>
                				<li><a class="dropdown-item" href="documentos/aposentadoria_agosto_2016.pdf" target="_blank">Agosto</a></li>
                				<li><a class="dropdown-item" href="documentos/aposentadoria_setembro_2016.pdf" target="_blank">Setembro</a></li>
                				<li><a class="dropdown-item" href="documentos/aposentadoria_outubro_2016.pdf" target="_blank">Outubro</a></li>
                				<li><a class="dropdown-item" href="documentos/aposentadoria_novembro_2016.pdf" target="_blank">Novembro</a></li>
                				<li><a class="dropdown-item" href="documentos/aposentadoria_dezembro_2016.pdf" target="_blank">Dezembro</a></li>
                			</ul>
                		</div>
                		<div class="col-sm-12 col-lg-3 mt-3">
                			<a class="btn btn-primary dropdown-toggle" data-toggle="dropdown" href="#" style="width: 100%;">Aposentadorias 2015<span class="caret"></a>
                				<ul class="dropdown-menu">
                					<li><a class="dropdown-item" href="documentos/Aposentadorias_janeiro_2015.pdf" target="_blank">Janeiro</a></li>
                					<li><a class="dropdown-item" href="documentos/Aposentadorias_maio_2015.pdf" target="_blank">Maio</a></li>
                					<li><a class="dropdown-item" href="documentos/Aposentadorias_junho_2015.pdf" target="_blank">Junho</a></li>
                					<li><a class="dropdown-item" href="documentos/Aposentadorias_julho_2015.pdf" target="_blank">Julho</a></li>
                					<li><a class="dropdown-item" href="documentos/beneficios_concedidos_aposentados_2015.pdf" target="_blank">Agosto</a></li>
                					<li><a class="dropdown-item" href="documentos/aposentaria_setembro_2015.pdf" target="_blank">Setembro</a></li>
                					<li><a class="dropdown-item" href="documentos/aposentaria_outubro_2015.pdf" target="_blank">Outubro</a></li>
                					<li><a class="dropdown-item" href="documentos/aposentaria_novembro_2015.pdf" target="_blank">Novembro</a></li>
                					<li><a class="dropdown-item" href="documentos/aposentaria_dezembro_2015.pdf" target="_blank">Dezembro</a></li>
                				</ul>
                			</div>

                			<div class="col-sm-12 col-lg-3 mt-3">
                				<a class="btn btn-primary dropdown-toggle" data-toggle="dropdown" href="#" style="width: 100%;">Aposentadorias|Anos anteriores<span class="caret"></a>
                					<ul class="dropdown-menu">
                						<li><a class="dropdown-item" href="documentos/2014_TOTAL_APOSENTADOS.pdf" target="_blank">2014</a></li>
                						<li><a class="dropdown-item" href="documentos/2013_TOTAL_APOSENTADOS.pdf" target="_blank">2013</a></li>
                						<li><a class="dropdown-item" href="documentos/2012_TOTAL_APOSENTADOS.pdf" target="_blank">2012</a></li>
                						<li><a class="dropdown-item" href="documentos/2011_TOTAL_APOSENTADOS.pdf" target="_blank">2011</a></li>
                						<li><a class="dropdown-item" href="documentos/2010_TOTAL_APOSENTADOS.pdf" target="_blank">2010</a></li>
                					</ul>
                				</div>

                			</div>
                		</div>
                		</div>
                		<div class="d-flex justify-content-around">
                			<a class="btn btn-outline-primary" onClick="history.go(-1)" role="button" style="width: 20%">
                				<i class="fa fa-arrow-circle-left"></i>
                				<span>Voltar</span>
                			</a>
                		</div>
                	</div>
                	<?php 
                	mysqli_free_result($apoConcedidas);
                	include "footer.php";
                	?>
                	<br/>
                	