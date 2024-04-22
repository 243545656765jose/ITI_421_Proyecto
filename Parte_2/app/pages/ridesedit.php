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
            <input type="text" placeholder="End" id="end_ride" name="end_ride" value="<?php echo isset($ride_details['end_ride']) ? $ride_details['end_ride'] : ''; ?>"><br>
        </div>
        <label for="description">Description</label><br>
        <textarea name="description" id="description" cols="80" rows="7"><?php echo isset($ride_details['description']) ? $ride_details['description'] : ''; ?></textarea>
        <br>
    </div>
    <hr class="line">
    <div class="formedit">
        <h2>When</h2>
        <div>
            <label for="departure">Departure</label><br>
            <input type="text" id="depature" name="depature" value="<?php echo isset($ride_details['depature']) ? $ride_details['depature'] : ''; ?>"><br>
            <label for="estimated_arrivad">Estimated Arrival</label><br>
            <input type="text" id="estimated_arrivad" name="estimated_arrivad" value="<?php echo isset($ride_details['estimated_arrivad']) ? $ride_details['estimated_arrivad'] : ''; ?>"><br>
            <input type="hidden" name="ride_id" value="<?php echo isset($ride_id) ? $ride_id : ''; ?>">

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
