<?php

// DECLARAÇÃO DE VARIAVEIS

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $data = $_POST['nascimento'];
    $cep = $_POST['cep'];
    $rua = $_POST['rua'];
    $bairro = $_POST['bairro'];
    $cidade = $_POST['cidade'];


// VALIDANDO IDADE

    // separando yyyy, mm, ddd
    list($ano, $mes, $dia) = explode('-', $data);

    // data atual
    $hoje = mktime(0, 0, 0, date('m'), date('d'), date('Y'));

    // Descobre a unix timestamp da data de nascimento do fulano
    $nasc = mktime( 0, 0, 0, $mes, $dia, $ano);

    // cálculo
    $idade = floor((((($hoje - $nasc) / 60) / 60) / 24) / 365.25);
    //  echo "Idade: $idade Anos";

// FIM - VALIDANDO IDADE


// VALIDAÇÃO DE CAMPOS E IDADE

if (strlen($nome) > 3 && strlen($email) > 3 && strlen($senha) > 3 && strlen($cep) > 3 
    && strlen($rua) > 3 && strlen($bairro) > 3 && strlen($cidade) > 3 && strlen($data) > 3 && $idade > 18) {

    $conn = mysqli_connect("localhost", "root", "", "fseletro");
    $sql = "INSERT INTO usuarios (nome, email, senha, cep, cidadeUF) values ('$nome', '$email', '$senha', '$cep', '$cidade')";
    $conn->query($sql);

    // RETORNANDO A HOME
    echo "<script>
            alert('Cadastro efetuado!')
            window.location.href = 'http://localhost/fullstackeletro.2.0/index.html'
        </script>
        ";



    // NOME INVALIDO

} else if (strlen($nome) <= 4) {

    echo "<script>
        alert('Digite um nome válido!')
        window.location.href = 'http://localhost/fullstackeletro.2.0/cadastro.php'
        </script>
        ";

    // E-MAIL INVALIDO

} else if (strlen($email) <= 3) {

    echo "<script>
        alert('Digite um e-mail válido!')
        window.location.href = 'http://localhost/fullstackeletro.2.0/cadastro.php'
        </script>
        ";

        // SENHA INVALIDA

} else if (strlen($senha) <= 3) {

    echo "<script>
            alert('Digite uma senha válida!')
            window.location.href = 'http://localhost/fullstackeletro.2.0/cadastro.php'
        </script>
        ";

        // CEP INVALIDO

} else if (strlen($cep) <= 5) {

    echo "<script>
            alert('Digite um CEP valido!')
            window.location.href = 'http://localhost/fullstackeletro.2.0/cadastro.php'
        </script>
        ";

        // CIDADE INVALIDA

} else if (strlen($cidade) <= 3) {

    echo "<script>
            alert('Digite uma cidade valida!')
            window.location.href = 'http://localhost/fullstackeletro.2.0/cadastro.php'
        </script>
        ";

        // BAIRRO INVALIDO

} else if (strlen($bairro) <= 3) {

    echo "<script>
            alert('Digite um bairro valida!')
            window.location.href = 'http://localhost/fullstackeletro.2.0/cadastro.php'
        </script>
        ";

        // RUA INVALIDA

} else if (strlen($rua) <= 3) {

    echo "<script>
            alert('Digite uma rua valida!')
            window.location.href = 'http://localhost/fullstackeletro.2.0/cadastro.php'
        </script>
        ";

        // IDADE INSUFICIENTE

} else if (idade < 18) {

    echo "<script>
            alert('Você precisa ter 18 anos para se cadastrar.')
            window.location.href = 'http://localhost/fullstackeletro.2.0/cadastro.php'
        </script>
        ";
}

    //CHECANDO CONEXÃO

    // if(!$conn){
    //     die("A conecção falhou".mysqli_connect_error());
    // } else {
    //     echo "Deu tudo certo!";
    // }
// ?>