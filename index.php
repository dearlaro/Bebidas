<?php
require_once 'bebida.php';
require_once 'refrigerante.php';
require_once 'suco.php';
require_once 'vinho.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>BEBIDAS</title>
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">
    <link href="css/main.css" rel="stylesheet" media="all">
</head>

<body>
    <div class="page-wrapper bg-red p-t-180 p-b-100 font-robo">
        <div class="wrapper wrapper--w960">
            <div class="card card-2">
                <div class="card-heading"></div>
                <div class="card-body">
                    <h2 class="title">Cadastro de Bebidas</h2><br><br><br>
                    <form method="POST">
                        <h2 class="title">Vinho</h2>
                            <div class="input-group">
                                <input class="input--style-2" type="text" placeholder="Nome do vinho" id="nome" name="nome">
                            </div>
                            <div class="input-group">
                                <input class="input--style-2" type="number" placeholder="Preço do vinho" id="preco" name="preco" >
                            </div>
                            <div class="input-group">
                                <input class="input--style-2" type="text" placeholder="Safra do vinho" id="safra" name="safra">
                            </div>
                            <div class="input-group">
                                <input class="input--style-2" type="text" placeholder="Tipo do vinho" id="tipo" name="tipo">
                            </div>
                            <div class="p-t-30">
                                <button class="btn btn--radius btn--green" type="submit" id="btnVinho" name="btnVinho">Cadastrar vinho</button>
                            </div>
                            <div class="input--style-2">
                                <?php
                                if(isset($_POST['btnVinho'])){
                                    $vinho1 = new Vinho();
                                    $vinho1->setNome($_POST['nome']);
                                    $vinho1->setPreco($_POST['preco']);
                                    $vinho1->setSafra($_POST['safra']);
                                    $vinho1->setTipo($_POST['tipo']);
                                    echo $vinho1->mostrarBebida();
                                    if($_POST['preco']>25){
                                        echo " Caro!";
                                    }
                                    else{
                                        echo " Dentro do orçamento!";
                                    }
                                }
                                ?>
                            </div>
                        <br><br><br>
                        <h2 class="title">Suco</h2>
                            <div class="input-group">
                                <input class="input--style-2" type="text" placeholder="Nome do suco" id="nome" name="nome">
                            </div>
                            <div class="input-group">
                                <input class="input--style-2" type="number" placeholder="Preço do suco" id="preco" name="preco" >
                            </div>
                            <div class="input-group">
                                <input class="input--style-2" type="text" placeholder="Sabor do suco" id="sabor" name="sabor">
                            </div>
                            <div class="p-t-30">
                                <button class="btn btn--radius btn--green" type="submit" id="btnSuco" name="btnSuco">Cadastrar suco</button>
                            </div><br><br><br>
                            <div class="input--style-2">
                            <?php
                            if(isset($_POST['btnSuco'])){
                                $suco1 = new Suco();
                                $suco1->setNome($_POST['nome']);
                                $suco1->setPreco($_POST['preco']);
                                $suco1->setSabor($_POST['sabor']);
                                echo $suco1->mostrarBebida();
                                if($_POST['preco']>5){
                                    echo " Caro!";
                                }
                                else{
                                    echo " Dentro do orçamento!";
                                }
                            }
                            ?>
                            </div>

                        <h2 class="title">Refrigerante</h2>
                            <div class="input-group">
                                <input class="input--style-2" type="text" placeholder="Nome do refrigerante" id="nome" name="nome">
                            </div>
                            <div class="input-group">
                                <input class="input--style-2" type="number" placeholder="Preço do refrigerante" id="preco" name="preco" >
                            </div>
                            <div class="input-group">
                                <input class="input--style-2" type="text" placeholder="Refrigerante é retornável?" id="retornavel" name="retornavel">
                            </div>
                            <div class="p-t-30">
                                <button class="btn btn--radius btn--green" type="submit" id="btnRefri" name="btnRefri">Cadastrar refrigerante</button>
                            </div>
                            <div class="input--style-2">
                            <?php   
                            if(isset($_POST['btnRefri'])){
                                $refri1 = new Refrigerante();
                                $refri1->setNome($_POST['nome']);
                                $refri1->setPreco($_POST['preco']);
                                $refri1->setRetornavel($_POST['retornavel']);
                                echo $refri1->mostrarBebida();
                                if($_POST['preco']>2.5){
                                    echo " Caro!";
                                }
                                else{
                                    echo " Dentro do orçamento!";
                                }
                            }
                            ?>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>
    <script src="js/global.js"></script>

</body>

</html>

<?php
