document.querySelector(".toggle-menu").addEventListener("click", function(e) {
  e.preventDefault();
  this.classList.toggle('active');
  document.getElementById('menu').classList.toggle('open');
});

// document.getElementById("openMenu").addEventListener("click", toggleMenu);
// document.getElementById("closeMenu").addEventListener("click", toggleMenu);
// var isClose = true;
// function toggleMenu(e) {
//   e.preventDefault();
//   if (isClose) {
//     document.body.classList += "navbar-menu-open";
//   } else {
//     document.body.classList.remove("navbar-menu-open");
//   }
//   isClose = !isClose;
// }

