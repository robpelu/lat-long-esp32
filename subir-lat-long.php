<?php

$servername = "ec2-54-197-34-207.compute-1.amazonaws.com";
$database = "daer4tkav43vda";
$username = "wcnixkgpgenwpj";
$password = "cedbc8cac210d374fb88bcfb21b5dfc31c1034f0567a88fd569a4326fd1e0373";

$espid = $_GET["espid"]; //igual a nombre en consulta "select"
$lat = $_GET["lat"]; //igual a nombre en consulta "select"
$long = $_GET["long"]; //igual a nombre en consulta "select"

// Conectando y seleccionado la base de datos  
$dbconn = pg_connect("host=" . $servername . " dbname=" . $database . " user=". $username . " password=" . $password)
    or die('Error - No se ha podido conectar: ' . pg_last_error());

// Realizando una consulta SQL
$query = "insert into location (espid, lat, long, timestamp) values (". $espid . "," . $lat . "," . $long . ", 01/01/2020 19:00)";
$result = pg_query($query) or die('El Insert ha fallado: ' . pg_last_error());

echo "Insert exitoso !!";

// Liberando el conjunto de resultados
pg_free_result($result);

// Cerrando la conexión
pg_close($dbconn);

?>
