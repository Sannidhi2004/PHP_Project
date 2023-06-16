$(document).ready(function () {
    var checkbox1 = document.getElementById("upload-10th-checkbox");
  var uploadInput1 = document.getElementById("upload-10th-input");

  checkbox1.addEventListener("change", function() {
    if (checkbox1.checked) {
      uploadInput1.style.display = "block";
    } else {
      uploadInput1.style.display = "none";
    }
  });

  var checkbox2 = document.getElementById("upload-12th-checkbox");
  var uploadInput2 = document.getElementById("upload-12th-input");

  checkbox2.addEventListener("change", function() {
    if (checkbox2.checked) {
      uploadInput2.style.display = "block";
    } else {
      uploadInput2.style.display = "none";
    }});
    function showParentInfo() {
        var parentInfoDiv = document.getElementById("parentInfo");
        if (document.getElementById("hasParent").checked) {
          parentInfoDiv.style.display = "block";
        } else {
          parentInfoDiv.style.display = "none";
        }
      }
});