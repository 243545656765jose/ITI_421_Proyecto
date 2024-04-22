<?php
session_start();
require $_SERVER['DOCUMENT_ROOT'].'/models/users.php';

$username = $_SESSION['user']['user_name'];
$user_id = $_SESSION['user']['id'];
$user_data = load_user_rides($user_id);

?>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous">
    <link rel="stylesheet" href="/public/css/styles_pages.css">
    <link rel="stylesheet" href="/public/css/registration.css">
    <link rel="stylesheet" href="/public/css/dashboar.css">
    <script src="Javascript/rides.js"></script>
  </head>

  <body>
 
    