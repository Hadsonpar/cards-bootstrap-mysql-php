<?php
    $servername = "localhost"; //Servidor web Apache  
    $username = "root"; //Usuario
    $password = ""; //Password
    $dbname = "demos";//Nombre de la base datos
    $conn = mysqli_connect($servername, $username, $password, $dbname) or 
    die("Connection failed: " . mysqli_connect_error());
?>