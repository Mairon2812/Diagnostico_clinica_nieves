<?php
// Comprobamos que se haya enviado el formulario
if(isset($_POST['submit'])) {
    // Comprobamos que se haya seleccionado un rol
    if(isset($_POST['rol'])) {
        // Redirigimos al usuario según el rol seleccionado
        $rol = $_POST['rol'];
        switch($rol) {
            case 'doctor':
                header('Location: frontend/login.php');
                break;
            case 'administrador':
                header('Location: frontend/login.php');
                break;
            case 'usuario':
                header('Location: frontend/login.php');
                break;
            default:
                // Si se selecciona un valor de rol no válido, se muestra un mensaje de error
                echo 'Rol no válido';
                break;
        }
    } else {
        // Si no se selecciona ningún rol, se muestra un mensaje de error
        echo 'Debe seleccionar un rol';
    }
}
?>