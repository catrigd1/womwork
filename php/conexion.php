
<?php
//---Conexión de BD---//

$servername = "127.0.0.1"; // Nombre/IP del servidor
$database = "paginaww"; // Nombre de la BBDD
$username = "root@localhost"; // Nombre del usuario
$password = ""; // Contraseña del usuario
// Creamos la conexión
$con = mysqli_connect($servername, $username, $password, $database);
// Comprobamos la conexión
if (!$con) {
    die("La conexión ha fallado: " . mysqli_connect_error());
}
echo "Conexión satisfactoria";
mysqli_close($con);

?>