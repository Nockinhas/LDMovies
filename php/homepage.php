<?php
include("session.php");
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Homepage</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <link rel="stylesheet" href="css/index.css"> -->
    <!-- <link rel="stylesheet" href="css/homepage.css"> -->
    <link rel="stylesheet" href="../css/main.css">
</head>
<body>
    <div class="homepage">
        <div class="horizontal_bar">

            <!-- Menu -->
            <div id="mySidenav" class="sidenav">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                <a href="homepage.php">Home</a>
                <a href="perfil.php">Perfil</a>
            </div>

              <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>
            <a class="logo" href="/homepage.php">LDMovies</a>
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

            <h2 class="homepage-títuloFilmes">Filmes</h2>
            <img src="../images/Icons/list.png" alt="list" class="homepage-list" width="22px" height="auto">

        <div class="homepage-grid">

                 <?php
                 require('baseDados.php');
                 $query = "SELECT * FROM filmes";
                 $resultados = pg_query($connection, $query);
                 $numFilmes = pg_num_rows($resultados);
                 $sinopse = array( 0 => 'Os caminhos de vários criminosos se cruzam nestas três histórias de Quentin Tarantino. 
                 Um pistoleiro se apaixona pela mulher...',
                1 => 'A ex-assassina conhecida apenas como "A Noiva" acorda de um coma de quatro anos decidida a se vingar de Bill...', 
                2 => 'Dom Cobb é um ladrão com a rara habilidade de roubar segredos do inconsciente...', 
                3 => 'Um alerta vermelho da Interpol é emitido e o agente do FBI John Hartley assume o caso...',
                4 => 'O jornalista Eddie Brock desenvolve força e poder sobre-humanos quando o seu corpo se funde...', 
                5 => 'No final da década de 1969, Hollywood começa a se transformar e o astro de Tv...',
                6 => 'Durante a Segunda Guerra Mundial, na França, um grupo de judeus americanos...', 
                7 => 'Paul Atreides é um jovem brilhante, dono de um destino além da sua compreensão..');
                    for($i = 0; $i < $numFilmes; $i++){
                        $rows= pg_query("select * from filmes where id='". $i ."'");
                        $filme = pg_fetch_row($rows);
                        echo 
                        '<div class="homepage-grid-container">
                            <div class="card">
                                <div class="card-information">
                                <img src="../images/' . $i .'.jpg" alt="1" style="width:200px" onclick="filme(' . $i . ')" value="' . $i . '">
                                <h3>' . $filme[0] . '</h3>
                                <h4>' . $filme[1] . '</h4> 
                                <h5>' . $sinopse[$i] . '</h5>
                                </div>
                            </div>
                        </div>';
                    }
                ?>
        </div>
    </div>

    <script type="text/javascript" src="../JS/menu.js"></script>
</body>
</html>