window.addEventListener('scroll', function() {
    var footer = document.querySelector('footer');
    var main = document.querySelector('main');
    if (window.innerHeight + window.scrollY >= document.body.offsetHeight) {
        footer.style.display = 'block';
        main.style.marginBottom = footer.offsetHeight + 'px';
    } else {
        footer.style.display = 'none';
        main.style.marginBottom = '0';
    }
});
