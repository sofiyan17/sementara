// Toggle class active
const navbarNav = document.querySelector(".navbar-nav");

// ketika hamburger-menu di klik
document.querySelector("#iot-menu").onclick = () => {
  navbarNav.classList.toggle("active");
};

// klik diluar sidebar untuk menghilangkan navbar
const iot = document.querySelector("#iot-menu");

document.addEventListener("click", function (e) {
  if (!iot.contains(e.target) && !navbarNav.contains(e.target)) {
    navbarNav.classList.remove("active");
  }
});

