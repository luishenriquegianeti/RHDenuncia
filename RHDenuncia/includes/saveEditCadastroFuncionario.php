<?php

include_once('config.php');

if(isset($_POST['update']))
{
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $telefone = $_POST['telefone'];
    $cpf = $_POST['cpf'];
    $rg = $_POST['rg'];
    $cargo = $_POST['cargo'];
    $salario = $_POST['salario'];
    $cidade = $_POST['cidade'];
    $numDepend = $_POST['numDepend'];
    $endereco= $_POST['endereco'];
    $cep = $_POST['cep'];
    $senha = $_POST['senha'];
    $senha1 = $_POST['senha1'];
    $email_funcionario = $_POST['email_funcionario'];
    $codigo_empresa = $_POST['codigo_empresa'];
    $estado = $_POST['estado'];

    $sqlUpdate = "UPDATE tcc9funcionario SET  nome='$nome',telefone='$telefone',cpf='$cpf',rg='$rg',cargo='$cargo',salario='$salario',
    cidade='$cidade',numDepend='$numDepend',endereco='$endereco',cep='$cep',senha='$senha',senha1='$senha1',email_funcionario='$email_funcionario',
    codigo_empresa='$codigo_empresa',estado='$estado'WHERE id='$id'";

    $result = $conexao->query($sqlUpdate);
}
header('Location: comsultarOcorrencias.php');

?>