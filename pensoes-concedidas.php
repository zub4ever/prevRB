<?php 
include("cabecalho.php");
include('db/consultas.php');
ini_set('display_errors', '1');

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
<div class="container">
    <ul class="breadcrumb">
        <li><p>Você está aqui ></p></li>
        <li><b>Informativos ></b> <span class="divider"></li>
            <li><b>Pensões Concedidas</b> <span class="divider"></li>
            </ul>
            <div class="table-responsive">
                <h3 align="center">Pensões Concedidas</h3>

                <table id="table-dados" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>Instituidor</th>
                            <th>Dependente</th>
                            <th>Parentesco</th>
                            <th>Inicio</th>
                            <th>Portaria</th>
                        </tr>
                    </thead>
                    <tbody> 
                        <?php while($dado = mysqli_fetch_array($penConcedidas)) { ?>
                            <tr>
                                <td><?php echo utf8_encode($dado['instituidor']); ?></td>
                                <td><?php echo utf8_encode($dado['dependente']); ?></td>
                                <td><?php echo utf8_encode($dado['parentesco']); ?></td>
                                <td><?php echo utf8_encode(data($dado['inicio'])); ?></td>
                                <td><?php echo 'Nº '. utf8_encode($dado['portaria']).' - D.O.E nº '.utf8_encode($dado['diario']); ?></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Instituidor</th>
                            <th>Dependente</th>
                            <th>Parentesco</th>
                            <th>Inicio</th>
                            <th>Portaria</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
            <br>
            <div class="container" align="center" style="margin-bottom: 150px;">
                <div class="btn-group">
                    <a class="btn btn-primary" href="documentos/pensoes_2020.pdf">Pensões 2020</a>
                </div>

                <div class="btn-group">
                    <a class="btn btn-primary" href="documentos/pensoes_2019.pdf">Pensões 2019</a>
                </div>

                <div class="btn-group">
                    <a class="btn btn-primary" href="documentos/pensoes_janeiro_2018.pdf">Pensões 2018</a>
                </div>


                <div class="btn-group">
                    <a class="btn btn-primary" href="documentos/pensoes_janeiro_2017.pdf">Pensões 2017</a>
                </div>
                <div class="btn-group">
                    <a class="btn btn-primary" href="#">Pensões 2016</a>
                    <a class="btn btn-primary dropdown-toggle" data-toggle="dropdown" href="#"><span class="caret"></a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="documentos/pensoes_janeiro_2016.pdf" target="_blank">Janeiro</a></li>
                            <li><a class="dropdown-item" href="documentos/pensoes_fevereiro_2016.pdf" target="_blank">Fevereiro</a></li>
                            <li><a class="dropdown-item" href="documentos/pensoes_maio_2016.pdf" target="_blank">Maio</a></li>

                            <li><a class="dropdown-item" href="documentos/pensoes_agosto_2016.pdf" target="_blank">Agosto</a></li>
                            <li><a class="dropdown-item" href="documentos/pensoes_novembro_2016.pdf" target="_blank">Novembro</a></li>
                        </ul>
                    </div>

                    <div class="btn-group">
                        <a class="btn btn-primary" href="#">Pensões 2015</a>
                        <a class="btn btn-primary dropdown-toggle" data-toggle="dropdown" href="#"><span class="caret"></a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="documentos/2015_pensoes_marco.pdf" target="_blank">Março</a></li>
                                <li><a class="dropdown-item" href="documentos/2015_pensoes_abril.pdf" target="_blank">Abril</a></li>
                                <li><a class="dropdown-item" href="documentos/2015_pensoes_junho.pdf" target="_blank">Junho</a></li>
                                <li><a class="dropdown-item" href="documentos/2015_pensoes_julho.pdf" target="_blank">Julho</a></li>
                                <li><a class="dropdown-item" href="documentos/2015_pensoes_setembro.pdf" target="_blank">Setembro</a></li>
                                <li><a class="dropdown-item" href="documentos/2015_pensoes_novembro.pdf" target="_blank">Novembro</a></li>
                                <li><a class="dropdown-item" href="documentos/2015_pensoes_dezembro.pdf" target="_blank">Dezembro</a></li>
                            </ul>
                        </div>

                        <div class="btn-group">
                            <a class="btn btn-primary" href="#">Pensões - Anos anteriores</a>
                            <a class="btn btn-primary dropdown-toggle" data-toggle="dropdown" href="#"><span class="caret"></a>
                                <ul class="dropdown-menu">
                                 <li><a class="dropdown-item" href="documentos/2014_BENEFICIARIOS_PENSOES.pdf" target="_blank">2014</a></li>
                                 <li><a class="dropdown-item" href="documentos/2013_BENEFICIARIOS_PENSOES.pdf" target="_blank">2013</a></li>
                                 <li><a class="dropdown-item" href="documentos/2012_BENEFICIARIOS_PENSOES.pdf" target="_blank">2012</a></li>
                                 <li><a class="dropdown-item" href="documentos/2011_BENEFICIARIOS_PENSOES.pdf" target="_blank">2011</a></li>
                                 <li><a class="dropdown-item" href="documentos/2010_BENEFICIARIOS_PENSOES.pdf" target="_blank">2010</a></li>
                             </ul>
                         </div>
                         <hr>
                     </div>    
                 </div>
                 <?php 
                 mysqli_free_result($penConcedidas);
                 include "footer.php";
                 ?><br/>
                 <style type="text/css">.btn-group {padding: 5px;}</style>
