<?php
include("session.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Perfil</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/main.css">
</head>
<body>
    <div class="perfil">
        <div class="horizontal_bar">

            <!-- Menu -->
            <div id="mySidenav" class="sidenav">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                <a href="homepage.php">Home</a>
                <a href="perfil.php">Perfil</a>
            </div>

            <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>
            <a class="logo" href="homepage.php">LDMovies</a>
            <div class="barra_de_pesquisa">
                <input type="text" name="search" alt="search" class="search">
                <img src="../images/Icons/lupa.png" name="lupa" alt="lupa" class="lupa" width="20px" height="auto">
            </div>
            <img src="../images/Icons/notification.png" alt="notification" class="notification" width="25px" height="auto">

            <!-- TRES PONTINHOS -->
            <div id="myOps" class="optionsnav">
                <a href="javascript:void(0)" class="closebtn" onclick="closeOps()">&times;</a>
                <a href="logout.php">Logout</a>
            </div>
            <span style="font-size:30px;cursor:pointer" onclick="openOps()">
                <img src="../images/Icons/options.png" alt="options" class="options" width="22px" height="auto">
            </span>

            <img src="../images/cover.png" alt="cover" class="cover" width="100%" height="auto">

        </div>

            <img src="../images/Icons/perfil.png" alt="perfil" class="perfil-image" width="50px" height="auto">
            <h2 class="perfil-BemVindo">Bem Vindo <?php echo $_SESSION["username"] ?></h2>
            <h3 class="perfil-saldo">Saldo atual:<b>
                    <?php 
                        require('baseDados.php');
               
                        $rows= pg_query("select saldo from clientes where username='". $_SESSION["username"] ."'");
                        $saldo = pg_fetch_row($rows);
                        echo $saldo[0];
                    ?>
                </b>
            </h3>
            <h3 class="perfil-transferências">Transferências</h3>

        <div class="perfil-grid">
            <div class="perfil-grid-container">
                <h4 class="remetente">Remetente</h4>
                <p class="remetente-username">username2</p>
            </div>
            <div class="perfil-grid-container">
                <h4 class="destinatario">Destinatário</h4>
                <p class="destinatario-username">username</p>
            </div>
            <div class="perfil-grid-container">
                <h4 class="montante">Montante</h4>
                <p class="montante-valor">+5€</p>
            </div>
            <div class="perfil-grid-container">
                <h4 class="saldo">Saldo</h4>
                <p class="saldo-valor">10,55€</p>
            </div> <div class="perfil-grid-container">
                <h4 class="data">Data</h4>
                <p class="data-valor">10-11-2021</p>
            </div>
            
            <div class="perfil-grid-container">
                <h4 class="remetente">Remetente</h4>
                <p class="remetente-username">username2</p>
                <hr>
            </div>
            <div class="perfil-grid-container">
                <h4 class="destinatario">Destinatário</h4>
                <p class="destinatario-username">username</p>
            </div>
            <div class="perfil-grid-container">
                <h4 class="montante">Montante</h4>
                <p class="montante-valor">-3€</p>
            </div>
            <div class="perfil-grid-container">
                <h4 class="saldo">Saldo</h4>
                <p class="saldo-valor">5,55€</p>
            </div> <div class="perfil-grid-container">
                <h4 class="data">Data</h4>
                <p class="data-valor">08-11-2021</p>
            </div>
            
            <div class="perfil-grid-container">
                <h4 class="filme">Filme</h4>
                <p class="filme-nome">Pulp Fiction</p>
                <hr>
            </div>
            <div class="perfil-grid-container">
                <h4 class="preço">Valor</h4>
                <p class="preço-valor">-1,50€</p>
            </div>
            <div class="perfil-grid-container">
                <h4 class="desconto">Desconto</h4>
                <p class="desconto-valor">60%</p>
            </div>
            <div class="perfil-grid-container">
                <h4 class="saldo">Saldo</h4>
                <p class="saldo-valor">8,55€</p>
            </div> <div class="perfil-grid-container">
                <h4 class="data">Data</h4>
                <p class="data-valor">05-22-2021</p>
            </div>

            <div class="perfil-grid-container">
                <h4 class="filme">Filme</h4>
                <p class="filme-nome">KILLBILL</p>
                <hr>
            </div>
            <div class="perfil-grid-container">
                <h4 class="preço">Valor</h4>
                <p class="preço-valor">-2€</p>
            </div>
            <div class="perfil-grid-container">
                <h4 class="desconto">Desconto</h4>
                <p class="desconto-valor">nenhum</p>
            </div>
            <div class="perfil-grid-container">
                <h4 class="saldo">Saldo</h4>
                <p class="saldo-valor">9,05€</p>
            </div> <div class="perfil-grid-container">
                <h4 class="data">Data</h4>
                <p class="data-valor">22-10-2021</p>
            </div>

            <div class="perfil-grid-container">
                <h4 class="filme">Filme</h4>
                <p class="filme-nome">Sacanas sem Lei</p>
                <hr>
            </div>
            <div class="perfil-grid-container">
                <h4 class="preço">Valor</h4>
                <p class="preço-valor">-2,55€</p>
            </div>
            <div class="perfil-grid-container">
                <h4 class="desconto">Desconto</h4>
                <p class="desconto-valor">nenhum</p>
            </div>
            <div class="perfil-grid-container">
                <h4 class="saldo">Saldo</h4>
                <p class="saldo-valor">7,05€</p>
            </div> <div class="perfil-grid-container">
                <h4 class="data">Data</h4>
                <p class="data-valor">03-10-2021</p>
            </div>
        </div>
        <div class="perfil-definiçoes">
        <h3 class="definiçoes">Definições da conta</h3>
            <p class="mudar-user">Mudar username</p>
            <p class="mudar-pass">Mudar password</p>
            <p class="carregar">Carregar Saldo</p>
            <p class="transferir">Efectuar transferência</p>
        </div>
        <div class="perfil-filmes">
            <h3 class="filmes">Meus Filmes</h3>
            <img src="../images/Filmes/PF_cover.jpg" alt="PF" class="PF" width="auto" height="150px">
            <img src="../images/Filmes/KB_cover.jpg" alt="KB" class="KB" width="auto" height="150px">
            <img src="../images/Filmes/SsL_cover.jpg" alt="SsL" class="SsL" width="auto" height="150px">
        </div>
    </div>

    <script type="text/javascript" src="../JS/menu.js"></script>
</body>
</html>