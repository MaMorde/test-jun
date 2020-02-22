function burgerMenu(selector) {
  let menu = $(selector);
  let button = menu.find(".burger-menu__button");
  let links = menu.find(".burger-menu__link");
  let overlay = menu.find(".burger-menu__overlay");

  button.on("click", e => {
    e.preventDefault();
    toggleMenu();
  });
  links.on("click", () => {
    toggleMenu();
  });
  overlay.on("click", () => {
    toggleMenu();
  });
  function toggleMenu() {
    menu.toggleClass("burger-menu__active");
    $(".content").toggleClass("content_active");

    if (menu.hasClass("burger-menu__active")) {
      $("body").css("overflow", "hidden");
      button.css("left", "+=225px");
    } else {
      $(".burger-menu__nav").scrollTop(0);
      $("body").css("overflow", "visible");
      button.css("left", "-=225px");
    }
  }
}
burgerMenu(".burger-menu");

let searchBtn = document.querySelector(".search_header-btn");
let searchForm = document.querySelector(".search-form__adapt");
searchBtn.addEventListener("click", func);
function func() {
  if (searchForm.style.display == "none" || searchForm.style.display == "") {
    searchForm.style.display = "block";
  } else {
    searchForm.style.display = "none";
  }
}

$(document).ready(function() {
  let pagBtns = document.getElementsByClassName("pagination__links");
  let link = window.location.href;

  for (var i = 0; i < pagBtns.length; i++) {
    console.log(i);
    var last = link.toString().slice(-(i.length + 1));
    if (pagBtns[i] + "#" == last || pagBtns[i] == last) {
      pagBtns[i].classList.add("pagination__links_active");
    }
  }
});
