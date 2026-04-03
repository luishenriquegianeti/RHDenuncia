<?php

include_once('config.php');

if(isset($_POST['updatee']))
{
    

     $id = $_POST['id'];
    $data = $_POST['datas'];
    $hora = $_POST['hora'];
   $historico = $_POST['historico'];
$historico = str_replace('<br />', '', $historico);
    $email_funcionario = $_POST['email_funcionario'];
    $codigo_empresa = $_POST['codigo_empresa'];
    $feedbeck = $_POST['feedbeck']; 
    $situacao = $_POST['situacao'];
    $numBO = $_POST['numBO'];


    $sqlUpdate = "UPDATE tcc9ocorrencia SET datas='$data',hora='$hora',historico='$historico',email_funcionario='$email_funcionario'
    ,codigo_empresa='$codigo_empresa',numBO='$numBO'WHERE id='$id'";

    $result = $conexao->query($sqlUpdate);
}
header('Location: comsultarOcorrencia1.php');

?>