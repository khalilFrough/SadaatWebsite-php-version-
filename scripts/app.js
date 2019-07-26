let title = document.title;
if (title === "tileGallary") {
  tileGallaryContent();
} else if (title === "ContactUs") {
  contactUsContent();
} else if (title === "AboutUs") {
  pictureSlides();
} else if (title === "estimation") {
  estimationContent();
}

function contactUsContent() {
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
}

// **************** the modle layout ********************
function tileGallaryContent() {
  // Get the modal
  let modal = document.getElementById("myModal");

  // Get the image and insert it inside the modal - use its "alt" text as a caption
  let img = document.querySelectorAll(".myImg");
  let modalImg = document.getElementById("img01");
  let captionText = document.getElementById("caption");
  img.onclick = function() {
    modal.style.display = "block";
    modalImg.src = this.src;
    captionText.innerHTML = this.alt;
  };

  // Get the <span> element that closes the modal
  let span = document.getElementsByClassName("close")[0];

  // When the user clicks on <span> (x), close the modal
  span.onclick = function() {
    modal.style.display = "none";
  };
}
// ******************** about us page functionality *****************

function pictureSlides() {
  // array to store the pictures
  let picArray = [
    "../media/bathroom.jpg",
    "../media/wallTiles/floor3.jpg",
    "../media/wallTiles/floor4.jpg",
    "../media/wallTiles/floor9.jpg"
  ];
  let index = 0;
  function changePicture() {
    let picSrc = (document.getElementById("services-img").src =
      picArray[index]);
    picSrc;
    if (index < picArray.length - 1) {
      index++;
    } else {
      index = 0;
    }
  }
  setInterval(changePicture, 2000);
}

//  ********************* Estimation page calculation ***************

function estimationContent() {
  // some of the UI variables

  const form = document.getElementById("calculate-form");
  const width = document.getElementById("width");
  const height = document.getElementById("height");
  const calculate = document.getElementById("calculate");
  const option = document.getElementById("category");
  // some incremental variables
  let area,
    total,
    tileRate = 2,
    stoneRate = 3;
  // some displaying variables

  const totalArea = document.getElementById("totalArea");
  const totalAmount = document.getElementById("totalAmount");

  // some displaying classes
  const loadingSpinner = document.querySelector(".loading");
  const displayResult = document.querySelectorAll(".display-results");

  calculate.addEventListener("click", calculating);
  function calculating(e) {
    displayResult.forEach(function(index) {
      index.style.display = "none";
    });

    loadingSpinner.style.display = "block";
    setTimeout(calculationArea, 2000);
    e.preventDefault();
  }

  function calculationArea() {
    if (
      option.value === "tile" &&
      width.value !== " " &&
      height.value !== " "
    ) {
      area = width.value * height.value;
      total = Math.floor(area * tileRate);
      totalArea.value = area + " m²";
      totalAmount.value =
        "$ " +
        total +
        `  Tile is calculated at $${tileRate} per m² including water proof and screed `;
      console.log("the code runs");
      loadingSpinner.style.display = "none";
      displayResult.forEach(function(index) {
        index.style.display = "block";
      });
    } else if (
      option.value === "stone" &&
      width.value !== " " &&
      height.value !== " "
    ) {
      area = width.value * height.value;
      total = Math.floor(area * stoneRate);
      totalArea.value = area + " m²";
      totalAmount.value =
        "$ " + total + `  Stone is calculated at $${stoneRate} per m² `;
      loadingSpinner.style.display = "none";
      displayResult.forEach(function(index) {
        index.style.display = "block";
      });
    } else {
      loadingSpinner.style.display = "none";
      showError(
        "Opps! You Forgot to put in the values, Please Put in The Values!"
      );
    }
    width.value = "";
    height.value = "";
    option.value = "";
  }

  function showError(error) {
    const divError = document.createElement("div");
    divError.className = "alert alert-danger";
    divError.appendChild(document.createTextNode(error));
    const card = document.querySelector(".estimation-card");
    card.insertBefore(divError, form);
    setTimeout(clearError, 3000);
  }
  function clearError() {
    document.querySelector(".alert-danger").remove();
  }
}
