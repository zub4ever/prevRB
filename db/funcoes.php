<?php 

// Recebe o número do mês e retorna o nome do mês
function mesString($mes_n) {
	$mes = array('', 'janeiro', 'fevereiro', 'março', 'abril', 'maio', 'junho', 'julho', 'agosto', 'setembro', 'outubro', 'novembro', 'dezembro', 'décimo terceiro');
	return utf8_encode($mes[$mes_n]);
}

// Recebe um número qualquer e transforma ele para moeda brasileira
function emReais($dado){
   	return 'R$ '.utf8_encode(number_format($dado, 2,",","."));
} 

// Formata uma data para o modelo -> dia/mês/ano
function data($data){
    return date("d/m/Y", strtotime($data));
}

?>