<!-- 
    Descripcion: Dias vividos
    Autor: Fernando Alonso Fernandez Martinez
    Fecha: 24/10/2022
 --> 
 <?php
 $edad=$_GET['edad'];
 if(isset($_GET['edad'])){
    $vividos=$edad*365;
    echo"<h3 style='text-aling;center;'> Los dias vividos son $vividos</h3> ";
 }
 ?>
