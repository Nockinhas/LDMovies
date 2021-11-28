<?php

$servername= "dbname=postgres user=postgres password=postgres host=localhost port=5432";
$connection = pg_connect($servername);
if (!$connection){
    die("Erro na ligacao");
}

$username = $_POST['Username'];
$password = $_POST['Password'];

echo $username;
echo $password;

/* $resultados= pg_query($connection, "select * from administrador") or die;
$resultados= pg_fetch_all($resultados);
foreach($resultados as $linha){
    print $linha['username'] . " " . $linha['password'];
    print "\n";
} */

/* $resultados = pg_query($connection, "delete from administrador where username='Jose'");
print pg_affected_rows($resultados);  */

$resultados = pg_query($connection, "insert into administrador values ('$username' , '$password')");

//echo "Ligacao estabelecida!";    // do something herepg_close($connection);
pg_close($connection);
?>