<?php

include_once('config.php');

if(isset($_POST['update']))
{
    $codigo_empresa = $_POST['codigo_empresa'];
    $nome = $_POST['nome'];
    $cnpj = $_POST['cnpj'];
    $inscEstad = $_POST['inscEstad'];
    $endereco = $_POST['endereco'];
    $cidade = $_POST['cidade'];
    $cep = $_POST['cep'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $senha1 = $_POST['senha1'];
    $sites = $_POST['sites'];
    $ramo = $_POST['ramo'];
    $estado = $_POST['estado'];

    $sqlUpdate = "UPDATE tcc9empresa SET  nome='$nome',cnpj='$cnpj',inscEstad='$inscEstad',endereco='$endereco',cidade='$cidade',cep='$cep',
    email='$email',senha='$senha',senha1='$senha1',sites='$sites',ramo='$ramo',estado='$estado'WHERE codigo_empresa='$codigo_empresa'";

    $result = $conexao->query($sqlUpdate);
}
header('Location: comsultarEmpresa.php');

?>