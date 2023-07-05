var form = document.querySelector(".form");
var error = document.querySelector(".error");
var inputFields = document.querySelectorAll(".input-field");
var email = document.getElementById("email");
var password = document.getElementById("password");

function addError(massage) {
  error.innerHTML = massage;
  error.style.display = "block";
}

function removeError() {
  error.innerHTML = "";
  error.style.display = "hidden";
}

function validation(event) {
  event.preventDefault();
  error.style.display = "none";

  if (email.value !== "admin" || password.value !== "admin") {
    addError("Email atau password salah");
  } else {
    removeError();
    alert("anda Berhasil Login");
    window.location.href = "pesanan.php";
  }
}

form.addEventListener("submit", validation);
