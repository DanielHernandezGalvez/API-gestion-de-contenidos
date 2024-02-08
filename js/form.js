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
    updateTotal()
}

// Initialize total to 0
let total = 0;

// Function to update the total paragraph
function updateTotal() {
    const sectionsPrice = parseFloat(document.getElementById("sections").value);
    let imagesPrice = parseFloat(document.getElementById("images").value);
    let wordpress = parseFloat(document.getElementById("wordpress").value);

    // Extract numeric values from option labels
    // if (imagesPrice === 0) {
    //     imagesPrice = parseFloat(document.getElementById("images").options[1].text.split("-")[0]);
    // }

    total = sectionsPrice + imagesPrice + wordpress;

    // Format the total as currency
    const formattedTotal = new Intl.NumberFormat('es-MX', {
        style: 'currency',
        currency: 'MXN',
    }).format(total);

    document.getElementById("total-result").textContent = `Total estimado: ${formattedTotal}`;
}

updateSectionsResult()
updatedImagesResult()
updatedWordpress()

// Call updateTotal initially to display initial value
updateTotal();