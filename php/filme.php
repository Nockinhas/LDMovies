<?php
include("session.php");
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <title>Filme</title>
</head>
<body>
    <div class="filme">
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

        <div class="filme-grid">
            <div class="container">
                <img src="../images/Filmes/2.jpg" class="img-grande">
            </div>
            <div class="container">
                <img src="../images/PF_cover.jpg" alt="PF_cover" width="150px" height="auto">
                <div class="container-information">
                    <?php 
                        $i = $_GET['i'];
                        require('baseDados.php');
                        $rows= pg_query("select * from filmes where id='". $i . "'");
                        $filme = pg_fetch_row($rows);
                        $preço = ($filme[4] * $filme[3]) / 100 ;
                        echo '<h2>' . $filme[0] . '</h2> 
                        <h4>TOTAL</h4>';
                        if($filme[4] != NULL || $filme[4] != 0){
                        echo '<h3><strike>' . $filme[3] . '€</strike></h3>
                        <h3><b>(' . $filme[4] . '% de desconto)</b></h3>
                        <h3><b>' . $preço . '€</b></h3>';
                        }
                        else{
                            echo '<h3><b>' . $filme[3] . '€</b></h3>';
                        }
                        echo 
                        '</div>
                        </div>
                        <div class="container">
                            <h3>Elenco</h3>
                            <img src="../images/' . $i .'.jpg" alt="1" style="width:100px">';
                            for($j = 0; $j < 7; $j++){
                                echo '<h4>' . json_decode(str_replace(['{', '}'], ['[', ']'], $filme[2]))[$j] . '</h4> ';
                            }
                            
                        '</div>'
            ?> 

    <script type="text/javascript" src="../JS/menu.js"></script>
</body>
</html>