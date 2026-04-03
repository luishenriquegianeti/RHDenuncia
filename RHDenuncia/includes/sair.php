<?php
session_start();
unset($_SESSION['email']);
unset($_SESSION['senha']);
unset($_SESSION['codigo_empresa']);
header("Location: index.php");
?>  