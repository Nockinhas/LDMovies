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

            <h2 class="homepage-títuloFilmes">Filmes</h2>
            <img src="../images/Icons/list.png" alt="list" class="homepage-list" width="22px" height="auto">

        <div class="homepage-grid">
            <div class="homepage-grid-container">
                <div class="card">
                    <img src="../images/1.jpg" alt="1" style="width:100%">
                    <div class="card-information">
                    <h3>Pulp Fiction</h3> 
                    <h4>1994 ‧ Crime/Drama ‧ 2h 34m</h4> 
                    <h5>Os caminhos de vários criminosos se cruzam nestas três histórias de Quentin Tarantino. 
                    Um pistoleiro se apaixona pela mulher...</h5> 
                    </div>
                </div>
            </div>
            <div class="homepage-grid-container">
                <div class="card">
                    <img src="../images/1.jpg" alt="1" style="width:100%">
                    <div class="card-information">
                    <h3>Pulp Fiction</h3> 
                    <h4>1994 ‧ Crime/Drama ‧ 2h 34m</h4> 
                    <h5>Os caminhos de vários criminosos se cruzam nestas três histórias de Quentin Tarantino. 
                    Um pistoleiro se apaixona pela mulher...</h5> 
                    </div>
                </div>
            </div>
            <div class="homepage-grid-container">
                <div class="card">
                    <img src="../images/1.jpg" alt="1" style="width:100%">
                    <div class="card-information">
                    <h3>Pulp Fiction</h3> 
                    <h4>1994 ‧ Crime/Drama ‧ 2h 34m</h4> 
                    <h5>Os caminhos de vários criminosos se cruzam nestas três histórias de Quentin Tarantino. 
                    Um pistoleiro se apaixona pela mulher...</h5> 
                    </div>
                </div>
            </div>
            <div class="homepage-grid-container">
                <div class="card">
                    <img src="../images/1.jpg" alt="1" style="width:100%">
                    <div class="card-information">
                    <h3>Pulp Fiction</h3> 
                    <h4>1994 ‧ Crime/Drama ‧ 2h 34m</h4> 
                    <h5>Os caminhos de vários criminosos se cruzam nestas três histórias de Quentin Tarantino. 
                    Um pistoleiro se apaixona pela mulher...</h5> 
                    </div>
                </div>
            </div>

            <div class="homepage-grid-container">
                <div class="card">
                    <img src="../images/1.jpg" alt="1" style="width:100%">
                    <div class="card-information">
                    <h3>Pulp Fiction</h3> 
                    <h4>1994 ‧ Crime/Drama ‧ 2h 34m</h4> 
                    <h5>Os caminhos de vários criminosos se cruzam nestas três histórias de Quentin Tarantino. 
                    Um pistoleiro se apaixona pela mulher...</h5> 
                    </div>
                </div>
            </div>
            <div class="homepage-grid-container">
                <div class="card">
                    <img src="../images/1.jpg" alt="1" style="width:100%">
                    <div class="card-information">
                    <h3>Pulp Fiction</h3> 
                    <h4>1994 ‧ Crime/Drama ‧ 2h 34m</h4> 
                    <h5>Os caminhos de vários criminosos se cruzam nestas três histórias de Quentin Tarantino. 
                    Um pistoleiro se apaixona pela mulher...</h5> 
                    </div>
                </div>
            </div>
            <div class="homepage-grid-container">
                <div class="card">
                    <img src="../images/1.jpg" alt="1" style="width:100%">
                    <div class="card-information">
                    <h3>Pulp Fiction</h3> 
                    <h4>1994 ‧ Crime/Drama ‧ 2h 34m</h4> 
                    <h5>Os caminhos de vários criminosos se cruzam nestas três histórias de Quentin Tarantino. 
                    Um pistoleiro se apaixona pela mulher...</h5> 
                    </div>
                </div>
            </div>
            <div class="homepage-grid-container">
                <div class="card">
                    <img src="../images/1.jpg" alt="1" style="width:100%">
                    <div class="card-information">
                    <h3>Pulp Fiction</h3> 
                    <h4>1994 ‧ Crime/Drama ‧ 2h 34m</h4> 
                    <h5>Os caminhos de vários criminosos se cruzam nestas três histórias de Quentin Tarantino. 
                    Um pistoleiro se apaixona pela mulher...</h5> 
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript" src="../JS/menu.js"></script>
</body>
</html>