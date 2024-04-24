<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['user_id'])) {
    $user_id = $_POST['user_id'];
    $user_name = $_POST['user_name'];
    $speed_avange = $_POST['speed_avange'];
    $about_me = $_POST['adout_me'];
    $conn = require $_SERVER['DOCUMENT_ROOT'].'/utils/database.php';
    $query = 'UPDATE usuario SET user_name=?, speed_avange=?, adout_me=? WHERE id=?'; 
    $stmt = $conn->prepare($query);
    $stmt->bind_param('sssi', $user_name, $speed_avange, $about_me, $user_id);
    $stmt->execute();

    if ($stmt->affected_rows > 0) {
        echo 'User details updated successfully.';
    } else {
        echo 'Failed to update user details.';
    }
    $stmt->close();
    $conn->close();
} else {
    echo 'Error: Form data or user ID not provided.';
}
