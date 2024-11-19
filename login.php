<?php
session_start();
$conn = new mysqli('localhost', 'root', '', 'u379243797_formulario');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM usuarios WHERE username = '$username' AND password = '$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $_SESSION['username'] = $username;
        echo "Inicio de sesión exitoso. ¡Bienvenido, $username!";
    } else {
        echo "Usuario o contraseña incorrectos.";
    }
}
?>
