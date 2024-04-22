<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['ride_id'])) {
    $ride_id = $_POST['ride_id'];
    $new_ride_details = [
        'user_name' => $_POST['user_name'],
        'start_ride' => $_POST['start_ride'],
        'end_ride' => $_POST['end_ride'],
        'description' => $_POST['description'],
        'depature' => $_POST['depature'],
        'estimated_arrivad' => $_POST['estimated_arrivad'],
    ];
    $conn = require $_SERVER['DOCUMENT_ROOT'].'/utils/database.php';
    $query = 'UPDATE rides SET user_name=?, start_ride=?, end_ride=?, description=?, depature=?, estimated_arrivad=? WHERE id=?';
    $stmt = $conn->prepare($query);
    $stmt->bind_param('sssssii', $new_ride_details['user_name'], $new_ride_details['start_ride'], $new_ride_details['end_ride'], $new_ride_details['description'], $new_ride_details['depature'], $new_ride_details['estimated_arrivad'], $ride_id);
    $stmt->execute();

    if ($stmt->affected_rows > 0) {
        echo 'Ride updated successfully.';
    } else {
        echo 'Failed to update ride.';
    }
    $stmt->close();
    $conn->close();
} else {
    echo 'Error: Form data or ride ID not provided.';
}
header('Location: /pages/dashboard.php');
exit;
