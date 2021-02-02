<?php include("cabecalho.php"); include('db/consultas.php');?>
<div class="container py-5">
	<div id="chartDiv" style="max-width: 100%;height: 210px;margin: 0px auto;"></div>
</div>
<div class="container">
	<hr>
	<table border="1" class="table">
		<tr  Style="color:white;background:#165E8B;">
			<th colspan="5" id="p" style="text-align:center;padding-top:5px;">Resumo da Folha do Fundo Previdenciário 2020</th>
		</tr>
		<tr  Style="color:white;background:#165E8B;">
			<th rowspan="2" id="h" style="text-align:center;padding-top:25px;">2020</th>
			<th colspan="2" id="e" style="text-align:center;">Aposentadorias</th>
			<th colspan="2" id="p" style="text-align:center;">Pensões</th>
		</tr>
		<tr Style="color:white;background:#165E8B;">
			<th id="e1" headers="e" style="text-align:center;">Qtd</th>
			<th id="e2" headers="e" style="text-align:center;">Valor</th>
			<th id="p2" headers="p" style="text-align:center;">Qtd</th>
			<th id="p2" headers="p" style="text-align:center;">Valor</th>
		</tr>
		<tbody id="dados">
	
		</tbody>
	</table>
	<div class="row">
		<div class="col-md-6">
			<table class="table">
				<tr>
					<td><b>Custo Total - Aposentados:</b></td>
					<td><span id="custo-apos" class="aposentadorias_total ca20"><div class="spinner-grow" style="width: 3rem; height: 3rem;" role="status">
						<span class="sr-only">Loading...</span>
					</div></span></td>
				</tr>
				<tr>
					<td><b>Custo Total - Pensionistas:</b></td>
					<td><span id="custo-pens" class="pensoes_total cp20"><div class="spinner-grow" style="width: 3rem; height: 3rem;" role="status">
						<span class="sr-only">Loading...</span>
					</div></span></td>
				</tr>
			</table>
		</div>
	</div>
	<table border="1" class="table">
		<tr  Style="color:white;background:#165E8B;">
			<th colspan="5" id="p" style="text-align:center;padding-top:5px;">Resumo da Folha do Fundo Previdenciário 2019</th>
		</tr>
		<tr  Style="color:white;background:#165E8B;">
			<th rowspan="2" id="h" style="text-align:center;padding-top:25px;">2019</th>
			<th colspan="2" id="e" style="text-align:center;">Aposentadorias</th>
			<th colspan="2" id="p" style="text-align:center;">Pensões</th>
		</tr>
		<tr Style="color:white;background:#165E8B;">
			<th id="e1" headers="e" style="text-align:center;">Qtd</th>
			<th id="e2" headers="e" style="text-align:center;">Valor</th>
			<th id="p2" headers="p" style="text-align:center;">Qtd</th>
			<th id="p2" headers="p" style="text-align:center;">Valor</th>
		</tr>
		<tr>
			<td class="mes" headers="h"><b>Janeiro</b></td>
			<td headers="e e2" style="text-align:center;">632</td>
			<td class="aposentadorias" headers="e ef" style="text-align:right;">R$ 2.350.535,49</td>
			<td headers="p p1" style="text-align:center;">115</td>
			<td class="pensoes" headers="p p2" style="text-align:right;">R$ 196.452,36</td>
		</tr>
		<tr>
			<td class="mes" headers="h"><b>Fevereiro</b></td>
			<td headers="e e2" style="text-align:center;">647</td>
			<td class="aposentadorias" headers="e ef" style="text-align:right;">R$ 2.499.425,50</td>
			<td headers="p p1" style="text-align:center;">115</td>
			<td class="pensoes" headers="p p2" style="text-align:right;">R$ 196.382,76</td>
		</tr>
		<tr>
			<td class="mes" headers="h"><b>Março</b></td>
			<td headers="e e2" style="text-align:center;">658</td>
			<td class="aposentadorias" headers="e ef" style="text-align:right;">R$ 2.446.181,63</td>
			<td headers="p p1" style="text-align:center;">118</td>
			<td class="pensoes" headers="p p2" style="text-align:right;">R$ 203.321,38</td>
		</tr>
		<tr>
			<td class="mes" headers="h"><b>Abril</b></td>
			<td headers="e e2" style="text-align:center;">662</td>
			<td class="aposentadorias" headers="e ef" style="text-align:right;">R$ 2.460.200,80</td>
			<td headers="p p1" style="text-align:center;">121</td>
			<td class="pensoes" headers="p p2" style="text-align:right;">R$ 209.781,57</td>
		</tr>
		<tr>
			<td class="mes" headers="h"><b>Maio</b></td>
			<td headers="e e2" style="text-align:center;">667</td>
			<td class="aposentadorias" headers="e ef" style="text-align:right;">R$ 2.479.174,99</td>
			<td headers="p p1" style="text-align:center;">121</td>
			<td class="pensoes" headers="p p2" style="text-align:right;">R$ 214.954,63</td>
		</tr>
		<tr>
			<td class="mes" headers="h"><b>Junho</b></td>
			<td headers="e e2" style="text-align:center;">672</td>
			<td class="aposentadorias" headers="e ef" style="text-align:right;">R$ 2.533.569,93</td>
			<td headers="p p1" style="text-align:center;">121</td>
			<td class="pensoes" headers="p p2" style="text-align:right;">R$ 211.778,65</td>
		</tr>
		<tr>
			<td class="mes" headers="h"><b>Julho</b></td>
			<td headers="e e2" style="text-align:center;">678</td>
			<td class="aposentadorias" headers="e ef" style="text-align:right;">R$ 2.539.169,94</td>
			<td headers="p p1" style="text-align:center;">124</td>
			<td class="pensoes" headers="p p2" style="text-align:right;">R$ 263.292,61</td>
		</tr>
		<tr>
			<td class="mes" headers="h"><b>Agosto</b></td>
			<td headers="e e2" style="text-align:center;">684</td>
			<td class="aposentadorias" headers="e ef" style="text-align:right;">R$ 2.557.642,41</td>
			<td headers="p p1" style="text-align:center;">126</td>
			<td class="pensoes" headers="p p2" style="text-align:right;">R$ 248.805,79</td>
		</tr>
		<tr>
			<td class="mes" headers="h"><b>Setembro</b></td>
			<td headers="e e2" style="text-align:center;">692</td>
			<td class="aposentadorias" headers="e ef" style="text-align:right;">R$ 2.570.727,26</td>
			<td headers="p p1" style="text-align:center;">126</td>
			<td class="pensoes" headers="p p2" style="text-align:right;">R$ 245.004,39</td>
		</tr>
		<tr>
			<td class="mes" headers="h"><b>Outubro</b></td>
			<td headers="e e2" style="text-align:center;">697</td>
			<td class="aposentadorias" headers="e ef" style="text-align:right;">R$ 2.588.578,82</td>
			<td headers="p p1" style="text-align:center;">126</td>
			<td class="pensoes" headers="p p2" style="text-align:right;">R$ 240.617,93</td>
		</tr>
		<tr>
			<td class="mes" headers="h"><b>Novembro</b></td>
			<td headers="e e2" style="text-align:center;">722</td>
			<td class="aposentadorias" headers="e ef" style="text-align:right;">R$ 2.226.370,77</td>
			<td headers="p p1" style="text-align:center;">139</td>
			<td class="pensoes" headers="p p2" style="text-align:right;">R$ 254.436,62</td>
		</tr>
		<tr>
			<td class="mes" headers="h"><b>Dezembro</b></td>
			<td headers="e e2" style="text-align:center;">724</td>
			<td class="aposentadorias" headers="e ef" style="text-align:right;">R$ 2.238.872,75</td>
			<td headers="p p1" style="text-align:center;">139</td>
			<td class="pensoes" headers="p p2" style="text-align:right;">R$ 253.487,08</td>
		</tr>
		<tr>
			<td class="mes" headers="h"><b>Décimo</b></td>
			<td headers="e e2" style="text-align:center;">724</td>
			<td class="aposentadorias" headers="e ef" style="text-align:right;">R$ 2.382.091,51</td>
			<td headers="p p1" style="text-align:center;">139</td>
			<td class="pensoes" headers="p p2" style="text-align:right;">R$ 251.759,20</td>
		</tr>
	</table>
	<div class="row">
		<div class="col-md-6">
			<table class="table">
				<tr>
					<td><b>Custo Total - Aposentados:</b></td>
					<td><b id="custo-apos" class="aposentadorias_total">R$ 31.872.541,80</b></td>
				</tr>
				<tr>
					<td><b>Custo Total - Pensionistas:</b></td>
					<td><b id="custo-pens" class="pensoes_total">R$ 2.990.074,97</b></td>
				</tr>
			</table>
		</div>
	</div>

	<hr>
	<table border="1" class="table">
		<tr  Style="color:white;background:#165E8B;">
			<th colspan="5" id="p" style="text-align:center;padding-top:5px;">Resumo da Folha do Fundo Previdenciário 2018</th>
		</tr>
		<tr  Style="color:white;background:#165E8B;">
			<th rowspan="2" id="h" style="text-align:center;padding-top:25px;">2018</th>
			<!--<th rowspan="2" id="h" style="text-align:center;padding-top:25px;">Saldo Anterior</th>-->
			<th colspan="2" id="e" style="text-align:center;">Aposentadorias</th>
			<th colspan="2" id="p" style="text-align:center;">Pensões</th>
			<!--<th rowspan="2" id="h" style="text-align:center;padding-top:25px;">Saldo Disponível</th>-->
		</tr>
		<tr Style="color:white;background:#165E8B;">
			<th id="e1" headers="e" style="text-align:center;">Qtd</th>
			<th id="e2" headers="e" style="text-align:center;">Valor</th>
			<th id="p2" headers="p" style="text-align:center;">Qtd</th>
			<th id="p2" headers="p" style="text-align:center;">Valor</th>
		</tr>
		<tr>
			<td class="mes" headers="h"><b>Janeiro</b></td>
			<!--<td headers="e e1" style="text-align:right;">170.928.570,58</td>-->
			<td headers="e e2" style="text-align:center;">536</td>
			<td headers="e ef" style="text-align:right;">R$ 1.691.821,61</td>
			<td headers="p p1" style="text-align:center;">90</td>
			<td headers="p p2" style="text-align:right;">R$ 168.247,51</td>
			<!--<td headers="p pf" style="text-align:right;">175.767.713,09</td>-->
		</tr>
		<tr>
			<td class="mes" headers="h"><b>Fevereiro</b></td>
			<!--<td headers="e e1" style="text-align:right;">170.928.570,58</td>-->
			<td headers="e e2" style="text-align:center;">536</td>
			<td headers="e ef" style="text-align:right;">R$ 1.724.369,42</td>
			<td headers="p p1" style="text-align:center;">96</td>
			<td headers="p p2" style="text-align:right;">R$ 170.246,47</td>
			<!--<td headers="p pf" style="text-align:right;">175.767.713,09</td>-->
		</tr>
		<tr>
			<td class="mes" headers="h"><b>Março</b></td>
			<!--<td headers="e e1" style="text-align:right;">170.928.570,58</td>-->
			<td headers="e e2" style="text-align:center;">553</td>
			<td headers="e ef" style="text-align:right;">R$ 1.888.880,29</td>
			<td headers="p p1" style="text-align:center;">102</td>
			<td headers="p p2" style="text-align:right;">R$ 219.097,59</td>
			<!--<td headers="p pf" style="text-align:right;">175.767.713,09</td>-->
		</tr>
		<tr>
			<td class="mes" headers="h"><b>Abril</b></td>
			<!--<td headers="e e1" style="text-align:right;">170.928.570,58</td>-->
			<td headers="e e2" style="text-align:center;">555</td>
			<td headers="e ef" style="text-align:right;">R$ 2.006.111,12</td>
			<td headers="p p1" style="text-align:center;">102</td>
			<td headers="p p2" style="text-align:right;">R$ 175.418,43</td>
			<!--<td headers="p pf" style="text-align:right;">175.767.713,09</td>-->
		</tr>
		<tr>
			<td class="mes" headers="h"><b>Maio</b></td>
			<!--<td headers="e e1" style="text-align:right;">170.928.570,58</td>-->
			<td headers="e e2" style="text-align:center;">564</td>
			<td headers="e ef" style="text-align:right;">R$ 2.026.423,64</td>
			<td headers="p p1" style="text-align:center;">102</td>
			<td headers="p p2" style="text-align:right;">R$ 177.529,80</td>
			<!--<td headers="p pf" style="text-align:right;">175.767.713,09</td>-->
		</tr>
		<tr>
			<td class="mes" headers="h"><b>Junho</b></td>
			<!--<td headers="e e1" style="text-align:right;">170.928.570,58</td>-->
			<td headers="e e2" style="text-align:center;">575</td>
			<td headers="e ef" style="text-align:right;">R$ 2.081.594,41</td>
			<td headers="p p1" style="text-align:center;">105</td>
			<td headers="p p2" style="text-align:right;">R$ 203.203,09</td>
			<!--<td headers="p pf" style="text-align:right;">175.767.713,09</td>-->
		</tr>
		<tr>
			<td class="mes" headers="h"><b>Julho</b></td>
			<!--<td headers="e e1" style="text-align:right;">170.928.570,58</td>-->
			<td headers="e e2" style="text-align:center;">585</td>
			<td headers="e ef" style="text-align:right;">R$ 2.095.218,49</td>
			<td headers="p p1" style="text-align:center;">113</td>
			<td headers="p p2" style="text-align:right;">R$ 189.393,72 </td>
			<!--<td headers="p pf" style="text-align:right;">175.767.713,09</td>-->
		</tr>
		<tr>
			<td class="mes" headers="h"><b>agosto</b></td>
			<!--<td headers="e e1" style="text-align:right;">170.928.570,58</td>-->
			<td headers="e e2" style="text-align:center;">598</td>
			<td headers="e ef" style="text-align:right;">R$ 2.134.953,08</td>
			<td headers="p p1" style="text-align:center;">114</td>
			<td headers="p p2" style="text-align:right;">R$ 190.958,68</td>
			<!--<td headers="p pf" style="text-align:right;">175.767.713,09</td>-->
		</tr>
		<tr>
			<td class="mes" headers="h"><b>setembro</b></td>
			<!--<td headers="e e1" style="text-align:right;">170.928.570,58</td>-->
			<td headers="e e2" style="text-align:center;">605</td>
			<td headers="e ef" style="text-align:right;">R$ 2.163.612,52</td>
			<td headers="p p1" style="text-align:center;">114</td>
			<td headers="p p2" style="text-align:right;">R$ 186.743,21</td>
			<!--<td headers="p pf" style="text-align:right;">175.767.713,09</td>-->
		</tr>
		<tr>
			<td class="mes" headers="h"><b>Outubro</b></td>
			<!--<td headers="e e1" style="text-align:right;">170.928.570,58</td>-->
			<td headers="e e2" style="text-align:center;">613</td>
			<td headers="e ef" style="text-align:right;">R$ 2.223.392,56</td>
			<td headers="p p1" style="text-align:center;">116</td>
			<td headers="p p2" style="text-align:right;">R$ 197.348,63</td>
			<!--<td headers="p pf" style="text-align:right;">175.767.713,09</td>-->
		</tr>
		<tr>
			<td class="mes" headers="h"><b>Novembro</b></td>
			<!--<td headers="e e1" style="text-align:right;">170.928.570,58</td>-->
			<td headers="e e2" style="text-align:center;">618</td>
			<td headers="e ef" style="text-align:right;">R$ 2.246.508,97</td>
			<td headers="p p1" style="text-align:center;">117</td>
			<td headers="p p2" style="text-align:right;">R$ 192.183,35</td>
			<!--<td headers="p pf" style="text-align:right;">175.767.713,09</td>-->
		</tr>
		<tr>
			<td class="mes" headers="h"><b>Dezembro</b></td>
			<!--<td headers="e e1" style="text-align:right;">170.928.570,58</td>-->
			<td headers="e e2" style="text-align:center;">618</td>
			<td headers="e ef" style="text-align:right;">R$ 2.290.266,61</td>
			<td headers="p p1" style="text-align:center;">116</td>
			<td headers="p p2" style="text-align:right;">R$ 190.318,04</td>
			<!--<td headers="p pf" style="text-align:right;">175.767.713,09</td>-->
		</tr>
		<tr>
			<td class="mes" headers="h"><b>Décimo</b></td>
			<!--<td headers="e e1" style="text-align:right;">170.928.570,58</td>-->
			<td headers="e e2" style="text-align:center;">618</td>
			<td headers="e ef" style="text-align:right;">R$ 2.073.387,86</td>
			<td headers="p p1" style="text-align:center;">116</td>
			<td headers="p p2" style="text-align:right;">R$ 188.825,70</td>
			<!--<td headers="p pf" style="text-align:right;">175.767.713,09</td>-->
		</tr>
	</table>
	<div class="row">
		<div class="col-md-6">
			<table class="table">
				<tr>
					<td><b>Custo Anual Total - Aposentados:</b></td>
					<td><b class="aposentadorias_total">R$ 24.954.718,97</b></td>
				</tr>
				<tr>
					<td><b>Custo Anual Total - Pensionistas:</b></td>
					<td><b class="pensoes_total">R$ 2.101.737,95 </b></td>
				</tr>
			</table>
		</div>
	</div>
	<hr>
	<table border="1" class="table">
		<tr  Style="color:white;background:#165E8B;">
			<th colspan="5" id="p" style="text-align:center;padding-top:5px;">Resumo da Folha do Fundo Previdenciário - 2017</th>
		</tr>
		<tr  Style="color:white;background:#165E8B;">
			<th rowspan="2" id="h" style="text-align:center;padding-top:25px;">2017</th>
			<!--<th rowspan="2" id="h" style="text-align:center;padding-top:25px;">Saldo Anterior</th>-->
			<th colspan="2" id="e" style="text-align:center;">Aposentadorias</th>
			<th colspan="2" id="p" style="text-align:center;">Pensões</th>
			<!--<th rowspan="2" id="h" style="text-align:center;padding-top:25px;">Saldo Disponível</th>-->
		</tr>
		<tr Style="color:white;background:#165E8B;">
			<th id="e1" headers="e" style="text-align:center;">Qtd</th>
			<th id="e2" headers="e" style="text-align:center;">Valor</th>
			<th id="p2" headers="p" style="text-align:center;">Qtd</th>
			<th id="p2" headers="p" style="text-align:center;">Valor</th>
		</tr>
		<tr>
			<td class="mes" headers="h"><b>Janeiro</b></td>
			<!--<td headers="e e1" style="text-align:right;">170.928.570,58</td>-->
			<td headers="e e2" style="text-align:center;">440</td>
			<td headers="e ef" style="text-align:right;">R$ 1.379.173,22</td>
			<td headers="p p1" style="text-align:center;">80</td>
			<td headers="p p2" style="text-align:right;">R$ 151.232,01</td>
			<!--<td headers="p pf" style="text-align:right;">175.767.713,09</td>-->
		</tr>
		<tr>
			<td class="mes" headers="h"><b>Fevereiro</b></td>
			<!--<td headers="e e1" style="text-align:right;">170.928.570,58</td>-->
			<td headers="e e2" style="text-align:center;">444</td>
			<td headers="e ef" style="text-align:right;">R$ 1.386.543,67</td>
			<td headers="p p1" style="text-align:center;">79</td>
			<td headers="p p2" style="text-align:right;">R$ 150.231,32</td>
			<!--<td headers="p pf" style="text-align:right;">175.767.713,09</td>-->
		</tr>
		<tr>
			<td class="mes" headers="h"><b>Março</b></td>
			<!--<td headers="e e1" style="text-align:right;">170.928.570,58</td>-->
			<td headers="e e2" style="text-align:center;">455</td>
			<td headers="e ef" style="text-align:right;">R$ 1.422.974,77</td>
			<td headers="p p1" style="text-align:center;">79</td>
			<td headers="p p2" style="text-align:right;">R$ 149.105,08</td>
			<!--<td headers="p pf" style="text-align:right;">175.767.713,09</td>-->
		</tr>
		<tr>
			<td class="mes" headers="h"><b>Abril</b></td>
			<!--<td headers="e e1" style="text-align:right;">170.928.570,58</td>-->
			<td headers="e e2" style="text-align:center;">459</td>
			<td headers="e ef" style="text-align:right;">R$ 1.430.615,10</td>
			<td headers="p p1" style="text-align:center;">78</td>
			<td headers="p p2" style="text-align:right;">R$ 145.191,98</td>
			<!--<td headers="p pf" style="text-align:right;">175.767.713,09</td>-->
		</tr>
		<tr>
			<td class="mes" headers="h"><b>Maio</b></td>
			<!--<td headers="e e1" style="text-align:right;">170.928.570,58</td>-->
			<td headers="e e2" style="text-align:center;">468</td>
			<td headers="e ef" style="text-align:right;">R$ 1.479.256,24</td>
			<td headers="p p1" style="text-align:center;">79</td>
			<td headers="p p2" style="text-align:right;">R$ 148.757,28</td>
			<!--<td headers="p pf" style="text-align:right;">175.767.713,09</td>-->
		</tr>
		<tr>
			<td class="mes" headers="h"><b>Junho</b></td>
			<!--<td headers="e e1" style="text-align:right;">170.928.570,58</td>-->
			<td headers="e e2" style="text-align:center;">472</td>
			<td headers="e ef" style="text-align:right;">R$ 1.492.874,57</td>
			<td headers="p p1" style="text-align:center;">81</td>
			<td headers="p p2" style="text-align:right;">R$ 152.956,75</td>
			<!--<td headers="p pf" style="text-align:right;">175.767.713,09</td>-->
		</tr>
		<tr>
			<td class="mes" headers="h"><b>Julho</b></td>
			<!--<td headers="e e1" style="text-align:right;">170.928.570,58</td>-->
			<td headers="e e2" style="text-align:center;">492</td>
			<td headers="e ef" style="text-align:right;">R$ 1.561.609,31</td>
			<td headers="p p1" style="text-align:center;">81</td>
			<td headers="p p2" style="text-align:right;">R$ 151.204,47</td>
			<!--<td headers="p pf" style="text-align:right;">175.767.713,09</td>-->
		</tr>
		<tr>
			<td class="mes" headers="h"><b>Agosto</b></td>
			<!--<td headers="e e1" style="text-align:right;">170.928.570,58</td>-->
			<td headers="e e2" style="text-align:center;">509</td>
			<td headers="e ef" style="text-align:right;">R$ 1.621.534,47</td>
			<td headers="p p1" style="text-align:center;">80</td>
			<td headers="p p2" style="text-align:right;">R$ 151.867,23</td>
			<!--<td headers="p pf" style="text-align:right;">175.767.713,09</td>-->
		</tr>
		<tr>
			<td class="mes" headers="h"><b>Setembro</b></td>
			<!--<td headers="e e1" style="text-align:right;">170.928.570,58</td>-->
			<td headers="e e2" style="text-align:center;">521</td>
			<td headers="e ef" style="text-align:right;">R$ 1.674.750,48</td>
			<td headers="p p1" style="text-align:center;">83</td>
			<td headers="p p2" style="text-align:right;">R$ 152.020,28</td>
			<!--<td headers="p pf" style="text-align:right;">175.767.713,09</td>-->
		</tr>
		<tr>
			<td class="mes" headers="h"><b>Outubro</b></td>
			<!--<td headers="e e1" style="text-align:right;">170.928.570,58</td>-->
			<td headers="e e2" style="text-align:center;">528</td>
			<td headers="e ef" style="text-align:right;">R$ 1.701.708,66</td>
			<td headers="p p1" style="text-align:center;">82</td>
			<td headers="p p2" style="text-align:right;">R$ 149.772,05</td>
			<!--<td headers="p pf" style="text-align:right;">175.767.713,09</td>-->
		</tr>
		<tr>
			<td class="mes" headers="h"><b>Novembro</b></td>
			<!--<td headers="e e1" style="text-align:right;">170.928.570,58</td>-->
			<td headers="e e2" style="text-align:center;">540</td>
			<td headers="e ef" style="text-align:right;">R$ 1.754.906,37</td>
			<td headers="p p1" style="text-align:center;">82</td>
			<td headers="p p2" style="text-align:right;">R$ 149.771,98</td>
			<!--<td headers="p pf" style="text-align:right;">175.767.713,09</td>-->
		</tr>
		<tr>
			<td class="mes" headers="h"><b>Dezembro</b></td>
			<!--<td headers="e e1" style="text-align:right;">170.928.570,58</td>-->
			<td headers="e e2" style="text-align:center;">539</td>
			<td headers="e ef" style="text-align:right;">R$ 1.750.086,71</td>
			<td headers="p p1" style="text-align:center;">82</td>
			<td headers="p p2" style="text-align:right;">R$ 149.772,04</td>
			<!--<td headers="p pf" style="text-align:right;">175.767.713,09</td>-->
		</tr>
		<tr>
			<td class="mes" headers="h"><b>Décimo</b></td>
			<!--<td headers="e e1" style="text-align:right;">170.928.570,58</td>-->
			<td headers="e e2" style="text-align:center;">539</td>
			<td headers="e ef" style="text-align:right;">R$ 1.565.798,16</td>
			<td headers="p p1" style="text-align:center;">82</td>
			<td headers="p p2" style="text-align:right;">R$ 140.678,02</td>
			<!--<td headers="p pf" style="text-align:right;">175.767.713,09</td>-->
		</tr>
	</table>
	<div class="row">
		<div class="col-md-6">
			<table class="table">
				<tr>
					<td><b>Custo Anual Total - Aposentados:</b></td>
					<td><b class="aposentadorias_total">R$ 20.221.831,73</b></td>
				</tr>
				<tr>
					<td><b>Custo Anual Total - Pensionistas:</b></td>
					<td><b class="pensoes_total">R$ 1.942.560,49</b></td>
				</tr>
			</table>
		</div>
	</div>
	<hr>
	<table border="1" class="table">
		<tr style="color:white;background:#165E8B;">
			<th colspan="5" id="p" style="text-align:center;padding-top:5px;">Resumo da Folha do Fundo Previdenciário - 2016</th>
		</tr>
		<tr style="color:white;background:#165E8B;">
			<th rowspan="2" id="h" style="text-align:center;padding-top:25px;">2016</th>
			<!--<th rowspan="2" id="h" style="text-align:center;padding-top:25px;">Saldo Anterior</th>-->
			<th colspan="2" id="e" style="text-align:center;">Aposentadorias</th>
			<th colspan="2" id="p" style="text-align:center;">Pensões</th>
			<!--<th rowspan="2" id="h" style="text-align:center;padding-top:25px;">Saldo Disponível</th>-->
		</tr>
		<tr Style="color:white;background:#165E8B;">
			<th id="e1" headers="e" style="text-align:center;">Qtd</th>
			<th id="e2" headers="e" style="text-align:center;">Valor</th>
			<th id="p2" headers="p" style="text-align:center;">Qtd</th>
			<th id="p2" headers="p" style="text-align:center;">Valor</th>
		</tr>
		<tr>
			<td class="mes" headers="h"><b>Janeiro</b></td>
			<!--<td headers="e e1" style="text-align:right;">170.928.570,58</td>-->
			<td headers="e e2" style="text-align:center;">315</td>
			<td headers="e ef" style="text-align:right;">983.188,15</td>
			<td headers="p p1" style="text-align:center;">78</td>
			<td headers="p p2" style="text-align:right;">127.828,94</td>
			<!--<td headers="p pf" style="text-align:right;">175.767.713,09</td>-->
		</tr>
		<tr>
			<td class="mes" headers="h"><b>Fevereiro</b></td>
			<!--<td headers="e e1" style="text-align:right;">170.928.570,58</td>-->
			<td headers="e e2" style="text-align:center;">327</td>
			<td headers="e ef" style="text-align:right;">1.040.032,26</td>
			<td headers="p p1" style="text-align:center;">79</td>
			<td headers="p p2" style="text-align:right;">129.966,87</td>
			<!--<td headers="p pf" style="text-align:right;">175.767.713,09</td>-->
		</tr>
		<tr>
			<td class="mes" headers="h"><b>Março</b></td>
			<!--<td headers="e e1" style="text-align:right;">170.928.570,58</td>-->
			<td headers="e e2" style="text-align:center;">337</td>
			<td headers="e ef" style="text-align:right;">1.063.161,67</td>
			<td headers="p p1" style="text-align:center;">78</td>
			<td headers="p p2" style="text-align:right;">126.933,98</td>
			<!--<td headers="p pf" style="text-align:right;">175.767.713,09</td>-->
		</tr>
		<tr>
			<td class="mes" headers="h"><b>Abril</b></td>
			<!--<td headers="e e1" style="text-align:right;">170.928.570,58</td>-->
			<td headers="e e2" style="text-align:center;">349</td>
			<td headers="e ef" style="text-align:right;">1.112.560,07</td>
			<td headers="p p1" style="text-align:center;">78</td>
			<td headers="p p2" style="text-align:right;">127.634,72</td>
			<!--<td headers="p pf" style="text-align:right;">175.767.713,09</td>-->
		</tr>
		<tr>
			<td class="mes" headers="h"><b>Maio</b></td>
			<!--<td headers="e e1" style="text-align:right;">170.928.570,58</td>-->
			<td headers="e e2" style="text-align:center;">360</td>
			<td headers="e ef" style="text-align:right;">1.143.141,72</td>
			<td headers="p p1" style="text-align:center;">82</td>
			<td headers="p p2" style="text-align:right;">130.061,36</td>
			<!--<td headers="p pf" style="text-align:right;">175.767.713,09</td>-->
		</tr>
		<tr>
			<td class="mes" headers="h"><b>Junho</b></td>
			<!--<td headers="e e1" style="text-align:right;">170.928.570,58</td>-->
			<td headers="e e2" style="text-align:center;">376</td>
			<td headers="e ef" style="text-align:right;">1.214.572,10</td>
			<td headers="p p1" style="text-align:center;">82</td>
			<td headers="p p2" style="text-align:right;">128.573,27</td>
			<!--<td headers="p pf" style="text-align:right;">175.767.713,09</td>-->
		</tr>
		<tr>
			<td class="mes" headers="h"><b>Julho</b></td>
			<!--<td headers="e e1" style="text-align:right;">170.928.570,58</td>-->
			<td headers="e e2" style="text-align:center;">389</td>
			<td headers="e ef" style="text-align:right;">1.239.980,82</td>
			<td headers="p p1" style="text-align:center;">79</td>
			<td headers="p p2" style="text-align:right;">128.388,66</td>
			<!--<td headers="p pf" style="text-align:right;">175.767.713,09</td>-->
		</tr>
		<tr>
			<td class="mes" headers="h"><b>Agosto</b></td>
			<!--<td headers="e e1" style="text-align:right;">170.928.570,58</td>-->
			<td headers="e e2" style="text-align:center;">400</td>
			<td headers="e ef" style="text-align:right;">1.279.083,72</td>
			<td headers="p p1" style="text-align:center;">80</td>
			<td headers="p p2" style="text-align:right;">131.889,88</td>
			<!--<td headers="p pf" style="text-align:right;">175.767.713,09</td>-->
		</tr>
		<tr>
			<td class="mes" headers="h"><b>Setembro</b></td>
			<!--<td headers="e e1" style="text-align:right;">170.928.570,58</td>-->
			<td headers="e e2" style="text-align:center;">415</td>
			<td headers="e ef" style="text-align:right;">1.322.163,49</td>
			<td headers="p p1" style="text-align:center;">79</td>
			<td headers="p p2" style="text-align:right;">129.091,62</td>
			<!--<td headers="p pf" style="text-align:right;">175.767.713,09</td>-->
		</tr>
		<tr>
			<td class="mes" headers="h"><b>Outubro</b></td>
			<!--<td headers="e e1" style="text-align:right;">170.928.570,58</td>-->
			<td headers="e e2" style="text-align:center;">423</td>
			<td headers="e ef" style="text-align:right;">1.334.280,46</td>
			<td headers="p p1" style="text-align:center;">78</td>
			<td headers="p p2" style="text-align:right;">132.869,90</td>
			<!--<td headers="p pf" style="text-align:right;">175.767.713,09</td>-->
		</tr>
		<tr>
			<td class="mes" headers="h"><b>Novembro</b></td>
			<!--<td headers="e e1" style="text-align:right;">170.928.570,58</td>-->
			<td headers="e e2" style="text-align:center;">427</td>
			<td headers="e ef" style="text-align:right;">1.342.066,37</td>
			<td headers="p p1" style="text-align:center;">81</td>
			<td headers="p p2" style="text-align:right;">136.873,94</td>
			<!--<td headers="p pf" style="text-align:right;">175.767.713,09</td>-->
		</tr>
		<tr>
			<td class="mes" headers="h"><b>Dezembro</b></td>
			<!--<td headers="e e1" style="text-align:right;">170.928.570,58</td>-->
			<td headers="e e2" style="text-align:center;">428</td>
			<td headers="e ef" style="text-align:right;">1.341.828,54</td>
			<td headers="p p1" style="text-align:center;">81</td>
			<td headers="p p2" style="text-align:right;">137.278,53</td>
			<!--<td headers="p pf" style="text-align:right;">175.767.713,09</td>-->
		</tr>
		<tr>
			<td class="mes" headers="h"><b>Décimo</b></td>
			<!--<td headers="e e1" style="text-align:right;">170.928.570,58</td>-->
			<td headers="e e2" style="text-align:center;">428</td>
			<td headers="e ef" style="text-align:right;">1.179.733,83</td>
			<td headers="p p1" style="text-align:center;">81</td>
			<td headers="p p2" style="text-align:right;">124.703,58</td>
			<!--<td headers="p pf" style="text-align:right;">175.767.713,09</td>-->
		</tr>
	</table>
	<div class="row">
		<div class="col-md-6">
			<table class="table">
				<tr>
					<td><b>Custo Anual Total - Aposentados: </b></td>
					<td><b class="aposentadorias_total">R$ 15.595.793,20</b></td>
				</tr>
				<tr>
					<td><b>Custo Anual Total - Pensionistas:</b></td>
					<td><b class="pensoes_total">R$ 1.692.095,25</b></td>
				</tr>
			</table>
		</div>
	</div>
	<hr>
	<table border="1" class="table">
		<tr  Style="color:white;background:ForestGreen;">
			<th colspan="5" id="p" style="text-align:center;padding-top:5px;">Resumo da Folha do Fundo Previdenciário - 2015</th>
		</tr>
		<tr  Style="color:white;background:ForestGreen;">
			<th rowspan="2" id="h" style="text-align:center;padding-top:25px;">2015</th>
			<!--<th rowspan="2" id="h" style="text-align:center;padding-top:25px;">Saldo Anterior</th>-->
			<th colspan="2" id="e" style="text-align:center;">Aposentadorias</th>
			<th colspan="2" id="p" style="text-align:center;">Pensões</th>
			<!--<th rowspan="2" id="h" style="text-align:center;padding-top:25px;">Saldo Disponível</th>-->
		</tr>
		<tr Style="color:white;background:ForestGreen;">
			<th id="e1" headers="e" style="text-align:center;">Qtd</th>
			<th id="e2" headers="e" style="text-align:center;">Valor</th>
			<th id="p2" headers="p" style="text-align:center;">Qtd</th>
			<th id="p2" headers="p" style="text-align:center;">Valor</th>
		</tr>
		<tr>
			<td class="mes" headers="h"><b>Janeiro</b></td>
			<!--<td headers="e e1" style="text-align:right;">170.928.570,58</td>-->
			<td headers="e e2" style="text-align:center;">33</td>
			<td headers="e ef" style="text-align:right;">95.011,92</td>
			<td headers="p p1" style="text-align:center;">61</td>
			<td headers="p p2" style="text-align:right;">80.088,69</td>
			<!--<td headers="p pf" style="text-align:right;">175.767.713,09</td>-->
		</tr>
		<tr>
			<td class="mes" headers="h"><b>Fevereiro</b></td>
			<!--<td headers="e e1" style="text-align:right;">175.767.713,09</td>-->
			<td headers="e e2" style="text-align:center;">34</td>
			<td headers="e ef" style="text-align:right;">98.104,00</td>
			<td headers="p p1" style="text-align:center;">58</td>
			<td headers="p p2" style="text-align:right;">77320,48</td>
			<!--<td headers="p pf" style="text-align:right;">180.948.051,16</td>-->
		</tr>
		<tr>
			<td class="mes" headers="h"><b>Março</b></td>
			<!--<td headers="e e1" style="text-align:right;">180.948.051,51</td>-->
			<td headers="e e2" style="text-align:center;">33</td>
			<td headers="e ef" style="text-align:right;">86.680,04</td>
			<td headers="p p1" style="text-align:center;">63</td>
			<td headers="p p2" style="text-align:right;">89.978,11</td>
			<!--<td headers="p pf" style="text-align:right;">185.114.609,97</td>-->
		</tr>
		<tr>
			<td class="mes" headers="h"><b>Abril</b></td>
			<!--<td headers="e e1" style="text-align:right;">184.942.668,85</td>-->
			<td headers="e e2" style="text-align:center;">33</td>
			<td headers="e ef" style="text-align:right;">87.978,32</td>
			<td headers="p p1" style="text-align:center;">66</td>
			<td headers="p p2" style="text-align:right;">106.257,95</td>
			<!--<td headers="p pf" style="text-align:right;">189.226.384,85</td>-->
		</tr>
		<tr>
			<td class="mes" headers="h"><b>Maio</b></td>
			<!--<td headers="e e1" style="text-align:right;">184.942.668,85</td>-->
			<td headers="e e2" style="text-align:center;">50</td>
			<td headers="e ef" style="text-align:right;">125.313,17</td>
			<td headers="p p1" style="text-align:center;">66</td>
			<td headers="p p2" style="text-align:right;">97.579,43</td>
			<!--<td headers="p pf" style="text-align:right;">189.226.384,85</td>-->
		</tr>
		<tr>
			<td class="mes" headers="h"><b>Junho</b></td>
			<!--<td headers="e e1" style="text-align:right;">184.942.668,85</td>-->
			<td headers="e e2" style="text-align:center;">128</td>
			<td headers="e ef" style="text-align:right;">354.977,71</td>
			<td headers="p p1" style="text-align:center;">64</td>
			<td headers="p p2" style="text-align:right;">97.579,43</td>
			<!--<td headers="p pf" style="text-align:right;">189.226.384,85</td>-->
		</tr>
		<tr>
			<td class="mes" headers="h"><b>Julho</b></td>
			<!--<td headers="e e1" style="text-align:right;">184.942.668,85</td>-->
			<td headers="e e2" style="text-align:center;">193</td>
			<td headers="e ef" style="text-align:right;">574.025,51</td>
			<td headers="p p1" style="text-align:center;">66</td>
			<td headers="p p2" style="text-align:right;">113.898,24</td>
			<!--<td headers="p pf" style="text-align:right;">189.226.384,85</td>-->
		</tr>
		<tr>
			<td class="mes" headers="h"><b>Agosto</b></td>
			<!--<td headers="e e1" style="text-align:right;">184.942.668,85</td>-->
			<td headers="e e2" style="text-align:center;">245</td>
			<td headers="e ef" style="text-align:right;">733.691,68</td>
			<td headers="p p1" style="text-align:center;">65</td>
			<td headers="p p2" style="text-align:right;">98.559,18</td>
			<!--<td headers="p pf" style="text-align:right;">189.226.384,85</td>-->
		</tr>
		<tr>
			<td class="mes" headers="h"><b>Setembro</b></td>
			<!--<td headers="e e1" style="text-align:right;">184.942.668,85</td>-->
			<td headers="e e2" style="text-align:center;">262</td>
			<td headers="e ef" style="text-align:right;">793.231,33</td>
			<td headers="p p1" style="text-align:center;">72</td>
			<td headers="p p2" style="text-align:right;">107.396,24</td>
			<!--<td headers="p pf" style="text-align:right;">189.226.384,85</td> RBPREV_carteira_setembro_2015-->
		</tr>
		<tr>
			<td class="mes" headers="h"><b>Outubro</b></td>
			<!--<td headers="e e1" style="text-align:right;">184.942.668,85</td>-->
			<td headers="e e2" style="text-align:center;">272</td>
			<td headers="e ef" style="text-align:right;">823.565,64</td>
			<td headers="p p1" style="text-align:center;">72</td>
			<td headers="p p2" style="text-align:right;">101.550,19</td>
			<!--<td headers="p pf" style="text-align:right;">189.226.384,85</td> RBPREV_carteira_setembro_2015-->
		</tr>
		<tr>
			<td class="mes" headers="h"><b>Novembro</b></td>
			<!--<td headers="e e1" style="text-align:right;">184.942.668,85</td>-->
			<td headers="e e2" style="text-align:center;">288</td>
			<td headers="e ef" style="text-align:right;">879.508,06</td>
			<td headers="p p1" style="text-align:center;">74</td>
			<td headers="p p2" style="text-align:right;">104.654,69</td>
			<!--<td headers="p pf" style="text-align:right;">189.226.384,85</td> RBPREV_carteira_setembro_2015-->
		</tr>
		<tr>
			<td class="mes" headers="h"><b>Dezembro</b></td>
			<!--<td headers="e e1" style="text-align:right;">184.942.668,85</td>-->
			<td headers="e e2" style="text-align:center;">292</td>
			<td headers="e ef" style="text-align:right;">897.478,85</td>
			<td headers="p p1" style="text-align:center;">77</td>
			<td headers="p p2" style="text-align:right;">116.712,48</td>
			<!--<td headers="p pf" style="text-align:right;">189.226.384,85</td> RBPREV_carteira_setembro_2015-->
		</tr>
		<tr>
			<td class="mes" headers="h"><b>Décimo</b></td>
			<!--<td headers="e e1" style="text-align:right;">184.942.668,85</td>-->
			<td headers="e e2" style="text-align:center;">292</td>
			<td headers="e ef" style="text-align:right;">464.963,20</td>
			<td headers="p p1" style="text-align:center;">77</td>
			<td headers="p p2" style="text-align:right;">97.567,18</td>
			<!--<td headers="p pf" style="text-align:right;">189.226.384,85</td> RBPREV_carteira_setembro_2015-->
		</tr>
	</table>
	<div class="row">
		<div class="col-md-6">
			<table class="table">
				<tr>
					<td><b>Custo Anual Total - Aposentados: </b></td>
					<td><b class="aposentadorias_total">R$ 6.014.529,43</b></td>
				</tr>
				<tr>
					<td><b>Custo Anual Total - Pensionistas:</b></td>
					<td><b class="pensoes_total">R$ 1.289.142,29</b></td>
				</tr>
			</table>
		</div>
	</div>
</div>

<?php include("rodape.php"); ?>
<script type="text/javascript" src="js/functions.js?rndstr=<%= getRandomStr() %>"></script>
<script type="text/javascript">
	var format = new Intl.NumberFormat('pt-BR', {
		style: 'currency',
		currency: 'BRL'
	});
	var tempData = new Array();
	var meses= new Array("Janeiro","Fevereiro","Marco","Abril","Maio","Junho","Julho","Agosto","Setembro","Outubro","Novembro","Dezembro");
	var element = document.getElementById('dados');

	(async function() {
		var response = await fetch('http://rbprev.riobranco.ac.gov.br/db/api.php');
		var myData = await response.json();


		myData.map((data) => {
			if(data["ano"] == 2020){
				tempData.push(data);
			}
		});
		for(data of tempData){
			
			element.innerHTML +=`
			<tr>
			<td class="mes" headers="h"><b>${meses[parseInt(data.mes)-1]}</b></td>
			<td headers="e e2" style="text-align:center;">${data.qtd_aposentadorias_fprev}</td>
			<td class="aposentadorias a20" headers="e ef" style="text-align:right;" id="val_apo_fprev">${format.format(data.valor_aposentadorias_fprev)}</td>
			<td headers="p p1" style="text-align:center;" >${data.qtd_pensionistas_fprev}</td>
			<td class="pensoes p20" headers="p p2" style="text-align:right;">${format.format(data.valor_pensoes_fprev)}</td>
			</tr>`
		}
	})();
	
	setTimeout(()=>{
		$('.ca20').text(somarLinhas('.a20'));
		$('.cp20').text(somarLinhas('.p20'));	
		aposPensChart()
	}, 1000);

	
	
</script>
<style type="text/css">#brandingLogo {display: none;}</style>
