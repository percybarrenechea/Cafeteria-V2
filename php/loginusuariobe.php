<?php
session_start();
include "conexionbe.php";

// Obtener datos del formulario
$correo = $_POST['correo'];
$contrasena = $_POST['contrasena'];
$contrasena = hash('sha512', $contrasena);  // Encriptar la contraseña

// Validar que el correo y la contraseña coincidan
$validar_login = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo='$correo' and contrasena='$contrasena'");

if (mysqli_num_rows($validar_login) > 0) {
    // Si el usuario es válido, almacenar el correo en la sesión
    $_SESSION['usuario'] = $correo;
    echo '
        <script>
            // Almacenar el correo del usuario en sessionStorage
            sessionStorage.setItem("usuario", "' . $correo . '");
            window.location = "../boleta.html";  // Redirigir a boleta.html
        </script>
    ';
    exit();
} else {
    echo '
        <script>
            alert("Usuario no existe, por favor verifique los datos introducidos");
            window.location = "../cafeteria.php";  // Redirigir de vuelta al login
        </script>
    ';
    exit();
}
?>
