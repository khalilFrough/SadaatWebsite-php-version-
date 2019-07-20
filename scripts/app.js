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
    runAlert("None of the below fields can be empty!");
  } else if (firstName.value.length < 3) {
    runAlert("Name can not be less then 3 characters");
  } else if (lastName.value.length < 3) {
    runAlert("Last Name can not be less then 3 characters");
  } else if (!phone.value.match(/^[0-9]{4}\s[0-9]{3}\s[0-9]{3}$/)) {
    runAlert("Phone number is not valid");
  } else {
    // runSuccess("Your message is recieved, thanks");
    e.submit();
  }
  e.preventDefault();
});

function runAlert(message) {
  // parent div
  const formContent = document.querySelector(".form-content");
  const errorDiv = document.createElement("div");
  errorDiv.className = "alert alert-danger";
  errorDiv.appendChild(document.createTextNode(message));
  formContent.insertBefore(errorDiv, form);
  // clear error
  setTimeout(clearError, 2000);
}

function clearError() {
  document.querySelector(".alert").remove();
}
function runSuccess(message) {
  const formContent = document.querySelector(".form-content");
  const errorDiv = document.createElement("div");
  errorDiv.className = "alert alert-success";
  errorDiv.appendChild(document.createTextNode(message));
  formContent.insertBefore(errorDiv, form);
  // clear error
  setTimeout(clearError, 2000);
}
