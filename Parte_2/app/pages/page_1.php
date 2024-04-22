<?php
require $_SERVER['DOCUMENT_ROOT'].'/shared/header.php';
?>
<div class="container-fluid bg-dark">
      <div class="d-flex justify-content-end">
        <p>
          <a
            href="login.php"
            class="link-success link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover font"
          >
            Login</a
          >
        </p>
      </div>
    </div>
    <br>
    <div class="container center-title">
      <div class="row">
        <div class="col-5 col-md-3 center1">
          <img
            src="/public/img/StarCar.png"
            class="img-fluid rounded"
            alt="image_logo"
          >
        </div>
      </div>
    </div>
    <br><br>
    <p class="h6 ml-2rem">Search for a ride</p>
    <div class="custom-border mx-3 row">
      <div class="col">
        <label for="from">From</label>
        <input
          type="text"
          id="from"
          class="form-control"
          placeholder="Input text"
        >
      </div>
      <div class="col">
        <label for="to">To</label>
        <input
          type="text"
          id="to"
          class="form-control"
          placeholder="Input text"
        >
      </div>
      <div class="col btn">
        <button class="button">Find my ride!</button>
      </div>
    </div>
    <div>
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
                href=""
                class="link-success link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover font"
              >
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
                class="link-success link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover font-center"
              >
                View</a
              >
            </td>
          </tr>
        </tbody>
      </table>
    </div>

<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/shared/footer.php';
?>