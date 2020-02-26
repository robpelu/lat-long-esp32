<?php

echo "<H1>Mini proyecto para el Taller de ESP32 UTEC</H1>";

echo "En la siguiente URL mediante un GET podemos subir las coordenadas en formato lat long de nuestro GPS:<br>";
echo "https://location-esp32.herokuapp.com/subir-lat-long.php?espid=Robert&lat=-34.2222&long=-54.111111<br>";
echo "Como hablamos, lo ideal seria usar un POST pero con el GET queda mas facil de usar y probar desde el navegador.<br>";
echo "<br>";
echo "Luego, mediante la un GET a la siguiente URL, podemos consultar la ultima posicion subida.<br>";
echo "El codigo PHP hace una redireccion al sitio de google maps, para mostrar en el mapa la ubicacion.<br>";
echo "https://location-esp32.herokuapp.com/ubicar.php?espid=Robert<br>";
echo "<br>";
echo "Lo que se les pide, es mediante la ESP32 y su GPS conectado, extraer la lat y long del string que recibe y<br>";
echo "armar una consulta GET para subir la ubicacion.<br>";
echo "Usar un espid unico y sin espacios o chars raros que puede dar problemas en la pagina o base de datos.<br>";
echo "<br>";
echo "Cualquier duda consulten.<br><br>";

?>
