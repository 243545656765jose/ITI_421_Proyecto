<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['from']) && isset($_POST['to'])) {
    $from = $_POST['from'];
    $to = $_POST['to'];
    $conn = require $_SERVER['DOCUMENT_ROOT'].'/utils/database.php';
    $query = 'SELECT * FROM rides WHERE start_ride=? AND end_ride=?';
    $stmt = $conn->prepare($query);
    $stmt->bind_param('ss', $from, $to);
    $stmt->execute();
    $result = $stmt->get_result();
    $rides = [];
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $rides[] = $row;
        }
    }
    echo json_encode($rides);
    $conn->close();
} else {
    echo json_encode([]);
}
