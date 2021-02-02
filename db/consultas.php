<?php
include('connect.php');
include('db/funcoes.php');

// ---------------------------------------APOSENTADORIAS CONCEDIDAS-----------------------------------------------//
$apoConcedidasQ = "SELECT pessoafisica.nome AS nome, orgao.sigla AS lotacao, cargo.descricao AS cargo, regra.descricao AS regra, processoaposentadoria.portaria AS portaria, processoaposentadoria.dataAposentadoria AS data, processoaposentadoria.num_diario AS diario
FROM contrato, pessoafisica, cargo, orgao, regra, processoaposentadoria WHERE contrato.servidor_id = pessoafisica.id 
AND contrato.cargo_id = cargo.id AND orgao.id = contrato.orgao_id AND regra.id = processoaposentadoria.regra_id AND processoaposentadoria.contrato_id = contrato.id;";

$apoConcedidas = mysqli_query($con, $apoConcedidasQ) or die(mysqli_error());
// ----------------------------------------------------------------------------------------------------------------//

// ---------------------------------------PENSÕES CONCEDIDAS-------------------------------------------------------//

$penConcedidasQ = "SELECT 
    pessoafisica.nome AS instituidor,
    dependente.nome AS dependente,
    dependente.grauParentesco AS parentesco,
    contratopensao.dataInicioBeneficio AS inicio,
    contratopensao.portaria AS portaria,
    contratopensao.numeroDiario AS diario
FROM
    pessoafisica,
    dependente,
    contratopensao
WHERE
    pessoafisica.id = dependente.servidor_id
        AND dependente.id = contratopensao.pensionista_id;";

$penConcedidas = mysqli_query($con, $penConcedidasQ) or die(mysqli_error());
//-----------------------------------------------------------------------------------------------------------------//


// ---------------------------------------FOLHA DE PAGAMENTOS------------------------------------------------------//
$folhapagtoQ = "SELECT 
    `qtdAposentadoFffin` AS qtd_apo_ffin,
    `valorAposFfin` AS val_apo_ffin,
    `qtdAposentadoFprev` AS qtd_apo_fprev,
    `valorAposFprev` AS val_apo_fprev,
    `qtdPensionistaFprev` AS qtd_pen_fprev,
    `valorPenFprev` AS val_pen_fprev,
    `qtdPensionistaFfin` AS qtd_pen_ffin,
    mes,
    `qtdTotalFfin` AS qtd_total_ffin,
    `qtdTotalFprev` AS qtd_total_fprev,
    `valorTotalFprev` AS val_total_fprev,
    `valorTotalFfin` AS val_total_ffin,
    `valorPenFfin` AS val_pen_ffin
FROM
    folhapagamento
ORDER BY id DESC
LIMIT 1;";
$folhapagto = mysqli_query($con, $folhapagtoQ) or die(mysqli_error());

// -----------------------------------------------------------------------------------------------------------------//
$folhapagtoDQ = "SELECT 
    `qtdAposentadoFffin` AS qtd_apo_ffin,
    SUM(`valorAposFfin`) AS val_apo_ffin,
    `qtdAposentadoFprev` AS qtd_apo_fprev,
    SUM(`valorAposFprev`) AS val_apo_fprev,
    `qtdPensionistaFprev` AS qtd_pen_fprev,
    SUM(`valorPenFprev`) AS val_pen_fprev,
    `qtdPensionistaFfin` AS qtd_pen_ffin,
    mes,
    `qtdTotalFfin` AS qtd_total_ffin,
    `qtdTotalFprev` AS qtd_total_fprev,
    SUM(`valorTotalFprev`) AS val_total_fprev,
    SUM(`valorTotalFfin`) AS val_total_ffin,
    SUM(`valorPenFfin`) AS val_pen_ffin
FROM
    folhapagamento
WHERE
    mes IN (12 , 13);";

$folhapagtod = mysqli_query($con, $folhapagtoDQ) or die(mysqli_error());

?>