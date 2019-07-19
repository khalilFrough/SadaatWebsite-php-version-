// some varaibles for the form validation
const firstName = document.getElementById("firstName");
const lastName = document.getElementById("lastName");
const phone = document.getElementById("contactNumber");
const email = document.getElementById("email");
const message = document.getElementById("message");
const form = document.getElementById("contactForm");
const btn = document.getElementById("submit");
const danger = document.getElementById("danger");

form.addEventListener("submit", function(e) {
  if (
    firstName.value === "" ||
    lastName.value === "" ||
    phone.value === "" ||
    email.value === "" ||
    message.value === ""
  ) {
    runAlert("None of the above fields can be empty!");
  } else {
    console.log("success");
  }
  e.preventDefault();
});

function runAlert(message) {
  danger.className = "alert alert-danger";
  danger.style.opacity = 1;
  danger.setAttribute("type", "text");
  danger.value = message;
}

function clearError() {
  document.querySelector(".alert.alert-danger").remove();
}
