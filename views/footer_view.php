<footer>
 <span id="year"></span> &copy;  Desarrollado por <span>El Creador Web</span>
</footer>

<script>
  const year = document.getElementById("year")

  function getYear(){
    const currentDate = new Date();
    const currentYear = currentDate.getFullYear()
    year.textContent = currentYear
  }

  getYear()
</script>