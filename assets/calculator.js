// steps and progress bar
let currentStep = 1;
const totalSteps = 5;

function nextStep() {
  document.getElementById(`step${currentStep}`).classList.add("hidden");
  currentStep++;
  const progress = ((currentStep - 1) / totalSteps) * 100;
  document.getElementById("progress").style.width = `${progress}%`;
  document.getElementById("progress-bar-percent").textContent = `${progress.toFixed(1)}%`;

  document.getElementById(`step${currentStep}`).classList.remove("hidden");
  updateTotal();
}

// Calculator
function updateSectionsResult() {
  const selectedValue = parseFloat(document.getElementById("sections").value);
  const paragraph = document.getElementById("sections-result");
  paragraph.textContent = `$ ${selectedValue}.00`;
  updateTotal();
}

function updatedImagesResult() {
  const imageValue = parseFloat(document.getElementById("images").value);
  const imageResult = document.getElementById("images-result");

  imageResult.textContent = `$ ${imageValue}.00`;
  updateTotal();
}

function updatedWordpress() {
  const wordpress = document.getElementById("wordpress").value;
  const wordpressResult = document.getElementById("wordpress-result");

  wordpressResult.textContent = `$ ${wordpress}.00`;
  updateTotal();
}

function updateForm() {
  const formContact = document.getElementById("contact-form").value;
  const formResult = document.getElementById("total-contactos");

  formResult.textContent = `$ ${formContact}.00`;
  updateTotal();
}

function updateDominio() {
  const dominio = document.getElementById("dominio").value;
  const totalDominio = document.getElementById("total-dominio");

  totalDominio.textContent = `$ ${dominio}.00`;
  updateTotal();
}

function updateHost() {
  const host = document.getElementById("host").value;
  const hostTotal = document.getElementById("total-host");

  hostTotal.textContent = `$ ${host}.00`;
  updateTotal();
}

function updateEnglish() {
  const english = document.getElementById("english").value;
  const totalEnglish = document.getElementById("total-english");

  totalEnglish.textContent = `$ ${english}.00`;
  updateTotal();
}

let total = 0;

// Function to update the total paragraph
function updateTotal() {
  const sectionsPrice = parseFloat(document.getElementById("sections").value);
  let imagesPrice = parseFloat(document.getElementById("images").value);
  let wordpress = parseFloat(document.getElementById("wordpress").value);
  let form = parseFloat(document.getElementById("contact-form").value);
  const dominio = parseFloat(document.getElementById("dominio").value);
  const host = parseFloat(document.getElementById("host").value);
  let english = parseFloat(document.getElementById("english").value);

  total =
    sectionsPrice + imagesPrice + wordpress + form + dominio + host + english;

  // Format the total as currency
  const formattedTotal = new Intl.NumberFormat("es-MX", {
    style: "currency",
    currency: "MXN",
  }).format(total);

  document.getElementById(
    "total-result"
  ).innerHTML = `<p class="result">Total: <span class="total">${formattedTotal}</span> MNX</p>` ;
}

updateSectionsResult();
updatedImagesResult();
updatedWordpress();
updateForm();
updateDominio();
updateHost();
updateEnglish();

// Call updateTotal initially to display initial value
updateTotal();


document.getElementById("form").addEventListener("submit", function(event) {
  event.preventDefault();
  var formData = new FormData(this);

  fetch("../calculator.php", {
    method: "POST",
    body: formData
  })
  .then(response => response.text())
  .then(result => {
    if (result === "success") {
      document.getElementById("percent").classList = "hidden"
      document.getElementById("step5").classList = "hidden"
      document.getElementById("success-message").style.display = "block";
      document.getElementById("error-message").style.display = "none";
    } else {
      document.getElementById("percent").classList = "hidden"
      document.getElementById("step5").classList = "hidden"
      document.getElementById("error-message").style.display = "block";
      document.getElementById("success-message").style.display = "none";
    }
  })
  .catch(error => {
    console.error("Error:", error);
  });
});
