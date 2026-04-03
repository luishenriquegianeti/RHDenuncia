<?php 

if(!empty($_GET['id']))
{
    include_once('config.php'); 

    $id= $_GET['id'];

    $sqlSelect = "SELECT * FROM tcc9funcionario WHERE id=$id";

    $result = $conexao->query($sqlSelect);

    if($result->num_rows > 0)
    {
        while($user_data = mysqli_fetch_assoc($result))
        {
    $nome = $user_data['nome'];
    $telefone = $user_data['telefone'];
    $cpf = $user_data['cpf'];
    $rg = $user_data['rg'];
    $cargo = $user_data['cargo'];
    $cidade = $user_data['cidade'];
    $numDepend = $user_data['numDepend'];
    $senha = $user_data['senha'];
    $senha1 = $user_data['senha1'];
    $email_funcionario = $user_data['email_funcionario'];
    $codigo_empresa = $user_data['codigo_empresa'];
    $estado = $user_data['estado'];
        }

    }
    else
    {
        header('Location: comsultarfuncionario1.php');
    }

}
else
{
header('Location: comsultarfuncionario1.php');                                                                             
}

?>