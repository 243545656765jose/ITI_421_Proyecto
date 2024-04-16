<?php
require $_SERVER['DOCUMENT_ROOT'].'/shared/header.php';
?>
<div>
      <div class="container-fluid">
        <img
          class="img-fluid rounded"
          src="/public/img/StarCar.png"
          alt="imagenLogo"
        >
      </div>
      <br >
      <div class="btn-group margen" role="group" aria-label="Basic example">
        <button type="button" class="btn btn-success" onclick="window.location.href='dashboard.php'">Dashoard</button>
        <button type="button" class="btn btn-success" onclick="window.location.href='rides.php'">Rides</button>
        <button type="button" class="btn btn-success" onclick="window.location.href='setting.php'">Settings</button>
      </div>
    </div>
    <div class="container">
      <h2 class="lefh2">Rides</h2>
      <h2>Welcom <samp>User</samp></h2>
      <img src="/public/img/StarCar.png" class="img30" alt="30" >
    </div>
    <nav class="margen" aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item active"><a href="#">Dashboard </a></li>
        <li class="breadcrumb-item active"><a href="#">Rides </a></li>
        <li class="breadcrumb-item active" >Edit</li>
      </ol>
    </nav>
    <div class="forrides">
      <form action="formride" id="formride">
        <label for="ridename" >Ride Name</label><br>
        <input type="text" placeholder="Name" id="ridename" ><br >
        <div>
          <label for="starform">Star From</label><br>
          <input type="text" placeholder="last name" id="starform" ><br>
          <label for="end">End</label><br >
          <input type="text" placeholder="end" id="end" ><br >
        </div>
        <label for="decription">Description</label><br>
        <textarea name="decription" id="decription" cols="80" rows="7"></textarea>
        <br>
      </form>
    </div>
    <hr class="line" >

    <div class="formedit">
      <h2>When</h2>
      <form id="FormRide" class="foredit" action="submit" method="post">
        <div>
          <label for="depature">Depature</label><br >
          <input type="text" id="depature" ><br >
          <label for="estimated">Estimated Arrival</label><br >
          <input type="text" id="estimated"><br >
        </div>
      </form>
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="monday">
        <label class="form-check-label" for="monday"> Monday </label>
      </div>
      <div class="form-check">
        <input
          class="form-check-input"
          type="checkbox"
          value=""
          id="tuesday"
          checked
        >
        <label class="form-check-label" for="tuesday"> Tuesday </label>
      </div>
      <div class="form-check">
        <input
          class="form-check-input"
          type="checkbox"
          value=""
          id="wednesday"
        >
        <label class="form-check-label" for="wednesday"> Wednesday </label>
      </div>
      <div class="form-check">
        <input
          class="form-check-input"
          type="checkbox"
          value=""
          id="thursday"
        >
        <label class="form-check-label" for="thursday"> Thursday </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="friday" >
        <label class="form-check-label" for="friday"> Friday </label>
      </div>
      <div class="form-check">
        <input
          class="form-check-input"
          type="checkbox"
          value=""
          id="saturday"
        >
        <label class="form-check-label" for="saturday"> Saturday </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="sunday">
        <label class="form-check-label" for="sunday"> Sunday </label>
      </div>
    </div>
    <div class="centerdiv">
      <button class="btnCancel">Cancel</button>
      <button class="btnSave" type="submit">Save</button>
    </div>
    <script>verification()</script>

<?php
require $_SERVER['DOCUMENT_ROOT'].'/shared/footer.php';
?>