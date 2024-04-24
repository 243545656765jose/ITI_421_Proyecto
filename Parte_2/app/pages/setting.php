<?php
require $_SERVER['DOCUMENT_ROOT'].'/shared/header.php';
$user_id = $_SESSION['user']['id'];
$user_data = get_user_by_id($user_id);
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
    <h2>Welcome <samp><?php echo $user_data['user_name']; ?></samp></h2>
    <img src="/public/img/StarCar.png" class="img30" alt="30">
</div>
<nav class="margen" aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item active"><a href="/pages/dashboard.php">Dashboard </a></li>
        <li class="breadcrumb-item active">Settings</li>
    </ol>
</nav>
<div class="formsenttings">
    <form id="formsettings" action="/actions/user/edit.php"  method="POST" >
    <input type="hidden" name="user_id" value="<?php echo $user_id; ?>"> <!-- Campo oculto para el user_id -->
        <label for="fullname">Full Name</label><br>
        <input type="text" placeholder="user_name" name="user_name" id="user_name" value="<?php echo $user_data['user_name']; ?>"><br>
        <label for="speedavange">Speed Avange</label><br>
        <input type="text" placeholder="Speed Average" id="speed_avange"  name="speed_avange" value="<?php echo $user_data['speed_avange']; ?>"><br>
        <label for="aboutme">About Me</label><br>
        <textarea  id="adout_me" name="adout_me" cols="80" rows="7"><?php echo $user_data['adout_me']; ?></textarea><br>
        <br>
        <div>
            <button class="btnCancel">Cancel</button>
            <button class="btnSave" type="submit">Save</button>
        </div>
    </form>
</div>

<?php
require $_SERVER['DOCUMENT_ROOT'].'/shared/footer.php';
?>
