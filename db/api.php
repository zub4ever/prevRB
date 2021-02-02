<?php
    include('connect.php');
    header("Cache-Control: no-cache, no-store, must-revalidate"); // limpa o cache
    header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json; charset=utf-8"); 
    
    clearstatcache(); // limpa o cache
    
    // Dados do servidor de banco de Dados
    $servidor = $host;
    $usuario  = $user;
    $senha    = $pass;
    $banco    = $db;

    try {
        $conecta = new PDO("mysql:host=$servidor;dbname=$banco", $usuario , $senha);
        $conecta->exec("set names utf8"); //permite caracteres latinos.
        $consulta = $conecta->prepare('SELECT * FROM folhapagamento');
        $consulta->execute(array());  
        $resultadoDaConsulta = $consulta->fetchAll();
        
        $StringJson = "[";
        
    if ( count($resultadoDaConsulta) ) {
        foreach($resultadoDaConsulta as $registro) {
            
            if ($StringJson != "[") {$StringJson .= ",";}
            $StringJson .= '{"id":"' . $registro['id']  . '",';
            $StringJson .= '"ano":"' . $registro['ano']  . '",';    
            $StringJson .= '"mes":"' . $registro['mes']    . '",';  
            $StringJson .= '"valor_aposentadorias_ffin":"' . $registro['valorAposFfin']    . '",';  
            $StringJson .= '"valor_aposentadorias_fprev":"' . $registro['valorAposFprev']    . '",';    
            $StringJson .= '"valor_pensoes_ffin":"' . $registro['valorPenFfin']    . '",';  
            $StringJson .= '"valor_pensoes_fprev":"' . $registro['valorPenFprev']    . '",';  
            $StringJson .= '"qtd_aposentadorias_ffin":"' . $registro['qtdAposentadoFffin']    . '",';  
            $StringJson .= '"qtd_aposentadorias_fprev":"' . $registro['qtdAposentadoFprev']    . '",';  
            $StringJson .= '"qtd_pensionistas_ffin":"' . $registro['qtdPensionistaFfin']    . '",';  
            $StringJson .= '"qtd_pensionistas_fprev":"' . $registro['qtdPensionistaFprev']    . '",';  
            $StringJson .= '"qtd_total_ffin":"' . $registro['qtdTotalFfin']    . '",';  
            $StringJson .= '"qtd_total_fprev":"' . $registro['qtdTotalFprev']    . '",';  
            $StringJson .= '"valor_total_ffin":"' . $registro['valorTotalFfin']    . '",';  
            $StringJson .= '"valor_total_fprev":"' . $registro['valorTotalFprev'] . '"}';
        }  
        echo $StringJson . "]"; // Exibe o vettor JSON
  } 
} catch(PDOException $e) {
   echo 'ERROR: ' . $e->getMessage(); // opcional, apenas para teste
}
?>