<?php
require $_SERVER['DOCUMENT_ROOT'].'/shared/header.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['ride_id'])) {
    $ride_id = $_POST['ride_id'];
    $ride_details = load_user_rides_edit($ride_id);
} else {
    $ride_details = null;
}
?>

<div>
    <div class="container-fluid">
        <img class="img-fluid rounded" src="/public/img/StarCar.png" alt="imagenLogo">
    </div>
    <br>
    <div class="btn-group margen" role="group" aria-label="Basic example">
        <button type="button" class="btn btn-success" onclick="window.location.href='dashboard.php'">Dashboard</button>
        <button type="button" class="btn btn-success" onclick="window.location.href='rides.php'">Rides</button>
        <button type="button" class="btn btn-success" onclick="window.location.href='setting.php'">Settings</button>
    </div>
</div>
<div class="container">
    <h2 class="lefh2">Edit Ride</h2>
    <h2>Welcome <samp><?php echo $username; ?></samp></h2>
    <img src="/public/img/StarCar.png" class="img30" alt="30">
</div>
<nav class="margen" aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
        <li class="breadcrumb-item"><a href="#">Rides</a></li>
        <li class="breadcrumb-item active">Edit</li>
    </ol>
</nav>
<form id="FormRide" action="/actions/rides/edit.php" method="post">
    <div class="forrides">
        <label for="ridename">Ride Name</label><br>
        <input type="text" placeholder="Name" id="user_name" name="user_name" value="<?php echo isset($ride_details['user_name']) ? $ride_details['user_name'] : ''; ?>"><br>
        <div>
            <label for="starform">Start From</label><br>
            <input type="text" placeholder="Start From" id="start_ride" name="start_ride" value="<?php echo isset($ride_details['start_ride']) ? $ride_details['start_ride'] : ''; ?>"><br>
            <label for="end">End</label><br>
            <input type="text" placeholder="End" id="end_ride" name="end_ride" value="<?php echo isset($ride_details['end_ride']) ? $ride_details['end_ride'] : ''; ?>"  ><br>
        </div>
        <label for="description">Description</label><br>
        <textarea name="description" id="description" cols="80" rows="7"><?php echo isset($ride_details['description']) ? $ride_details['description'] : ''; ?></textarea>
        <br>
    </div>
    <hr class="line">
    <div class="formedit">
        <h2>When</h2>
        <div class="col">
    <label for="depature" class="form-label">Hora de Salida</label>
    <input type="time" class="form-control" id="depature" name="depature" value="<?php echo isset($ride_details['depature']) ? $ride_details['depature'] : '10:00'; ?>">
    <label for="arrival" class="form-label">Hora Estimada de Llegada</label>
    <input type="time" class="form-control" id="estimated_arrivad" name="estimated_arrivad" value="<?php echo isset($ride_details['estimated_arrivad']) ? $ride_details['estimated_arrivad'] : '12:00'; ?>">
</div>

            <input type="hidden" name="ride_id" value="<?php echo isset($ride_id) ? $ride_id : ''; ?>">
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
</div>

    <div class="centerdiv">
        <button class="btnCancel">Cancel</button>
        <button class="btnSave" type="submit">Save</button>
    </div>
</form>
<script>verification()</script>

<?php
require $_SERVER['DOCUMENT_ROOT'].'/shared/footer.php';
?>
