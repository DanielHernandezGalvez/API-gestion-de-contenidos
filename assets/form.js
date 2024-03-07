document.getElementById("last-form").addEventListener("submit", function(event) {
    event.preventDefault();
    var formData = new FormData(this);
  
    fetch("../form.php", {
      method: "POST",
      body: formData
    })
    .then(response => response.text())
    .then(result => {
      if (result === "success") {
        document.getElementById("success-message").style.display = "block";
        document.getElementById("error-message").style.display = "none";
      } else {
        document.getElementById("error-message").style.display = "block";
        document.getElementById("success-message").style.display = "none";
      }
    })
    .catch(error => {
      console.error("Error:", error);
    });
  });