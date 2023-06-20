<?php
require_once 'conexion.php';

if($_SERVER["REQUEST_METHOD"] == "POST")
{
$nombre_completo = limpiarDatos($_POST["name"]);
$email = limpiarDatos($_POST["email"]);
$telefono = limpiarDatos($_POST["phoneNumber"]);
$mensaje = limpiarDatos($_POST["mensaje"]);
$tipo_contacto = limpiarDatos($_POST["contacto"]);
$horario = limpiarDatos($_POST["horario"]);
$notificaciones = isset($_POST["recibir_novedades"]) ? 1 : 0;
$sql = "INSERT INTO contactenos (nombre_completo, email, telefono, mensaje, tipo_contacto, horario, notificaciones) VALUES(?, ?, ?, ?, ?, ?, ?)";
$stmt = $pdo->prepare($sql);
$stmt->execute([$nombre_completo, $email, $telefono, $mensaje, $tipo_contacto, $horario, $notificaciones]);
echo '<script>alert("Su cita ha sido registrada");</script>'; 
echo '<script>window.location.href = "index.html";</script>'; 
exit();
}
function limpiarDatos($data) {
    $data = trim($data); 
    $data = stripslashes($data); 
    $data = htmlspecialchars($data); 
    return $data;
}
?>