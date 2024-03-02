// Footer'ın sayfa en altına kaydırılması için bir event listener ekleyin
window.addEventListener('scroll', function() {
    var footer = document.querySelector('footer');
    // Sayfa scroll edildiğinde, footer'ın görünürlüğünü kontrol edin
    if (window.innerHeight + window.scrollY >= document.body.offsetHeight) {
        footer.style.display = 'block'; // Footer'ı görünür yapın
    } else {
        footer.style.display = 'none'; // Footer'ı gizleyin
    }
});
