// sidebar

let sidebar = document.querySelector(".sidebar");
let closeBtn = document.querySelector("#btn");
let searchBtn = document.querySelector(".bx-search");

closeBtn.addEventListener("click", () => {
  sidebar.classList.toggle("open");
  menuBtnChange();
});

searchBtn.addEventListener("click", () => {
  sidebar.classList.toggle("open");
  menuBtnChange();
});

function menuBtnChange() {
  if (sidebar.classList.contains("open")) {
    closeBtn.classList.replace("bx-menu", "bx-menu-alt-right"); //replacing the iocns class
  } else {
    closeBtn.classList.replace("bx-menu-alt-right", "bx-menu"); //replacing the iocns class
  }
}
// carousel
$(document).ready(function () {
  $(".owl-carousel").owlCarousel({
    margin: 10,
    nav: true,
    width: 400,
    navText: [
      "<div class='nav-button owl-prev'>‹</div>",
      "<div class='nav-button owl-next'>›</div>",
    ],
    responsiveClass: true,
    responsive: {
      0: {
        items: 1,
        nav: true,
      },
      600: {
        items: 3,
        nav: false,
      },
      1000: {
        items: 4,
        nav: true,
        loop: false,
      },
    },
  });
});

new Splide(".splide", {
  perPage: 4,
  padding: {
    right: "5rem",
    left: "5rem",
  },
  perMove: 1,
}).mount();
