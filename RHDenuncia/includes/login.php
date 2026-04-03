<?php
session_start();

if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha'] && !empty($_POST['codigo_empresa'])))
{
include_once('config.php');
 $email = $_POST['email'];
 $senha = $_POST['senha'];
 $codigo_empresa = $_POST['codigo_empresa'];
 
 $sql = "SELECT * FROM tcc9empresa WHERE email = '$email' and senha = '$senha' and codigo_empresa = '$codigo_empresa'";
 $result = $conexao->query($sql);

 if (mysqli_num_rows($result) < 1)
 {
   unset($_SESSION['email']);
    unset($_SESSION['senha']);
    unset($_SESSION['codigo_empresa']);
    header('Location: index.php');
    
 }
 else
 {
   $_SESSION['email'] = $email;
   $_SESSION['senha'] = $senha;
   $_SESSION['codigo_empresa'] = $codigo_empresa;
    header('Location: comsultarFuncionario.php');
   
 }

}
else{
    header('Location: index.php');
}
?>


