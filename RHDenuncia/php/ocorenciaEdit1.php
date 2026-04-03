<?php 

if(!empty($_GET['id']))
{
    include_once('config.php'); 

    $id= $_GET['id'];

    $sqlSelect = "SELECT * FROM tcc9ocorrencia WHERE id=$id";

    $result = $conexao->query($sqlSelect);

    if($result->num_rows > 0)
    {
        while($user_data = mysqli_fetch_assoc($result))
        {
    $data = $user_data['datas'];
    $hora = $user_data['hora'];
    $historico =$user_data['historico'];
    $email_funcionario = $user_data['email_funcionario'];
    $codigo_empresa = $user_data['codigo_empresa'];
    $feedbeck = $user_data['feedbeck'];
    $numBO= $user_data['numBO'];
    
        }

    }
    else
    {
        header('Location: comsultarOcor1.php');
    }

}
else
{
header('Location: comsultarOcor1.php');                                                                             
}

?>