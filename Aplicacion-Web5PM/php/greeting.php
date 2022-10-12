<?php
/*
Autor:Fernando Alonso Fernandez Martinez
Descripcion:Componente los datos de formulario
Fecha:12 de Octubre
*/

//Obtener nombre del formulario


$nombre = $_GET['name'];
$edad = $_GET['edad'];
$telefono = $_GET['numero'];

echo "<hr>";

echo " <h1> Saluditos a el $nombre </h1>";

echo " <h1>Ahora mismo tienes $edad años pero espero que cuplas otros 35 años mas =D </h1>";

echo "por cierto  no le des tu número a extraños $telefono ";

echo "<hr>";

echo "<a href='../html/greetingFrorm.html'>Regresar</a>";
?>