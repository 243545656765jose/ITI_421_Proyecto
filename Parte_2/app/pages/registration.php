<?php
require $_SERVER['DOCUMENT_ROOT'].'/shared/header.php';
?>
<div class="row">
      <div class="col-5 col-md-3 center1">
        <img
          src="/public/img/StarCar.png"
          class="img-fluid rounded"
          alt="image_logo"
        >
      </div>
    </div>
    <div class="divform">
      <form id="UserRegistration" action="UserRegistration">
        <label for="firstName">First Name</label><br>
        <input type="text" id="firstName" placeholder="Name"><br>
        <label for="lastName">Last Name</label><br>
        <input type="text" id="lastName" placeholder="Last Name"><br>
        <label for="phone">Phone</label><br>
        <input type="text" id="phone" placeholder="Phone Number"><br>
        <label for="username">Username</label><br>
        <input type="text" id="username" placeholder="Username"><br>
        <label for="password">Password</label><br>
        <input type="password" id="password" placeholder="Password"><br>
        <label for="confirmPassword">Confirmation</label><br>
        <input type="password" id="confirmPassword" placeholder="Confirm Password"><br><br>
        <p>
          Already a user? <samp><a href="/pages/login.php">Login Here</a></samp>
        </p>
        <button type="submit" class="btn btn-success btn-lg">Enviar</button>
      </form>
    </div>
<?php
require $_SERVER['DOCUMENT_ROOT'].'/shared/footer.php';
?>