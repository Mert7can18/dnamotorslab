// script.js dosyası
document.addEventListener("DOMContentLoaded", function() {
    var header = document.querySelector("header");

    // Header'a mouse ile hover edildiğinde arka plan rengini değiştir
    header.addEventListener("mouseenter", function() {
        header.classList.add("header-animation");
        header.style.backgroundColor = "#999"; // Yeni arka plan rengi
    });

    // Header üzerinden mouse çekildiğinde arka plan rengini eski haline getir
    header.addEventListener("mouseleave", function() {
        header.classList.remove("header-animation");
        header.style.backgroundColor = "#c5c4c4"; // Eski arka plan rengi
    });
});
