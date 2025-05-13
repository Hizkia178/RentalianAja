<!-- Hero Section -->
<section class="container-fluid bg-white py-5 position-relative" style="min-height: 100vh;">
    <div class="container h-100 d-flex flex-column justify-content-center">
        <div class="row align-items-center">
            <!-- Kiri: Text dan Ikon -->
            <div class="col-md-6" data-aos="fade-right">
                <!-- Trusted Badge -->
                <div class="mb-2 d-flex align-items-center gap-2 text-muted">
                    <i class="fas fa-check-circle text-success"></i>
                    <small>Trusted by 10.000+ customers</small>
                </div>

                <!-- Judul -->
                <h1 class="display-5 fw-bold">
                    Temukan Mobil Impianmu<br><span class="text-primary">Dengan Gaya & Kenyamanan</span>
                </h1>

                <!-- Deskripsi -->
                <p class="lead text-muted">
                    Rental mobil mewah dengan harga bersahabat dan layanan terbaik. Akses mudah, kualitas pasti.
                </p>

                <!-- Fitur Ikon -->
                <div class="d-flex gap-4 my-4 flex-wrap">
                    <div class="d-flex align-items-center gap-2">
                        <i class="fas fa-palette text-primary"></i>
                        <span>Desain Elegan</span>
                    </div>
                    <div class="d-flex align-items-center gap-2">
                        <i class="fas fa-headset text-primary"></i>
                        <span>24/7 Customer Service</span>
                    </div>
                    <div class="d-flex align-items-center gap-2">
                        <i class="fas fa-tags text-primary"></i>
                        <span>Harga Terjangkau</span>
                    </div>
                </div>

                <!-- Tombol Aksi -->
                <div class="d-flex gap-3 mb-4 flex-wrap">
                    <button class="btn btn-primary shadow" id="bookNowBtn" data-bs-toggle="tooltip" title="Book Now">
                        <i class="fas fa-calendar-check me-2"></i>Book Now
                    </button>
                    <button class="btn btn-outline-secondary shadow" id="viewDetailsBtn" data-bs-toggle="tooltip" title="View Details">
                        <i class="fas fa-info-circle me-2"></i>View Details
                    </button>

                    <div class="card shadow-sm px-3 py-2 border-0 d-flex align-items-center">
                        <i class="fas fa-clock text-primary me-2"></i>
                        <span class="fw-semibold">Quick Booking</span>
                    </div>
                    <div class="card shadow-sm px-3 py-2 border-0 d-flex align-items-center">
                        <i class="fas fa-lightbulb text-warning me-2"></i>
                        <span class="fw-semibold">Smart Suggestions</span>
                    </div>
                </div>
            </div>

            <div class="col-md-6 text-center" data-aos="fade-left">
                <img src="../api/image.jpg" class="img-fluid rounded" alt="Luxury Car" style="max-height: 400px; object-fit: contain;">
            </div>
        </div>

        <!-- Kartu Pencarian -->
        <div class="position-absolute start-50 translate-middle-x bg-white shadow rounded p-4 w-75" style="bottom: 20px;" data-aos="fade-up">
            <form class="row g-3 align-items-end">
                <div class="col-md-4">
                    <label for="date" class="form-label">Pilih Tanggal</label>
                    <input type="date" class="form-control" id="date" onchange="updateDate()">
                </div>
                <div class="col-md-4">
                    <label for="car" class="form-label">Pilih Mobil</label>
                    <select class="form-select" id="car">
                        <option selected disabled>Pilih Mobil</option>
                        <option value="Toyota">Toyota Avanza</option>
                        <option value="Honda">Honda CR-V</option>
                        <option value="Mitsubishi">Mitsubishi Xpander</option>
                        <option value="Daihatsu">Daihatsu Xenia</option>
                    </select>
                </div>
                <div class="col-md-4">
                    <label for="location" class="form-label">Pilih Lokasi</label>
                    <input type="text" class="form-control" id="location" placeholder="Contoh: Medan, Jakarta">
                </div>
                <div class="col-12 text-end mt-3">
                    <button type="submit" class="btn btn-primary px-4 shadow" data-bs-toggle="tooltip" title="Cari Mobil" onclick="event.preventDefault(); showAlert();">
                        <i class="fas fa-search me-2"></i>Cari
                    </button>
                </div>
            </form>
        </div>
    </div>
</section>

<script>
    const today = new Date().toISOString().split('T')[0];
    document.getElementById('date').value = today;

    function updateDate() {
        const selectedDate = document.getElementById('date').value;
    }

    function showAlert() {
        Swal.fire({
            title: 'Maaf, fitur ini tidak memiliki fungsi',
            icon: 'info',
            showConfirmButton: true,
            confirmButtonText: 'OK',
        });
    }

    document.getElementById('bookNowBtn').addEventListener('click', function(e) {
        e.preventDefault();
        Swal.fire({
            title: 'Ingin menyewa mobil?',
            text: 'Silakan ke halaman "Our Cars" untuk melihat dan memesan mobil yang tersedia.',
            icon: 'info',
            showCancelButton: true,
            confirmButtonText: 'Pergi ke Our Cars',
            cancelButtonText: 'Batal'
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = '../cars/index.php';
            }
        });
    });

     document.getElementById('viewDetailsBtn').addEventListener('click', function (e) {
        e.preventDefault();
        Swal.fire({
            title: 'Lihat Detail?',
            text: 'Ingin melanjutkan melihat detail mobil ini?',
            icon: 'question',
            showCancelButton: true,
            confirmButtonText: 'Ya, lihat sekarang',
            cancelButtonText: 'Batal'
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = '../cars/index.php';
            }
        });
    });
</script>