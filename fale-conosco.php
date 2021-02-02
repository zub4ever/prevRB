<?php include("cabecalho.php");?>
<div class="container" style="margin-bottom: 10px;">
	<script>
		$('.hubspot-link-text').css('color', 'transparent');
	</script>
	
</style>
<form action="envia-contato.php" method="post">
	<h3 align="center">Tire suas dúvidas</h3><br />
	<form action="envia-contato.php" method="post" id="form-contato">
		<div class="form-group">
			<label for="nome">Nome completo*</label>
			<input type="text" class="form-control" id="nome" aria-describedby="nomeHelp" placeholder="Nome completo" name="nome" required="true">
		</div>
		<div class="form-group">
			<label for="cpf">CPF*</label>
			<input type="text" class="form-control" id="cpf" aria-describedby="cpfHelp" placeholder="CPF" name="cpf" required="true">
		</div>
		<div class="form-group">
			<label for="tiposegurado">Tipo de segurado</label>
			<select id="tiposegurado" class="form-control" name="tiposegurado">
				<option value="" selected disabled>Selecione</option>
				<option value="Pensionista">Pensionista</option>
				<option value="PublicoGeral">Público Geral</option>
				<option value="ServidorAtivo">Servidor Ativo</option>
				<option value="ServidorAtivoPensionista">Servidor Ativo e Pensionista</option>
				<option value="ServidorInativo">Servidor Inativo</option>
				<option value="ServidorInativoPensionista">Servidor Inativo e Pensionista</option>
			</select>
		</div>
		<div class="form-group">
			<label for="servico">Serviço</label>
			<select id="servico" class="form-control" name="servico">
				<option value="" selected disabled>Selecione</option>
				<option value="Aposentadoria">Aposentadoria</option>
				<option value="Pensao">Pensão</option>
				<option value="Recadastramento">Recadastramento</option>
				<option value="Contracheque">Contracheque</option>
				<option value="CedulaC">Cédula C</option>
				<option value="DAP">DAP</option>
				<option value="InformeDeRemdimentos">Informe de rendimentos</option>
				<option value="CRP">CRP</option>
				<option value="Outro">Outro</option>
			</select>
		</div>
		<div class="form-group">
			<label for="processo">Número do processo (caso ouver).</label>
			<input type="text" class="form-control" id="processo" name="processo">
		</div>
		<div class="form-group">
			<label for="email">Email*</label>
			<input type="email" class="form-control" id="email" placeholder="exemplo@email.com" name="email" required="true">
		</div>
		<div class="form-group">
			<label class="form-check-label" for="assunto">Assunto</label>
			<input type="text" class="form-control" id="assunto" name="assunto" required="true">
		</div>
		<div class="form-group">
			<label class="form-check-label" for="mensagem">Mensagem</label>
			<textarea class="form-control" id="mensagem" name="mensagem" required="true"></textarea>
		</div>
		<div class="g-recaptcha" data-sitekey="6Lcgt8IZAAAAAAHlWEQFQDob0dkCZMYLiNQ37rLP"></div>
		<button type="submit" class="btn btn-primary">Enviar</button>
		<script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit"
        async defer>
    </script>
	</form>
</div>

<?php include("rodape.php");?>
