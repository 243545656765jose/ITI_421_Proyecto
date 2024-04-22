<?php

$conex = mysqli_connect('localhost', 'root', '', 'proyecto');
if (!$conex) {
    echo '<h1>Error al conectar a la base de datos: '.mysqli_connect_error().'</h1>';
} else {
}

return $conex;
