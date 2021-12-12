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
    <script>
        if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
        }
    </script>

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

        <div class="Admin">
            <div class="btn">
                <h2>Adicionar Filmes</h2>
                <button class="open-button" onclick="openAddForm()">+</button>
            </div>

            <div class="btn">
                <h2>Remover Filmes</h2>
                <button class="open-button" onclick="openRemoveForm()">-</button>
            </div>
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

    <!-- Adicionar filmes -->

    <?php
        require('baseDados.php');
        if(isset($_POST['tituloNF'])){
            $query = "SELECT * FROM filmes";
            $resultados = pg_query($connection, $query);
            $numFilmes = pg_num_rows($resultados);

            $tituloNF = ($_POST['tituloNF']);
            $anoNF = ($_POST['anoNF']);
            $ator1NF = ($_POST['ator1NF']);
            $ator2NF = ($_POST['ator2NF']);
            $ator3NF = ($_POST['ator3NF']);
            $precoNF = ($_POST['precoNF']);
            $descontoNF = ($_POST['descontoNF']);

            $Addquery = "INSERT into filmes(titulo, ano, ator1, ator2, ator3, preco, desconto, id)
                        VALUES ('$tituloNF',
                                '$anoNF',
                                '$ator1NF',
                                '$ator2NF',
                                '$ator3NF',
                                '$precoNF',
                                '$descontoNF',
                                '$numFilmes'
                                )
            ";
            $novoFilme = pg_query($connection, $Addquery);
        } else {
    ?>

    <div class="form-popup" id="AddForm">
        <form action="homepageAdmin.php" method="POST" class="form-container">
            <h2>Adiciona um Filme!</h2>

            <label><b>Titulo</b></label>
            <input type="text" placeholder="Enter Titulo" name="tituloNF" required>

            <label><b>Ano</b></label>
            <input type="number" min="1900" max="2099" step="1" value="2021" name="anoNF" required>

            <label><b>Elenco: 1º Ator</b></label>
            <input type="text" placeholder="Enter 1º Ator" name="ator1NF" required>

            <label><b>Elenco: 2º Ator</b></label>
            <input type="text" placeholder="Enter 2º Ator" name="ator2NF" required>

            <label><b>Elenco: 3º Ator</b></label>
            <input type="text" placeholder="Enter 3º Ator" name="ator3NF" required>

            <label><b>Preço</b></label>
            <input type="number" placeholder="Enter preço" name="precoNF" required>

            <label><b>Desconto</b></label>
            <input type="number" placeholder="Enter desconto" name="descontoNF" required>

            <button type="submit" class="btnForm">Submeter</button>
            <button type="button" class="btnForm cancel" onclick="closeAddForm()">Cancelar</button>
        </form>
    </div>
    <?php
        }
    ?>

    <!-- Remover filmes -->

    <?php
        require('baseDados.php');
        if(isset($_POST['tituloRF'])){
            $query = "SELECT * FROM filmes";
            $resultados = pg_query($connection, $query);

            $tituloRF = ($_POST['tituloRF']);
            echo $tituloRF;

            $Remquery = "DELETE from filmes where titulo ='". $tituloRF ."'";
            $novoFilme = pg_query($connection, $Remquery);
        } else {
    ?>

    <div class="form-popup" id="RemoveForm">
        <form action="homepageAdmin.php" method="POST" class="form-container">
            <h2>Remove um Filme ;-;</h2>

            <label><b>Titulo</b></label>
            <input type="text" placeholder="Enter Titulo" name="tituloRF" required>

            <button type="submit" class="btnForm">Remover</button>
            <button type="button" class="btnForm cancel" onclick="closeRemoveForm()">Cancelar</button>
        </form>
    </div>
    <?php
        }
    ?>



    <script type="text/javascript" src="../JS/menu.js"></script>
    <script>
        function openAddForm() {
        document.getElementById("AddForm").style.display = "block";
        }

        function closeAddForm() {
        document.getElementById("AddForm").style.display = "none";
        }

        function openRemoveForm() {
        document.getElementById("RemoveForm").style.display = "block";
        }

        function closeRemoveForm() {
        document.getElementById("RemoveForm").style.display = "none";
        }
    </script>

</body>
</html>