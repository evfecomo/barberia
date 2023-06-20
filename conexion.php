<?php
$servername = "localhost"; 
$username = "root"; 
$password = ""; 
$dbname = "barbershop"; 
try { 
    $pdo = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8", $username, $password); 
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
} catch(PDOException $e) {
    die("Error al conectar con la base de datos: " . $e->getMessage()); 
}
?>