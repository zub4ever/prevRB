<?php include("cabecalho.php"); ?>
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
			<td class="text-left" id="qtd_apo_fprev">
				<span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span>
			</td>
			<td class="text-left" id="val_apo_fprev">
				<span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span>
			</td>
		</tr>
		<tr>
			<td class="text-left">Aposentadorias FFIN</td>
			<td class="text-left" id="qtd_apo_ffin">
				<span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span>
			</td>
			<td class="text-left" id="val_apo_ffin">
				<span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span>
			</td>
		</tr>
		<tr>
			<td class="text-left">Pensões FPREV</td>
			<td class="text-left" id="qtd_pen_fprev">
				<span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span>
			</td>
			<td class="text-left" id="val_pen_fprev">
				<span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span>
			</td>
		</tr>
		<tr>
			<td class="text-left">Pensões FFIN</td>
			<td class="text-left" id="qtd_pen_ffin">
				<span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span>
			</td>
			<td class="text-left" id="val_pen_ffin">
				<span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span>
			</td>
		</tr>
		<tr>
			<td class="text-left text-success">Total FPREV</td>
			<td class="text-left text-success" id="qtd_total_fprev">
				<span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span>
			</td>
			<td class="text-left text-success" id="val_total_fprev">
				<span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span>
			</td>
		</tr>
		<tr>
			<td class="text-left text-primary">Total FFIN</td>
			<td class="text-left text-primary" id="qtd_total_ffin">
				<span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span>
			</td>
			<td class="text-left text-primary" id="val_total_ffin">
				<span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span>
			</td>
		</tr>
	</tbody>
</table>
<?php include("rodape.php"); ?>


