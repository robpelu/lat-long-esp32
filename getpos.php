<? php

      // esp32/pepito.php?nombre=Robert pepe
    
$servername = "ec2-3-230-106-126.compute-1.amazonaws.com";
$database = "d98hug03gf3jbf";
$username = "admvldptvsgixj";
$password = "dda02d15d6dbdf29208030b308018406237112162a8b4d65acbb0c185c83798f";

espid = $_GET['espid'];


// Conectando y seleccionado la base de datos  
$dbconn = pg_connect("host=" . $servername . " dbname=" . $database . " user=". $username . " password=" . $password)
    or die('No se ha podido conectar: ' . pg_last_error());

// Realizando una consulta SQL
$query = "SELECT * FROM location where espid like '" . $espid . "' " ;
echo $query;
$result = pg_query($query) or die('La consulta fallo: ' . pg_last_error());

while($row = pg_fetch_array($result, null, PGSQL_ASSOC)) {
         $myArray[] = $row;
}
echo json_encode($myArray);

// Liberando el conjunto de resultados
pg_free_result($result);

// Cerrando la conexión
pg_close($dbconn);

?>
