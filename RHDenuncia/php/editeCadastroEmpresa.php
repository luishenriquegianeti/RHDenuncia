<?php 

if(!empty($_GET['codigo_empresa']))
{
    include_once('config.php'); 

    $codigo_empresa= $_GET['codigo_empresa'];

    $sqlSelect = "SELECT * FROM tcc9empresa WHERE codigo_empresa=$codigo_empresa";
//edite empresa nao esquecer
    $result = $conexao->query($sqlSelect);

    if($result->num_rows > 0)
    {
        while($user_data = mysqli_fetch_assoc($result))
        {
    $nome = $user_data['nome'];
    $cnpj = $user_data['cnpj'];
    $inscEstad = $user_data['inscEstad'];
    $endereco = $user_data['endereco'];
    $cidade = $user_data['cidade'];
    $cep = $user_data['cep'];
    $email = $user_data['email'];
    $senha = $user_data['senha'];
    $senha1= $user_data['senha1'];
    $sites = $user_data['sites'];
    $ramo = $user_data['ramo'];
    $estado = $user_data['estado'];
   
        }

    }
    else
    {
        header('Location: comsultarEmpresa.php');
    }

}
else
{
header('Location: comsultarEmpresa.php');                                                                             
}

?>