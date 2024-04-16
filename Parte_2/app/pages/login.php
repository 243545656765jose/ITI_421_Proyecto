<?php

require $_SERVER['DOCUMENT_ROOT'].'/shared/header.php';
?>
<header>
      <div class="container-fluid text-center col-sm-6 offset-sm-3">
        <img class="img-fluid" src="/public/img/StarCar.png" alt="imagenLogo">
      </div>
    </header>
    <div class="container-fluid-center section-login">
      <h2 class="text-center">Login</h2>
      <div class="col">
        <label>Name</label>
        <input
          type="text"
          id="from"
          class="form-control"
          placeholder="Input text"
        ><br>
        <label>Password</label>
        <input
          type="password"
          id="pasword"
          class="form-control"
          placeholder="Input text"
        ><br>
        <p>
          Already an user?
          <samp><a href="/pages/registration.php">Registration</a></samp>
        </p>
        <button type="button" class="btn btn-success btn-lg">LOGIN</button>
      </div>
    </div>


<?php
require $_SERVER['DOCUMENT_ROOT'].'/shared/footer.php';
?>