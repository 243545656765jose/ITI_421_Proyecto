<?php

require_once $_SERVER['DOCUMENT_ROOT'].'/models/users.php';

if ($_POST['username'] && $_POST['password']) {
    $result = authenticate($_POST['username'], $_POST['password']);

    if ($result) {
        session_start();
        $_SESSION['user'] = $result;
        header('Location: /pages/dashboard.php');
    } else {
        header('Location: /pages/login.php');
    }
} else {
    header('Location: /pages/login.php');
}
