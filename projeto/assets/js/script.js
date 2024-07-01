// Menu
document.addEventListener("DOMContentLoaded", () => {
  const menuToggle = document.querySelector(".menu-toggle");
  const navLinks = document.querySelector(".nav-links");

  menuToggle.addEventListener("click", () => {
    navLinks.classList.toggle("active");
  });
});

//leitura de jsons
// script.js

document.addEventListener("DOMContentLoaded", () => {
  fetch("http://localhost/www/gerador-json-noticias/projeto/apis/noticias.json")
    .then((response) => response.json())
    .then((data) => {
      document.getElementById("news-count").textContent = data.length;
    })
    .catch((error) => console.error("Error loading news data:", error));

  fetch("http://localhost/www/gerador-json-noticias/projeto/apis/publicidades.json")
    .then((response) => response.json())
    .then((data) => {
      document.getElementById("banners-count").textContent = data.length;
    })
    .catch((error) => console.error("Error loading banners data:", error));
});
