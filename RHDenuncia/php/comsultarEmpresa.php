<?php

include_once('config.php');
session_start();


// Verificar se o usuário está logado
if (!isset($_SESSION['email']) || !isset($_SESSION['senha']) || !isset($_SESSION['codigo_empresa'])) {
    unset($_SESSION['email']);
    unset($_SESSION['senha']);
    unset($_SESSION['codigo_empresa']);
    header('Location: index.php');
    exit();
}

$logado = $_SESSION['email'];
$log = $_SESSION['codigo_empresa'];

if (!empty($_GET['search'])) {
    $data = $_GET['search'];
    
    $sql = "SELECT * FROM tcc9empresa WHERE codigo_empresa = '$log'";
} else {
    $sql = "SELECT * FROM tcc9empresa WHERE codigo_empresa = '$log' ";
}
$result = $conexao->query($sql);
?>