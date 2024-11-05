<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Procesar pago aquí
    
    // Después de procesar el pago, preguntar si desea cerrar la sesión
    echo '<form action="logout.php" method="post">
            <p>¿Desea continuar con su sesión iniciada o cerrar sesión?</p>
            <button type="submit" name="action" value="continuar">Continuar con sesión</button>
            <button type="submit" name="action" value="cerrar">Cerrar sesión</button>
          </form>';
}
?>
