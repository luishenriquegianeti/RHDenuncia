<?php
session_start();
unset($_SESSION['email_funcionario']);
unset($_SESSION['senha']);
unset($_SESSION['codigo_empresa']);
header("Location: indexfuncionario.php");
?>  