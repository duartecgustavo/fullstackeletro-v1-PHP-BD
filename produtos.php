<?php

    require_once('./PHP+BD/conexaoProdutos.php');
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="autor" content="Gustavo Castanho Duarte">
    <meta name="palavra chave" content="html5, loja_virtual, produtos">
    <link rel="shortcut icon" href="imgs/favicon.ico" type="image/x-icon">
    <title>Full-Stack-Eletro</title>

    <link rel="stylesheet" type="text/css" href="./CSS/styles.css">
    <link rel="stylesheet" type="text/css" href="./CSS/global.css">
    <link rel="stylesheet" type="text/css" href="./CSS/produtos.css">
    <script src="./JS/eventos.js"></script>

</head>

<body>

    <!--MENU-->
    <div class="menu">
        <nav>
            <a href="index.html"><img style="font-family: Comic Sans MS;" class="logomenumain" width="200px" src="imgs/logo3.jpg" alt="HOME"></a>
            <a href="produtos.html"><img class="logomenu" width="200px" src="imgs/produtoslogo.jpg" alt="PRODUTOS"></a>
            <a href="lojas.html"><img class="logomenu" width="200px" src="imgs/lojaslogo.jpg" alt="LOJAS"></a>
            <a href="contato.html"><img class="logomenu" width="200px" src="imgs/contatoslogo.jpg" alt="CONTATOS"></a>
        </nav>
    </div>

    <main>
        <!--LOGO PAGINA-->
        <br> <br> <br>
        <!--LOGO PAGINA-->
        <section class="logo" style="margin-bottom: 0px;">
            <img class="imglogo" src="imgs/produtoslogo.jpg">
        </section>



        <section>
            <!-- BARRA DE CATEGORIAS -->
            <div class="prodCategoriaBarra">
                <p class="categoria" onclick="exibir_Todos('todos')" style="cursor:pointer">TODOS</p>
                <p class="categoria" onclick="exibir_categoria('geladeira')" style="cursor:pointer">GELADEIRAS(3)</p>
                <p class="categoria" onclick=" exibir_categoria('fogao')" style="cursor:pointer">FOGÕES(2)</p>
                <p class="categoria" onclick=" exibir_categoria('lavaroupa')" style="cursor:pointer">LAVA-LOUÇA (1)</p>
                <p class="categoria" onclick="exibir_categoria('microondas')" style="cursor:pointer">MICRO-ONDAS (2)</p>
                <p class="categoria" onclick="exibir_categoria('freezer')" style="cursor:pointer">FREEZER (3)</p>
                <a href="pedidos.php"><p class="pedido"  style="cursor:pointer">COMPRAR</p></a>
            </div>

            <!-- PRODUTOS -->
            <div class="produtosprod">
                <?php
                    $sql = "select * from produtos";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        while($rows = $result->fetch_assoc()) {
                ?>

                    <div class="prod" id="fogao" id="fogaoconsul">
                        <img class="fogao-atlas" src="./imgs/<?php echo $rows["nomeimagem"]; ?>" alt="<?php echo $rows["categoria"]; ?>" style="width: 220px; height: 170px;" onclick="aumentar(this)">
                        <p class="titulo-prod" style="font-size: 13px;"><?php echo $rows["descricao"]; ?></p>
                        <hr>
                        <p class="preco-cort">R$<?php echo $rows["preco"]; ?></p>
                        <p class="preco-venda">R$<?php echo $rows["preco"]; ?></p>
                    </div>
                <?php 
                        }
                    }
                    else {
                        echo "Não há produtos cadastrados";
                    }
                ?>
            </div>
        </section>
    </main>

    <!--RODAPÉ-->
    <footer class="rodape" style="position: absolute;">
        <!-- style="bottom: -70%;  -->
        <!-- FORMAS DE PAGAMENTO-->
        <p class="logofooter"><img width="25%" src="imgs/pagamentos.jpg"></p>

        <img class="imgpag" alt="Formas_De_Pagamento" title="Formas De Pagamento" src="imgs/pagamentos.png">

        <p class="copyright">© 2020 - Recode Pró - Full-Stack-Eletro</p>
    </footer>
</body>

</html>
