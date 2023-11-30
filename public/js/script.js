// toggle class active
const navbarNav = document.querySelector(".navbar-nav");

// ketika hamburger menu diklik
const hamburger = document.querySelector("#hamburger-menu");
hamburger.onclick = () => navbarNav.classList.toggle("active");

// klik di luar sidebar untuk menghilangkan menu
document.addEventListener("click", function (e) {
  if (!hamburger.contains(e.target) && !navbarNav.contains(e.target)) {
    navbarNav.classList.remove("active");
  }
});
