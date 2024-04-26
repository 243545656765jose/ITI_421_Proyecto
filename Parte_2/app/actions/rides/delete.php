<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/models/users.php';
if (isset($_POST['ride_id'])) {
    $ride_id = $_POST['ride_id'];
    $success = delete($ride_id);
    if ($success) {
        echo 'Usuario eliminado con éxito.';
    } else {
        echo 'Error al eliminar el usuario.';
    }
} else {
    echo 'No se proporcionó el ID del usuario.';
}
header('Location: /pages/dashboard.php');
exit;
