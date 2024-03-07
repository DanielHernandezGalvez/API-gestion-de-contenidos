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
        document.getElementById("last-form").style.display = "none"
        document.getElementById("success-message-form").style.display = "block";
        document.getElementById("error-message-form").style.display = "none";
      } else {
        document.getElementById("last-form").style.display = "none"
        document.getElementById("error-message-form").style.display = "block";
        document.getElementById("success-message-form").style.display = "none";
      }
    })
    .catch(error => {
      console.error("Error:", error);
    });
  });