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
      <br>
      <div class="btn-group margen" role="group" aria-label="Basic example">
        <button type="button" class="btn btn-success" onclick="window.location.href='dashboard.php'">Dashoard</button>
        <button type="button" class="btn btn-success" onclick="window.location.href='rides.php'">Rides</button>
        <button type="button" class="btn btn-success" onclick="window.location.href='setting.php'">Settings</button>
      </div>
    </div>
    <div class="container">
      <h2>Welcom <samp>User</samp></h2>
      <img src="/public/img/StarCar.png" class="img30" alt="30">
    </div>
    <nav class="margen" aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Dashboard </a></li>
      </ol>
    </nav>
    <div>
      <h2 class="h2">My rides</h2>
    </div>
    <div class="table-responsive divmof">
      <h2>Yoy current list rides</h2>
      <table class="table table-bordered border-black">
        <thead class="table-dark">
          <tr>
            <th scope="col">#</th>
            <th scope="col">User</th>
            <th scope="col">Start</th>
            <th scope="col">end</th>
            <th scope="col">Information</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>Jose</td>
            <td>San Francisco</td>
            <td>Alajuela</td>
            <td>
              <a
                href="rides.html"
                class="link-success link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover font" onclick="enablebtn() ">
                View</a
              >
            </td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>Juana</td>
            <td>Florencia</td>
            <td>Fortuna</td>
            <td>
              <a
                href=""
                class="link-success link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover font"
              >
                View</a
              >
            </td>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td>Thomas</td>
            <td>Nicaragua</td>
            <td>Costa Rica</td>
            <td>
            <a
                href=""
                class="link-success link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover font-center">View</a>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
<?php
require $_SERVER['DOCUMENT_ROOT'].'/shared/footer.php';
?>