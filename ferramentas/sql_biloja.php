<?php
require_once './config/conexao.php';
require_once './config/config_geral.php';


$cTotal = mysqli_query ($conexao, "SELECT count(codticket) AS totalTicket FROM brazip_bi.ticket WHERE dtabertura >= '$DATAINICIAL' and coddepartamento = $DEPARTAMENTOLOJA");
$totalTicket = mysqli_fetch_assoc($cTotal);

$cTotalFechado = mysqli_query($conexao, "SELECT count(codticket) AS totalFechado from brazip_bi.ticket WHERE dtabertura >= '$DATAINICIAL' and codstatus = 3 and coddepartamento = $DEPARTAMENTOLOJA");
$totalFechado = mysqli_fetch_assoc($cTotalFechado);

$cFabrica = mysqli_query($conexao, "SELECT count(codticket) AS totalFabrica from brazip_bi.ticket WHERE dtabertura >= '$DATAINICIAL' and codstatus = 11 and coddepartamento = $DEPARTAMENTOLOJA");
$totalFabrica = mysqli_fetch_assoc($cFabrica);

$cInterno = mysqli_query($conexao, "SELECT count(codticket) AS totalInterno from brazip_bi.ticket WHERE dtabertura >= '$DATAINICIAL' and codstatus in (4, 5, 14) and coddepartamento = $DEPARTAMENTOLOJA");
$totalInterno = mysqli_fetch_assoc($cInterno);

$cEmpresa = mysqli_query($conexao, "SELECT count(codticket) AS totalEmpresa from brazip_bi.ticket WHERE dtabertura >= '$DATAINICIAL' and codstatus = 1 and coddepartamento = $DEPARTAMENTOLOJA");
$totalEmpresa = mysqli_fetch_assoc($cEmpresa);

$cAbertosMes = mysqli_query($conexao, "SELECT COUNT(codticket) AS abertosMes, DATE_FORMAT(dtabertura, '%c') as mesAbertura FROM brazip_bi.ticket WHERE dtabertura >= '$DATAINICIAL' and coddepartamento = $DEPARTAMENTOLOJA group BY mesAbertura");

$janeiro = 0; $fevereiro = 0; $marco = 0; $abril = 0; $maio = 0; $junho = 0; $julho = 0; $agosto = 0; $setembro = 0; $outubro = 0; $novembro = 0; $dezembro = 0;
while($tAbetosMes = mysqli_fetch_assoc($cAbertosMes)){
    if($tAbetosMes["mesAbertura"] == 1){
        $janeiro = $tAbetosMes["abertosMes"];
    }else if($tAbetosMes["mesAbertura"] == 2){
        $fevereiro = $tAbetosMes["abertosMes"];
    }else if($tAbetosMes["mesAbertura"] == 3){
        $marco = $tAbetosMes["abertosMes"];
    }else if($tAbetosMes["mesAbertura"] == 4){
        $abril = $tAbetosMes["abertosMes"];
    }else if($tAbetosMes["mesAbertura"] == 5){
        $maio = $tAbetosMes["abertosMes"];
    }else if($tAbetosMes["mesAbertura"] == 6){
        $junho = $tAbetosMes["abertosMes"];
    }else if($tAbetosMes["mesAbertura"] == 7){
        $julho = $tAbetosMes["abertosMes"];
    }else if($tAbetosMes["mesAbertura"] == 8){
        $agosto = $tAbetosMes["abertosMes"];
    }else if($tAbetosMes["mesAbertura"] == 9){
        $setembro = $tAbetosMes["abertosMes"];
    }else if($tAbetosMes["mesAbertura"] == 10){
        $outubro = $tAbetosMes["abertosMes"];
    }else if($tAbetosMes["mesAbertura"] == 11){
        $novembro = $tAbetosMes["abertosMes"];
    }else if($tAbetosMes["mesAbertura"] == 12){
        $dezembro = $tAbetosMes["abertosMes"];
    }
}

$cAbertosMes = mysqli_query($conexao, "SELECT COUNT(codticket) AS abertosMes, DATE_FORMAT(dtabertura, '%c') as mesAbertura FROM brazip_bi.ticket WHERE dtabertura >= '$DATAINICIAL' and coddepartamento = $DEPARTAMENTOLOJA group BY mesAbertura");

$janeiro = 0; $fevereiro = 0; $marco = 0; $abril = 0; $maio = 0; $junho = 0; $julho = 0; $agosto = 0; $setembro = 0; $outubro = 0; $novembro = 0; $dezembro = 0;
while($tAbetosMes = mysqli_fetch_assoc($cAbertosMes)){
    if($tAbetosMes["mesAbertura"] == 1){
        $janeiro = $tAbetosMes["abertosMes"];
    }else if($tAbetosMes["mesAbertura"] == 2){
        $fevereiro = $tAbetosMes["abertosMes"];
    }else if($tAbetosMes["mesAbertura"] == 3){
        $marco = $tAbetosMes["abertosMes"];
    }else if($tAbetosMes["mesAbertura"] == 4){
        $abril = $tAbetosMes["abertosMes"];
    }else if($tAbetosMes["mesAbertura"] == 5){
        $maio = $tAbetosMes["abertosMes"];
    }else if($tAbetosMes["mesAbertura"] == 6){
        $junho = $tAbetosMes["abertosMes"];
    }else if($tAbetosMes["mesAbertura"] == 7){
        $julho = $tAbetosMes["abertosMes"];
    }else if($tAbetosMes["mesAbertura"] == 8){
        $agosto = $tAbetosMes["abertosMes"];
    }else if($tAbetosMes["mesAbertura"] == 9){
        $setembro = $tAbetosMes["abertosMes"];
    }else if($tAbetosMes["mesAbertura"] == 10){
        $outubro = $tAbetosMes["abertosMes"];
    }else if($tAbetosMes["mesAbertura"] == 11){
        $novembro = $tAbetosMes["abertosMes"];
    }else if($tAbetosMes["mesAbertura"] == 12){
        $dezembro = $tAbetosMes["abertosMes"];
    }
}

$cFechadosMes = mysqli_query($conexao, "SELECT COUNT(codticket) AS fechadosMes, DATE_FORMAT(dtfechamento, '%c') as mesFechamento FROM brazip_bi.ticket WHERE dtfechamento >= '$DATAINICIAL' and coddepartamento = $DEPARTAMENTOLOJA and codstatus != 13 group BY mesFechamento");

$janeiroF = 0; $fevereiroF = 0; $marcoF = 0; $abrilF = 0; $maioF = 0; $junhoF = 0; $julhoF = 0; $agostoF = 0; $setembroF = 0; $outubroF = 0; $novembroF = 0; $dezembroF = 0;
while($tFechadosMes = mysqli_fetch_assoc($cFechadosMes)){
    if($tFechadosMes["mesFechamento"] == 1){
        $janeiroF = $tFechadosMes["fechadosMes"];
    }else if($tFechadosMes["mesFechamento"] == 2){
        $fevereiroF = $tFechadosMes["fechadosMes"];
    }else if($tFechadosMes["mesFechamento"] == 3){
        $marcoF = $tFechadosMes["fechadosMes"];
    }else if($tFechadosMes["mesFechamento"] == 4){
        $abrilF = $tFechadosMes["fechadosMes"];
    }else if($tFechadosMes["mesFechamento"] == 5){
        $maioF = $tFechadosMes["fechadosMes"];
    }else if($tFechadosMes["mesFechamento"] == 6){
        $junhoF = $tFechadosMes["fechadosMes"];
    }else if($tFechadosMes["mesFechamento"] == 7){
        $julhoF = $tFechadosMes["fechadosMes"];
    }else if($tFechadosMes["mesFechamento"] == 8){
        $agostoF = $tFechadosMes["fechadosMes"];
    }else if($tFechadosMes["mesFechamento"] == 9){
        $setembroF = $tFechadosMes["fechadosMes"];
    }else if($tFechadosMes["mesFechamento"] == 10){
        $outubroF = $tFechadosMes["fechadosMes"];
    }else if($tFechadosMes["mesFechamento"] == 11){
        $novembroF = $tFechadosMes["fechadosMes"];
    }else if($tFechadosMes["mesFechamento"] == 12){
        $dezembroF = $tFechadosMes["fechadosMes"];
    }
}


$caberto1Dia = mysqli_query($conexao, "SELECT count(codticket) AS abertos1Dia FROM brazip_bi.ticket WHERE dtabertura >= DATE_SUB(CURDATE(),INTERVAL 1 DAY) and coddepartamento = $DEPARTAMENTOLOJA");
$tabertos1Dia = mysqli_fetch_assoc($caberto1Dia);

$caberto3Dia = mysqli_query($conexao, "SELECT count(codticket) AS abertos3Dia FROM brazip_bi.ticket WHERE dtabertura >= DATE_SUB(CURDATE(),INTERVAL 3 DAY) and coddepartamento = $DEPARTAMENTOLOJA");
$tabertos3Dia = mysqli_fetch_assoc($caberto3Dia);

$caberto7Dia = mysqli_query($conexao, "SELECT count(codticket) AS abertos7Dia FROM brazip_bi.ticket WHERE dtabertura >= DATE_SUB(CURDATE(),INTERVAL 7 DAY) and coddepartamento = $DEPARTAMENTOLOJA");
$tabertos7Dia = mysqli_fetch_assoc($caberto7Dia);

$caberto30Dia = mysqli_query($conexao, "SELECT count(codticket) AS abertos30Dia FROM brazip_bi.ticket WHERE dtabertura >= DATE_SUB(CURDATE(),INTERVAL 30 DAY) and coddepartamento = $DEPARTAMENTOLOJA");
$tabertos30Dia = mysqli_fetch_assoc($caberto30Dia);

$caberto90Dia = mysqli_query($conexao, "SELECT count(codticket) AS abertos90Dia FROM brazip_bi.ticket WHERE dtabertura >= DATE_SUB(CURDATE(),INTERVAL 90 DAY) and coddepartamento = $DEPARTAMENTOLOJA");
$tabertos90Dia = mysqli_fetch_assoc($caberto90Dia);


$cfechado1Dia = mysqli_query($conexao, "SELECT count(codticket) AS fechados1Dia FROM brazip_bi.ticket WHERE dtfechamento >= DATE_SUB(CURDATE(),INTERVAL 1 DAY) and coddepartamento = $DEPARTAMENTOLOJA");
$tfechados1Dia = mysqli_fetch_assoc($cfechado1Dia);

$cfechado3Dia = mysqli_query($conexao, "SELECT count(codticket) AS fechados3Dia FROM brazip_bi.ticket WHERE dtfechamento >= DATE_SUB(CURDATE(),INTERVAL 3 DAY) and coddepartamento = $DEPARTAMENTOLOJA");
$tfechados3Dia = mysqli_fetch_assoc($cfechado3Dia);

$cfechado7Dia = mysqli_query($conexao, "SELECT count(codticket) AS fechados7Dia FROM brazip_bi.ticket WHERE dtfechamento >= DATE_SUB(CURDATE(),INTERVAL 7 DAY) and coddepartamento = $DEPARTAMENTOLOJA");
$tfechados7Dia = mysqli_fetch_assoc($cfechado7Dia);

$cfechado30Dia = mysqli_query($conexao, "SELECT count(codticket) AS fechados30Dia FROM brazip_bi.ticket WHERE dtfechamento >= DATE_SUB(CURDATE(),INTERVAL 30 DAY) and coddepartamento = $DEPARTAMENTOLOJA");
$tfechados30Dia = mysqli_fetch_assoc($cfechado30Dia);

$cfechado90Dia = mysqli_query($conexao, "SELECT count(codticket) AS fechados90Dia FROM brazip_bi.ticket WHERE dtfechamento >= DATE_SUB(CURDATE(),INTERVAL 90 DAY) and coddepartamento = $DEPARTAMENTOLOJA");
$tfechados90Dia = mysqli_fetch_assoc($cfechado90Dia);