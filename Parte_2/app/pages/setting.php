
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
      <h2>Welcom <samp>User</samp></h2>
      <img src="/public/img/StarCar.png" class="img30" alt="30" >
    </div>
    <nav class="margen" aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item active"><a href="/pages/dashboard.php">Dashboard </a></li>
        <li class="breadcrumb-item active" >Settings</li>
      </ol>
    </nav>
    <div class="formsenttings">
      <form id="formsettings" action="formsettings">
        <label for="fullname">Full Name</label><br >
        <input type="text" placeholder="Name" id="fullname" ><br >
        <label for="speedavange">Speed Avange</label><br >
        <input type="text" placeholder="speed avange" id="speedavange" ><br >
        <label for="obiutme">Obout Me</label><br >
        <textarea name="obiutme" id="obiutme" cols="80" rows="7" ></textarea>
        <br >
        <div>
          <button class="btnCancel">Cancel</button>
          <button class="btnSave" type="submit">Save</button>
        </div>
      </form>
    </div>
    
<?php
require $_SERVER['DOCUMENT_ROOT'].'/shared/footer.php';
?>