<?php 
if(isset($_POST['submit'])) {
    include_once('config.php'); 
  $codigo_empresa = $_POST['codigo_empresa'];
    $data = $_POST['datas'];
    $hora = $_POST['hora'];
$historico = $_POST['historico'];
$historico = str_replace('<br />', '', $historico);
    $email_funcionario = $_POST['email_funcionario'];
  
    $numBO = $_POST['numBO'];
     $feedbeck = $_POST['feedbeck'];

    $result = mysqli_query($conexao, "INSERT INTO tcc9ocorrencia(codigo_empresa,datas,hora,historico,email_funcionario,numBO,feedbeck) 
        VALUES ('$codigo_empresa','$data','$hora','$historico','$email_funcionario','$numBO','$feedbeck')");



}

?>
