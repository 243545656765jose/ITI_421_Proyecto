<?php

session_start();
$user_id = $_SESSION['user']['id'];
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $conn = require $_SERVER['DOCUMENT_ROOT'].'/utils/database.php';

    $ridename = $_POST['ridename'];
    $starform = $_POST['startform'];
    $end = $_POST['end'];
    $description = $_POST['description'];
    $depature = $_POST['depature'];
    $estimated = $_POST['estimated'];
    $day = $_POST['day'];

    $sql = "INSERT INTO rides (user_name, start_ride, end_ride, description, depature,estimated_arrivad,day,id_user) 
            VALUES ('$ridename', '$starform', '$end', '$description', '$depature','$estimated','$day',' $user_id')";

    if ($conn->query($sql) === true) {
        $_SESSION['registro_message'] = 'Nuevo registro insertado exitosamente';
        header('Location: /pages/rides.php');
        exit;
    } else {
        $_SESSION['registro_message'] = 'Error al insertar registro: '.$conn->error;
        header('Location: /pages/dashboard.php');
        exit;
    }
}
