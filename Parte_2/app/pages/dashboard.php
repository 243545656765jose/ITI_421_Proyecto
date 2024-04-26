<?php
require $_SERVER['DOCUMENT_ROOT'].'/shared/header.php';

?>
<a href="index.php" class="btn btn-success">Principal</a>

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
    <h2>Welcome <samp><?php echo $username; ?></samp></h2> 
    <img src="/public/img/StarCar.png" class="img30" alt="30">
</div>

<nav class="margen" aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
    </ol>
</nav>

<div>
    <h2 class="h2">My rides</h2>
</div>

<div class="table-responsive divmof">
    <h2>Your current list of rides</h2>
    <table class="table table-bordered border-black">
        <thead class="table-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">User</th>
                <th scope="col">Start</th>
                <th scope="col">End</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
    <?php
    if (!empty($user_data)) {
        foreach ($user_data as $ride) {
            echo '<tr>';
            echo '<th scope="row">'.$ride['id'].'</th>';
            echo '<td>'.$ride['user_name'].'</td>';
            echo '<td>'.$ride['start_ride'].'</td>';
            echo '<td>'.$ride['end_ride'].'</td>';
            echo '<td>';
            echo '<form action="ridesedit.php" method="post">';
            echo '<input type="hidden" name="ride_id" value="'.$ride['id'].'">';
            echo '<button type="submit" class="btn btn-success btn-sm">Edit</button>';
            echo '</form>';
            echo '<form action="/actions/rides/delete.php" method="post">';
            echo '<input type="hidden" name="ride_id" value="'.$ride['id'].'">';
            echo '<button type="submit" class="btn btn-success btn-sm">Delete</button>';
            echo '</form>';
            echo '</td>';
            echo '</tr>';
        }
    } else {
        echo '<tr><td colspan="5">No rides found</td></tr>';
    }
?>
</tbody>  
    </table>
</div>

<?php
require $_SERVER['DOCUMENT_ROOT'].'/shared/footer.php';
?>
