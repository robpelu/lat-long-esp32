<?php

$servername = "ec2-54-197-34-207.compute-1.amazonaws.com";
$database = "daer4tkav43vda";
$username = "wcnixkgpgenwpj";
$password = "cedbc8cac210d374fb88bcfb21b5dfc31c1034f0567a88fd569a4326fd1e0373";

$espid = $_GET["espid"]; //igual a nombre en consulta "select"


// Conectando y seleccionado la base de datos  
$dbconn = pg_connect("host=" . $servername . " dbname=" . $database . " user=". $username . " password=" . $password)
    or die('Error - No se ha podido conectar: ' . pg_last_error());

// Realizando una consulta SQL
$query = "select * from location where espid = '" . $espid . "'" ;
$result = pg_query($query) or die('La consulta fallo: ' . pg_last_error());

$row = pg_fetch_array($result, null, PGSQL_ASSOC);
$lat = $row["lat"];
$long = $row["long"];

//echo json_encode($myArray);
$redir = "Location: http://maps.google.com/maps?q=" . $lat . "," . $long;
header($redir);


// Liberando el conjunto de resultados
pg_free_result($result);

// Cerrando la conexión
pg_close($dbconn);

?>
