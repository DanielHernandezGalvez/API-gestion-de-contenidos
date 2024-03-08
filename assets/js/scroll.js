window.onscroll = function () {
    const scroll = window.scrollY;
  
    const barraNav = document.querySelector(".nav");
  
    if (scroll > 300) {
      barraNav.classList.add("fixed-top");
      console.log("muchoscroll");
    } else {
      barraNav.classList.remove("fixed-top");
      console.log("parte superios");
    }
  };
  