// Menu Variables
var menuToggler = document.querySelector(".nav-icon");
var menuList = document.querySelector(".mobile-options");
var menuListStyle = getComputedStyle(menuList);
var menuListClasses = document.querySelector(".mobile-options").className.split(/\s+/);

// Menu toggle

menuToggler.addEventListener("click", function () {
  if (menuListStyle.display == "none") {
    menuList.classList.remove("hide");
    menuList.classList.add("selected");
    menuToggler.classList.add("change");
  } else {
    menuList.classList.toggle("selected");
    menuList.classList.toggle("dismiss");
    menuToggler.classList.toggle("change");
  }
});