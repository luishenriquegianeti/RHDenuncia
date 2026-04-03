<?php
if(isset($_POST['submit'])) {
    include_once('config.php'); 

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

    // Verificar se o email já existe
    $result = mysqli_query($conexao, "SELECT * FROM tcc9empresa WHERE email='$email'");
    if(mysqli_num_rows($result) > 0) {
        $message = "Email já existe!";
        echo '<script type="text/javascript">alert("' . $message . '")</script>';
    } else {
        $result = mysqli_query($conexao, "INSERT INTO tcc9empresa(nome,cnpj,inscEstad,endereco,cidade,cep,email,senha,senha1,sites,ramo,estado) 
            VALUES ('$nome','$cnpj','$inscEstad','$endereco','$cidade','$cep','$email','$senha','$senha1','$sites','$ramo','$estado')");
         
        $codigo_empresa = mysqli_insert_id($conexao);

        echo '<script type="text/javascript">
                function exibirNome() {
                    alert("Cadastro realizado com sucesso");
                    alert("Código da empresa: ' . $codigo_empresa . '");
                }
                window.onload = exibirNome ;
                
              </script>';
        
        header('Location: index.php');
    }
}


?>