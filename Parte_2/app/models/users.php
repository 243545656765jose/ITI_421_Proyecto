<?php

function authenticate($username, $password)
{
    $conn = require $_SERVER['DOCUMENT_ROOT'].'/utils/database.php';
    $query = "SELECT * FROM usuario where user_name = '$username' AND password='$password'";
    $result = $conn->query($query);
    if ($result && $result->num_rows > 0) {
        $user = $result->fetch_assoc();

        return $user;
    } else {
        return false;
    }
}

function get_users()
{
    $conn = require $_SERVER['DOCUMENT_ROOT'].'/utils/database.php';
    $query = 'SELECT * FROM usuario';
    $result = $conn->query($query);

    $users = [];
    if ($result && $result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $users[] = $row;
        }
    }

    return $users;
}
function get_user_by_id($user_id)
{
    $conn = require $_SERVER['DOCUMENT_ROOT'].'/utils/database.php';
    $query = 'SELECT * FROM usuario WHERE id=?';
    $stmt = $conn->prepare($query);
    $stmt->bind_param('i', $user_id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result && $result->num_rows > 0) {
        $user = $result->fetch_assoc();

        return $user;
    } else {
        return null;
    }
}
function load_user_rides($user_id)
{
    $conn = require $_SERVER['DOCUMENT_ROOT'].'/utils/database.php';
    $query = 'SELECT * FROM rides WHERE id_user=?';
    $stmt = $conn->prepare($query);
    $stmt->bind_param('i', $user_id);
    $stmt->execute();
    $result = $stmt->get_result();
    $rides = [];
    if ($result && $result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $rides[] = $row;
        }

        return $rides;
    } else {
        return null;
    }
}
function load_user_rides_edit($ride_id)
{
    $conn = require $_SERVER['DOCUMENT_ROOT'].'/utils/database.php';
    $query = 'SELECT * FROM rides WHERE id=?';
    $stmt = $conn->prepare($query);
    $stmt->bind_param('i', $ride_id);
    $stmt->execute();
    $result = $stmt->get_result();
    if ($result && $result->num_rows > 0) {
        $ride_data = $result->fetch_assoc();

        return $ride_data;
    } else {
        return null;
    }
}
function load_rides()
{
    $conn = require $_SERVER['DOCUMENT_ROOT'].'/utils/database.php';
    $query = 'SELECT * FROM rides';
    $stmt = $conn->prepare($query);
    $stmt->execute();
    $result = $stmt->get_result();

    $rides = [];

    if ($result && $result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $rides[] = $row;
        }
    }

    return $rides;
}

function delete($user_id)
{
    $conn = require $_SERVER['DOCUMENT_ROOT'].'/utils/database.php';

    $stmt = $conn->prepare('DELETE FROM rides WHERE id=?');
    $stmt->bind_param('i', $user_id);
    $result = $stmt->execute();

    if ($result) {
        return true;
    } else {
        return false;
    }
}
