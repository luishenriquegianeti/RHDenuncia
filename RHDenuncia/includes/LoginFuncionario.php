<?php
session_start();

if(isset($_POST['submit']) && !empty($_POST['email_funcionario']) && !empty($_POST['senha'] && !empty($_POST['codigo_empresa'])))
{
include_once('config.php');
 $email_funcionario = $_POST['email_funcionario'];
 $senha = $_POST['senha'];
 $codigo_empresa = $_POST['codigo_empresa'];
 
 $sql = "SELECT * FROM tcc9funcionario WHERE email_funcionario = '$email_funcionario' and senha = '$senha' and codigo_empresa = '$codigo_empresa'";
 $result = $conexao->query($sql);

 if (mysqli_num_rows($result) < 1)
 {
   unset($_SESSION['email_funcionario']);
    unset($_SESSION['senha']);
    unset($_SESSION['codigo_empresa']);
    header('Location: indexfuncionario.php');
    
 }
 else
 {
   $_SESSION['email_funcionario'] = $email_funcionario;
   $_SESSION['senha'] = $senha;
   $_SESSION['codigo_empresa'] = $codigo_empresa;
    header('Location: comsultarfuncionario1.php');
   
 }

}
else{
    header('Location: index.php');
}
?>


