<?php
require $_SERVER['DOCUMENT_ROOT'].'/shared/header.php';
$data = load_rides();
?>
<div class="container-fluid bg-dark">
    <div class="d-flex justify-content-end">
        <p>
            <a href="login.php" class="link-success link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover font">
                Login
            </a>
        </p>
    </div>
</div>
<br>
<div class="container center-title">
    <div class="row">
        <div class="col-5 col-md-3 center1">
            <img src="/public/img/StarCar.png" class="img-fluid rounded" alt="image_logo">
        </div>
    </div>
</div>
<br><br>
<p class="h6 ml-2rem">Search for a ride</p>
<form id="searchForm"  action="/actions/rides/search.php" method="post">
    <div class="custom-border mx-3 row">
        <div class="col">
            <label for="from">From</label>
            <input type="text" id="from" name="from" class="form-control" placeholder="Input text">
        </div>
        <div class="col">
            <label for="to">To</label>
            <input type="text" id="to" name="to" class="form-control" placeholder="Input text">
        </div>
        <div class="col btn">
            <button type="submit" class="btn btn-success" id="filterButton">Find my ride!</button>
        </div>
    </div>
</form>
</div>
<div>
    <table class="table table-bordered border-black"  id="rideTable">>
        <thead class="table-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">User</th>
                <th scope="col">Start</th>
                <th scope="col">End</th>
                <th scope="col">Information</th>
            </tr>
        </thead>
        <tbody id="rideTableBody">
            <?php foreach ($data as $ride) { ?>
                <tr>
                    <th scope="row"><?php echo $ride['id']; ?></th>
                    <td><?php echo $ride['user_name']; ?></td>
                    <td><?php echo $ride['start_ride']; ?></td>
                    <td><?php echo $ride['end_ride']; ?></td>
                    <td>
                        <form action="rides_view.php" method="post">
                            <input type="hidden" name="ride_id" value="<?php echo $ride['id']; ?>">
                            <button type="submit" class="btn btn-success btn-sm">View</button>
                        </form>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>
<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/shared/footer.php';
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="/public/js/search_ride.js"></script>