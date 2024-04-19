<?php
 
require_once('operacao.php');
 
$objeto = new operacao();
 
if(isset($_POST['btnSomar'])){
    $objeto->setValor1($POST['valor1']);
    $objeto->setValor2($POST['valor2']);
    $objeto->valor1 = $_POST['valor1'];
    echo "O valor da soma é: ".$objeto->somar();
}