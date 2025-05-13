// Menambahkan event listener ke tombol
document.getElementById('btnScrollTop').addEventListener('click', function() {
    // Melakukan scroll ke atas secara mulus
    window.scrollTo({
        top: 0,
        behavior: 'smooth'
    });
});

// Menampilkan atau menyembunyikan tombol saat scroll
window.addEventListener('scroll', function() {
    var btnScrollTop = document.getElementById('btnScrollTop');
    if (document.body.scrollTop > 200 || document.documentElement.scrollTop > 200) {
        btnScrollTop.style.display = 'block'; // Menampilkan tombol
    } else {
        btnScrollTop.style.display = 'none'; // Menyembunyikan tombol
    }
});
