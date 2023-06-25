// Toggle button
let menuIcon = document.querySelector("#menu-icon");
let navbar = document.querySelector(".navbar");

menuIcon.onclick = () => {
  menuIcon.classList.toggle("bx-x");
  navbar.classList.toggle("active");
};
// scroll section

let sections = document.querySelectorAll("section");
let navLinks = document.querySelectorAll(".navbar a");

window.onscroll = () => {
  sections.forEach((sec) => {
    let top = window.scrollY;
    let offset = sec.offsetTop - 100;
    let height = sec.offsetHeight;
    let id = sec.getAttribute("id");

    if (top >= offset && top < offset + height) {
      navLinks.forEach((link) => {
        link.classList.remove("active");
        document
          .querySelector("header nav a[href*='" + id + "']")
          .classList.add("active");
      });
      //   active sections for animate
      sec.classList.add("show-animate");
    }
    // if want to use animaion thath repeats on scroll use this
    else {
      sec.classList.remove("show-animate");
    }
  });
  let header = document.querySelector("header");
  header.classList.toggle("sticky", window.scrollY > 100);

  menuIcon.classList.remove("bx-x");
  navbar.classList.remove("active");

  let footer = document.querySelector("footer");
  footer.classList.toggle(
    "show-animate",
    this.innerHeight + this.scrollY >= document.scrollingElement.scrollHeight
  );
};

let nameInput = document.getElementById("name");

// Agregar un controlador de eventos para el evento keydown en el campo de entrada
nameInput.addEventListener("keydown", function (event) {
  // Verificar si la tecla presionada es la tecla de espacio
  if (event.keyCode === 32) {
    // Verificar si ya hay algún texto seleccionado
    if (typeof this.selectionStart !== "undefined") {
      // Obtener la posición del cursor
      let cursorPos = this.selectionStart;

      // Obtener el valor actual del campo de entrada
      let inputValue = this.value;

      // Insertar un espacio en blanco en la posición del cursor
      this.value =
        inputValue.slice(0, cursorPos) + " " + inputValue.slice(cursorPos);

      // Mover el cursor a la posición siguiente después del espacio
      this.selectionStart = cursorPos + 1;
      this.selectionEnd = cursorPos + 1;

      // Evitar que se ejecute el comportamiento predeterminado de la tecla de espacio
      event.preventDefault();
    }
  }
});

let textareaInput = document.getElementById("message");
textareaInput.addEventListener("keydown", function (event) {
  // Verificar si la tecla presionada es la tecla de espacio
  if (event.keyCode === 32) {
    // Verificar si ya hay algún texto seleccionado
    if (typeof this.selectionStart !== "undefined") {
      // Obtener la posición del cursor
      let cursorPos = this.selectionStart;

      // Obtener el valor actual del campo de entrada
      let inputValue = this.value;

      // Insertar un espacio en blanco en la posición del cursor
      this.value =
        inputValue.slice(0, cursorPos) + " " + inputValue.slice(cursorPos);

      // Mover el cursor a la posición siguiente después del espacio
      this.selectionStart = cursorPos + 1;
      this.selectionEnd = cursorPos + 1;

      // Evitar que se ejecute el comportamiento predeterminado de la tecla de espacio
      event.preventDefault();
    }
  }
});

//enviar mensaje
const btn = document.getElementById("sendEmail");

document.getElementById("form").addEventListener("submit", function (event) {
  event.preventDefault();
  btn.value = "Sending...";

  const serviceID = "default_service";
  const templateID = "template_8r65f7w";

  emailjs.sendForm(serviceID, templateID, this).then(
    () => {
      btn.value = "Send Email";
      showSuccessMessage();
    },
    (err) => {
      btn.value = "Send Email";
      failMessage();
    }
  );
});

function showSuccessMessage() {
  const successMessage = document.createElement("h4");
  successMessage.textContent = "Enviado con éxito";
  successMessage.style.color = "#00C896"; // Establece el color del texto a rojo
  successMessage.style.marginTop = "15px"; // Agrega un margen superior de 15px
  successMessage.style.fontSize = "2rem";
  form.appendChild(successMessage);

  setTimeout(function () {
    form.removeChild(successMessage);
  }, 10000); // Elimina el mensaje después de 10 segundos (10000 ms)
}
// mensaje fallido
function failMessage() {
  const failMessage = document.createElement("h4");
  failMessage.textContent = "Error de envío, intentelo nuevamente";
  failMessage.style.color = "#E15664"; // Establece el color del texto a verde
  failMessage.style.marginTop = "15px"; // Agrega un margen superior de 15px
  failMessage.style.fontSize = "2rem";
  form.appendChild(failMessage);

  setTimeout(function () {
    form.removeChild(failMessage);
  }, 10000); // Elimina el mensaje después de 10 segundos (10000 ms)
}
