function updateSectionsResult() {
    const selectedValue = document.getElementById("sections").value;
    const paragraph = document.getElementById("sections-result");
    paragraph.textContent = `${selectedValue} secciones seleccionadas`;

    console.log("click")

}

updateSectionsResult()