<?php

if(!empty($_GET['codigo_empresa']))
{
    include_once('config.php'); 

    $codigo_empresa= $_GET['codigo_empresa'];

    $sqlSelect = "SELECT * FROM tcc9empresa WHERE codigo_empresa=$codigo_empresa";

    $result = $conexao->query($sqlSelect);

    if($result->num_rows > 0)
    {
       
$sqlDelete = "DELETE FROM  tcc9empresa WHERE codigo_empresa=$codigo_empresa";
$resultDelete = $conexao->query($sqlDelete);
    
    }
}
        header('Location: comsultarEmpresa.php');
 

?>
