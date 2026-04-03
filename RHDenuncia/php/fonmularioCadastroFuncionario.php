<?php
if(isset($_POST['submit'])) {
    include_once('config.php'); 

    $codigo_empresa = $_POST['codigo_empresa'];
    $nome = $_POST['nome'];
    $telefone = $_POST['telefone'];
    $cpf = $_POST['cpf'];
    $rg = $_POST['rg'];
    $cargo = $_POST['cargo'];
    
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];
    $numDepend = $_POST['numDepend'];
   
    $senha = $_POST['senha'];
    $senha1 = $_POST['senha1'];
    $email_funcionario = $_POST['email_funcionario'];

    // Verificar se o email já existe
    $result = mysqli_query($conexao, "SELECT * FROM tcc9funcionario WHERE email_funcionario='$email_funcionario'");
    if(mysqli_num_rows($result) > 0) {
        $message = "Email já existe!";
        echo '<script type="text/javascript">alert("' . $message . '")</script>';
    } else {
        $result = mysqli_query($conexao, "INSERT INTO tcc9funcionario(codigo_empresa,nome,telefone,cpf,rg,cargo,cidade,estado,numDepend,senha,senha1,email_funcionario) VALUES ('$codigo_empresa','$nome','$telefone','$cpf','$rg','$cargo','$cidade','$estado','$numDepend','$senha','$senha1','$email_funcionario')");
        header('Location: index.php');
    }
}

?>