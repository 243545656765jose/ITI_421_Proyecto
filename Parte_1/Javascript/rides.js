function enablebtn() {
  document.cookie = "hideButtons=false";
}
function verification() {
  if (document.cookie.includes("hideButtons=false")) {
    var btnCancel = document.querySelector(".btnCancel");
    var btnSave = document.querySelector(".btnSave");
    btnCancel.style.display = "none";
    btnSave.style.display = "none";
  }
}

