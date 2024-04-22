<?php
require $_SERVER['DOCUMENT_ROOT'].'/shared/header.php';
?>

<header class="container-fluid text-center col-sm-6 offset-sm-3">
    <img class="img-fluid" src="/public/img/StarCar.png" alt="imagenLogo">
</header>

<div class="container-fluid-center section-login">
    <h2 class="text-center">Login</h2>
    <div class="col">
        <form id="login" action="/actions/user/login.php" method="post">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" class="form-control" id="username" name="username" placeholder="Enter username">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Password">
            </div>
            <button type="submit" class="btn btn-success btn-lg">LOGIN</button>
        </form>
        <p>Don't have an account? <a href="/pages/registration.php">Register here</a></p>
    </div>
</div>


<?php
require $_SERVER['DOCUMENT_ROOT'].'/shared/footer.php';
?>
