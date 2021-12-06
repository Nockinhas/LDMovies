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
                    <h2>Pulp Fiction</h2> 
                    <h4>TOTAL</h4> 
                    <h3><b>1.50€</b></h3> 
                </div>
            </div>
            <div class="container">
                <h3>Sinopse</h3>
                <br>
                <p>Pulp Fiction é um filme estadunidense de 1994, do gênero drama policial, escrito e dirigido por Quentin Tarantino, com roteiro dele e Roger Avary.

                    Dirigido de uma forma altamente estilizada, Pulp Fiction narra três histórias diferentes, todavia entrelaçadas, sobre dois assassinos profissionais, o gângster que os chefia e sua esposa, um pugilista pago para perder uma luta e um casal assaltando um restaurante, em Los Angeles na década de 1990. Um tempo considerável do filme é destinado a conversas e monólogos que revelam as perspectivas de vida e o senso de humor das personagens. O roteiro, assim como na maioria dos demais trabalhos de Quentin Tarantino, é apresentado fora da ordem cronológica.
                    
                    O filme, cujo título é uma referência às revistas pulp, populares durante a metade do século XX e caracterizadas pela sua violência gráfica, é conhecido por seus diálogos ricos e ecléticos, mistura irônica de humor e violência, narrativa não-linear, uma série de alusões a outras produções cinematográficas e referências à cultura pop. Pulp Fiction foi indicado a sete Óscares, incluindo melhor filme; Tarantino e Avary ganharam o prêmio de melhor roteiro original. Também venceu a Palma de Ouro no Festival de Cannes de 1994. Um sucesso comercial e de críticas, Pulp Fiction revitalizou a carreira de seu protagonista, John Travolta (o qual recebeu uma indicação ao Oscar de melhor ator), assim como as das coestrelas Samuel L. Jackson (indicado ao Oscar de melhor ator coadjuvante) e Uma Thurman (indicada ao Oscar de melhor atriz coadjuvante).
                </p>
            </div>
            <div class="container">
                <h3>Eleco</h3>
            </div>
            <div class="container">
                <h3>Semelhantes</h3>
            </div>
            <div class="container">
                <h3>Comentários</h3>

                <form action="" method="POST" class="filme-container-form">
                    <input type="text" name="comentário" placeholder="Escreve aqui um comentário">
                    <br>
                    <input type="submit" value="Enviar">
                </form>

                <div class="coment">
                    <h4>Username</h4>
                    <p>algum comentário aqui</p>
                </div>
                <div class="coment">
                    <h4>Username</h4>
                    <p>algum comentário aqui</p>
                </div>
                <div class="coment">
                    <h4>Username</h4>
                    <p>algum comentário aqui</p>
                </div>
                <div class="coment">
                    <h4>Username</h4>
                    <p>algum comentário aqui</p>
                </div>
                <div class="coment">
                    <h4>Username</h4>
                    <p>algum comentário aqui</p>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript" src="../JS/menu.js"></script>
</body>
</html>