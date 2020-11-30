<?php

session_start();
// DECLARAÇÃO DE VARIAVEIS

$email = $_POST['email'];
$senha = $_POST['senha'];

// Validando informações
if (strlen($email) > 3 && strlen($senha) > 3) {

    // Realizando conexão com banco
    $conn = mysqli_connect("localhost", "root", "", "fseletro");

    // Execução da instrução SQL e validando e-mail e senha
    $resultado_consulta = $conn->query("SELECT * from usuarios where email = '$email' AND senha = '$senha'");
    $usuarios = mysqli_fetch_row($resultado_consulta);

    if ($usuarios) {

        echo '<pre>';
        print_r($usuarios);
        echo '</pre> <hr />';

        $_SESSION['nome'] = $usuarios[1];
        $_SESSION['email'] = $usuarios[2];
        $_SESSION['cep'] = $usuarios[4];
        $_SESSION['senha'] = $usuarios[3];

        header('Location: http://localhost/fullstackeletro.2.0/home.php');
        "<script>
            alert('Logado')

        </script>";
        // location.href='http://localhost/fullstackeletro.2.0/home.php'
    } else {
        // header('Location: index.html');
        echo
            "<script>
            alert('E-mail ou senha invalidos!')
            location.href='http://localhost/fullstackeletro.2.0/'
        </script>";
    }
} else {
    echo
        "<script>
        alert('E-mail ou senha invalidos!')
        location.href='http://localhost/fullstackeletro.2.0/'
    </script>";
}
