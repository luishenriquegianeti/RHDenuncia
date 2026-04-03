<?php
session_start();
include_once('config.php');

// Verificar se o usuário está logado
if (!isset($_SESSION['email']) || !isset($_SESSION['senha']) || !isset($_SESSION['codigo_empresa'])) {
    unset($_SESSION['email']);
    unset($_SESSION['senha']);
    unset($_SESSION['codigo_empresa']);
    header('Location: index.php');
    exit();
}

$logado = $_SESSION['email'];
$log = $_SESSION['codigo_empresa'];

if (!empty($_GET['search'])) {
    $data = $_GET['search'];
    $sql = "SELECT * FROM tcc9funcionario WHERE codigo_empresa = $log AND (nome LIKE '%$data%' OR email_funcionario LIKE '%$data%') ORDER BY codigo_empresa DESC";
} else {
    $sql = "SELECT * FROM tcc9funcionario WHERE codigo_empresa = $log ORDER BY codigo_empresa DESC";
}

$result = $conexao->query($sql);

while($user_data = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>" . $user_data['id'] . "</td>";
                echo "<td>" . $user_data['nome'] . "</td>";
                echo "<td>" . $user_data['telefone'] . "</td>";
                echo "<td>" . $user_data['cpf'] . "</td>";
                echo "<td>" . $user_data['rg'] . "</td>";
                echo "<td>" . $user_data['cargo'] . "</td>";
                echo "<td>" . $user_data['cidade'] . "</td>";
                echo "<td>" . $user_data['numDepend'] . "</td>";
                
               echo "<td><input type='password' value='" . $user_data['senha'] . "' readonly></td>";

               echo "<td><input type='password' value='" . $user_data['senha1'] . "' readonly></td>";

                echo "<td>" . $user_data['email_funcionario'] . "</td>";
                echo "<td>" . $user_data['codigo_empresa'] . "</td>";
               
                echo "<td>" . $user_data['estado'] . "</td>";
                echo "<td>
               
                      <a class='btn btn-sm btn-primary' href='deleteFuncionario.php?id=" . $user_data['id'] . "'>
                        <svg xmlns='http://www.w3.org/2000/svg' width='20' height='20' fill='currentColor' class='bi bi-trash' viewBox='0 0 16 16'>
                            <path d='M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6Z'/>
                            <path d='M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1ZM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118ZM2.5 3h11V2h-11v1Z'/>
                        </svg>
                      </a>
                </td>";
                echo "</td>";
            }

?>
