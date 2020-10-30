
<?php
    session_start();

    echo $_SESSION['nome'];
    echo $_SESSION['email'];
    echo $_SESSION['cep'];
    echo $_SESSION['senha'];

    echo '<hr/>';

    // $nome = $_SESSION['nome'];
    // $endereco = $_SESSION['cep'];
    $produto = $_POST['produto'];
    $valorUnid = 1000;
    $quantidade = $_POST['quantidade'];
    $valorTotal = $valorUnid;

    echo $nome = $_SESSION['nome'];
    echo $endereco = $_SESSION['cep'];
    // echo $produto = $_POST['produto'];
    echo $valorUnid = 1000;
    // echo $quantidade = $_POST['quantidade'];
    echo $valorTotal = $valorUnid;

    echo '<hr/>';

    echo $produto;
    echo $quantidade;

    $conn = mysqli_connect("localhost", "root", "", "fseletro");

    $sql = "INSERT INTO pedidos (cliente, endereco, produto, valor_und, quantidade, valor_total) values ('$nome', '$endereco', '$produto', '$valorUnid', '$quantidade', '$valorTotal')";
    $conn->query($sql);

    echo 'feito'
?>