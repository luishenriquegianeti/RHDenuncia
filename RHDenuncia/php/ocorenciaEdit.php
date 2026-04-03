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
    
       $feedbeck = $user_data['feedbeck'];
    
        }

    }
    else
    {
        header('Location: comsultarOcor.php');
    }

}
else
{
header('Location: comsultarOcor.php');                                                                             
}

?>