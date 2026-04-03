<?php

include_once('config.php');

if(isset($_POST['update']))
{
    

     $id = $_POST['id'];
    $feedbeck = $_POST['feedbeck'];


    $sqlUpdate = "UPDATE tcc9ocorrencia SET feedbeck='$feedbeck' WHERE id='$id'";

    $result = $conexao->query($sqlUpdate);
}
header('Location: comsultarOcorrencia.php');

?>