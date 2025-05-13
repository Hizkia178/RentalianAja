function konfirmasiBooking(e) {
    e.preventDefault();
    Swal.fire({
        title: 'Ingin melanjutkan proses ini?',
        text: 'Apakah Anda yakin ingin melanjutkan ke halaman booking?',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonText: 'Ya, lanjutkan',
        cancelButtonText: 'Batal',
    }).then((result) => {
        if (result.isConfirmed) {
            window.location.href = "../cars/index.php#booking";
        }
    });
}
