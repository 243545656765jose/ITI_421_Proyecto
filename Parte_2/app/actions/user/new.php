<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $conn = require $_SERVER['DOCUMENT_ROOT'].'/utils/database.php';

    $firstName = $_POST['first_name'];
    $lastName = $_POST['last_name'];
    $phone = $_POST['phone'];
    $username = $_POST['user_name'];
    $password = $_POST['password'];

    $sql = "INSERT INTO usuario (first_name, last_name, phone, user_name, password) 
            VALUES ('$firstName', '$lastName', '$phone', '$username', '$password')";

    if ($conn->query($sql) === true) {
        $_SESSION['registro_message'] = 'Nuevo registro insertado exitosamente';
        header('Location: /pages/registration.php');
        exit;
    } else {
        $_SESSION['registro_message'] = 'Error al insertar registro: '.$conn->error;
        header('Location: /pages/registration.php');
        exit;
    }
}
