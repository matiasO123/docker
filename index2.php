<?php
$mysqli = new mysqli("mysql-server", "root", "clave123", "practica");

if ($mysqli->connect_error) {
    die("Error de conexión: " . $mysqli->connect_error);
}

$resultado = $mysqli->query("SELECT * FROM usuarios");

echo "<h1>Usuarios</h1><ul>";
while ($fila = $resultado->fetch_assoc()) {
    echo "<li>" . $fila["nombre"] . " (" . $fila["email"] . ")</li>";
}
echo "</ul>";

$mysqli->close();
?>
