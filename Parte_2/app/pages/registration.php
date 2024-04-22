<?php
require $_SERVER['DOCUMENT_ROOT'].'/shared/header.php';
?>

<div class="row">
    <div class="col-5 col-md-3 center1">
        <img src="/public/img/StarCar.png" class="img-fluid rounded" alt="image_logo">
    </div>
</div>

<div class="divform">
    <script src="funciones.js"></script>
    <form id="UserRegistration" action="/actions/user/new.php" method="post">
        <label for="first_name">First Name</label><br>
        <input type="text" id="first_name" name="first_name" placeholder="Name"><br>
        <label for="last_name">Last Name</label><br>
        <input type="text" id="last_name" name="last_name" placeholder="Last Name"><br>
        <label for="phone">Phone</label><br>
        <input type="text" id="phone" name="phone" placeholder="Phone Number"><br>
        <label for="user_name">Username</label><br>
        <input type="text" id="user_name" name="user_name" placeholder="Username"><br>
        <label for="password">Password</label><br>
        <input type="password" id="password" name="password" placeholder="Password"><br>
        <label for="confirmPassword">Confirmation</label><br>
        <input type="password" id="confirmPassword" name="confirmPassword" placeholder="Confirm Password"><br><br>
        <p>
            Already a user? <samp><a href="/pages/login.php">Login Here</a></samp>
        </p>
        <button type="submit" class="btn btn-success btn-lg">Enviar</button>
    </form>
</div>

<?php
if (isset($_SESSION['registro_message'])) {
    echo '<div class="alert alert-info" role="alert">'.$_SESSION['registro_message'].'</div>';
    unset($_SESSION['registro_message']);
}

require $_SERVER['DOCUMENT_ROOT'].'/shared/footer.php';
?>
