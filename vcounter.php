<?php
// Definimos el nombre del archivo de texto donde guardaremos las visitas
$archivo = "visitas.txt";
// Abrimos el archivo en modo lectura
$f = fopen($archivo, "r");
// Leemos el contenido del archivo
$visitas = fread($f, filesize($archivo));
// Cerramos el archivo
fclose($f);
// Incrementamos el número de visitas en uno
$visitas++;
// Abrimos el archivo en modo escritura
$f = fopen($archivo, "w");
// Escribimos el nuevo número de visitas en el archivo
fwrite($f, $visitas);
// Cerramos el archivo
fclose($f);
// Mostramos el número de visitas como respuesta
echo $visitas;
?>
