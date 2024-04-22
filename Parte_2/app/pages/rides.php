<?php
require $_SERVER['DOCUMENT_ROOT'].'/shared/header.php';
?>

<div>
    <div class="container-fluid">
        <img class="img-fluid rounded" src="/public/img/StarCar.png" alt="imagenLogo">
    </div>
    <br>
    <div class="btn-group margen" role="group" aria-label="Basic example">
        <button type="button" class="btn btn-success" onclick="window.location.href='dashboard.php'">Dashoard</button>
        <button type="button" class="btn btn-success" onclick="window.location.href='rides.php'">Rides</button>
        <button type="button" class="btn btn-success" onclick="window.location.href='setting.php'">Settings</button>
    </div>
</div>

<div class="container">
    <h2 class="lefh2">Rides</h2>
    <h2>Welcome <samp><?php echo $username; ?></samp></h2>
    <img src="/public/img/StarCar.png" class="img30" alt="30">
</div>

<nav class="margen" aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item active"><a href="#">Dashboard </a></li>
        <li class="breadcrumb-item active"><a href="#">Rides </a></li>
        <li class="breadcrumb-item active">Edit</li>
    </ol>
</nav>

<form id="FormRide" action="/actions/user/newrides.php" method="post">
    <div class="forrides">
        <label for="ridename">Ride Name</label><br>
        <input type="text" placeholder="Name" id="ridename" name="ridename"><br>
        <div>
            <label for="starform">Start From</label><br>
            <input type="text" placeholder="Start From" id="starform" name="startform"><br>
            <label for="end">End</label><br>
            <input type="text" placeholder="End" id="end" name="end"><br>
        </div>
        <label for="description">Description</label><br>
        <textarea name="description" id="description" cols="80" rows="7"></textarea>
        <br>
    </div>

    <hr class="line">

    <div class="formedit">
    <div class="formedit">
    <h2>When</h2>
    <div>
        <label for="departure">Departure</label><br>
        <input type="text" id="departure" name="departure"><br>
        <label for="estimated">Estimated Arrival</label><br>
        <input type="text" id="estimated" name="estimated"><br>
    </div>

    <div class="form-check">
        <input class="form-check-input" type="radio" value="Monday" id="monday" name="day">
        <label class="form-check-label" for="monday"> Monday </label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" value="Tuesday" id="tuesday" name="day" checked>
        <label class="form-check-label" for="tuesday"> Tuesday </label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" value="Wednesday" id="wednesday" name="day">
        <label class="form-check-label" for="wednesday"> Wednesday </label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" value="Thursday" id="thursday" name="day">
        <label class="form-check-label" for="thursday"> Thursday </label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" value="Friday" id="friday" name="day">
        <label class="form-check-label" for="friday"> Friday </label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" value="Saturday" id="saturday" name="day">
        <label class="form-check-label" for="saturday"> Saturday </label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" value="Sunday" id="sunday" name="day">
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
