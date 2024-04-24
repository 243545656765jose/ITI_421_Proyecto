
<?php
require $_SERVER['DOCUMENT_ROOT'].'/models/users.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['ride_id'])) {
    $ride_id = $_POST['ride_id'];
    $ride_details = load_user_rides_edit($ride_id);
} else {
    $ride_details = null;
}
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
<a href="index.php" class="btn btn-success">Principal</a>
<body>

<div class="container">
    <h2 class="lefh2">view Ride</h2>
    <h2>Welcome <samp></samp></h2>
    <img src="/public/img/StarCar.png" class="img30" alt="30">
</div>
<nav class="margen" aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
        <li class="breadcrumb-item"><a href="#">Rides</a></li>
        <li class="breadcrumb-item active">View</li>
    </ol>
</nav>
<form id="FormRide" action="" method="post">
    <div class="forrides">
        <label for="ridename">Ride Name</label><br>
        <input type="text" placeholder="Name" id="user_name" name="user_name" value="<?php echo isset($ride_details['user_name']) ? $ride_details['user_name'] : ''; ?>"readonly><br>
        <div>
            <label for="starform">Start From</label><br>
            <input type="text" placeholder="Start From" id="start_ride" name="start_ride" value="<?php echo isset($ride_details['start_ride']) ? $ride_details['start_ride'] : ''; ?>"readonly><br>
            <label for="end">End</label><br>
            <input type="text" placeholder="End" id="end_ride" name="end_ride" value="<?php echo isset($ride_details['end_ride']) ? $ride_details['end_ride'] : ''; ?>"readonly><br>
        </div>
        <label for="description">Description</label><br>
        <textarea name="description" id="description" cols="80" rows="7"><?php echo isset($ride_details['description']) ? $ride_details['description'] : ''; ?>></textarea>
        <br>
    </div>
    <hr class="line">
    <div class="formedit">
        <h2>When</h2>
        <div>
            <label for="departure">Departure</label><br>
            <input type="text" id="depature" name="depature" value="<?php echo isset($ride_details['depature']) ? $ride_details['depature'] : ''; ?>"readonly><br>
            <label for="estimated_arrivad">Estimated Arrival</label><br>
            <input type="text" id="estimated_arrivad" name="estimated_arrivad" value="<?php echo isset($ride_details['estimated_arrivad']) ? $ride_details['estimated_arrivad'] : ''; ?>"readonly><br>
            <input type="hidden" name="ride_id" value="<?php echo isset($ride_id) ? $ride_id : ''; ?>"readonly>
        </div>
    </div>
    <div class="form-check">
    <input class="form-check-input" type="radio" value="Monday" id="monday" name="day" <?php echo isset($ride_details['day']) && $ride_details['day'] === 'Monday' ? 'checked' : ''; ?>>
    <label class="form-check-label" for="monday"> Monday </label>
</div>
<div class="form-check">
    <input class="form-check-input" type="radio" value="Tuesday" id="tuesday" name="day" <?php echo isset($ride_details['day']) && $ride_details['day'] === 'Tuesday' ? 'checked' : ''; ?>>
    <label class="form-check-label" for="tuesday"> Tuesday </label>
</div>
<div class="form-check">
    <input class="form-check-input" type="radio" value="Wednesday" id="wednesday" name="day" <?php echo isset($ride_details['day']) && $ride_details['day'] === 'Wednesday' ? 'checked' : ''; ?>>
    <label class="form-check-label" for="wednesday"> Wednesday </label>
</div>
<div class="form-check">
    <input class="form-check-input" type="radio" value="Thursday" id="thursday" name="day" <?php echo isset($ride_details['day']) && $ride_details['day'] === 'Thursday' ? 'checked' : ''; ?>>
    <label class="form-check-label" for="thursday"> Thursday </label>
</div>
<div class="form-check">
    <input class="form-check-input" type="radio" value="Friday" id="friday" name="day" <?php echo isset($ride_details['day']) && $ride_details['day'] === 'Friday' ? 'checked' : ''; ?>>
    <label class="form-check-label" for="friday"> Friday </label>
</div>
<div class="form-check">
    <input class="form-check-input" type="radio" value="Saturday" id="saturday" name="day" <?php echo isset($ride_details['day']) && $ride_details['day'] === 'Saturday' ? 'checked' : ''; ?>>
    <label class="form-check-label" for="saturday"> Saturday </label>
</div>
    <div class="form-check">
        <input class="form-check-input" type="radio" value="Sunday" id="sunday" name="day" <?php echo isset($ride_details['day']) && $ride_details['day'] === 'Sunday' ? 'checked' : ''; ?>>
        <label class="form-check-label" for="sunday"> Sunday </label>
</div>
</form>
<script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous" ></script>
</body>
</html>