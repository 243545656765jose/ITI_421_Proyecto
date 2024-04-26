document
  .getElementById("searchForm")
  .addEventListener("submit", function (event) {
    event.preventDefault();
    var from = document.getElementById("from").value;
    var to = document.getElementById("to").value;
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "/actions/rides/search.php");
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhr.onload = function () {
      if (xhr.status === 200) {
        var rides = JSON.parse(xhr.responseText);
        updateTable(rides);
      }
    };
    xhr.send(
      "from=" + encodeURIComponent(from) + "&to=" + encodeURIComponent(to)
    );
  });

function updateTable(data) {
  var tableBody = document.getElementById("rideTableBody");
  tableBody.innerHTML = "";
  if (data.length === 0) {
    var noResultsRow =
      '<tr><td colspan="5">No se encontraron resultados.</td></tr>';
    tableBody.insertAdjacentHTML("beforeend", noResultsRow);
  } else {
    data.forEach(function (ride) {
      var row =
        "<tr>" +
        "<td>" +
        ride.id +
        "</td>" +
        "<td>" +
        ride.user_name +
        "</td>" +
        "<td>" +
        ride.start_ride +
        "</td>" +
        "<td>" +
        ride.end_ride +
        "</td>" +
        "<td>" +
        '<form action="rides_view.php" method="post">' +
        '<input type="hidden" name="ride_id" value="' +
        ride.id +
        '">' +
        '<button type="submit" class="btn btn-success btn-sm">View</button>' +
        "</form>" +
        "</td>" +
        "</tr>";
      tableBody.insertAdjacentHTML("beforeend", row);
    });
  }
}
