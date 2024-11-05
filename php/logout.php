<?php
session_start();
if ($_POST['action'] == 'cerrar') {
    session_destroy();  // Cerrar sesión
    header("Location: index.html");
    exit();
} else {
    header("Location: index.html"); // Continuar con sesión
    exit();
}
?>
