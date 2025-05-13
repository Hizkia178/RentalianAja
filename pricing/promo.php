<!-- Promo Section -->
<section class="promo-section py-5 bg-white">
    <div class="container">
        <!-- Header -->
        <div class="text-center mb-5" data-aos="fade-up" data-aos-duration="1000">
            <h2 class="fw-bold display-4 mb-3">Promo Spesial untuk Anda</h2>
            <p class="text-muted lead">Dapatkan penawaran eksklusif dan hemat lebih banyak dengan paket bundling kami!</p>
            <p class="text-danger fw-semibold" id="promo-countdown">Promo berakhir dalam: <span id="countdown"></span></p>
        </div>

        <!-- Promo Cards -->
        <div class="row g-4" data-aos="zoom-in" data-aos-duration="1000">
            <!-- Promo 1: Sewa 3 Hari Gratis 1 Hari -->
            <div class="col-md-6 col-lg-3">
                <form action="../promo/promo.php" method="POST">
                    <div class="card h-100 shadow-lg position-relative overflow-hidden">
                        <span class="badge bg-success position-absolute top-0 start-0 m-3 z-3">Hemat 25%</span>
                        <div class="card-body text-center">
                            <i class="fas fa-gift fa-3x text-primary mb-3"></i>
                            <h5 class="card-title fw-bold">Sewa 3 Hari Gratis 1 Hari</h5>
                            <p class="text-muted">Sewa mobil selama 3 hari dan dapatkan 1 hari gratis!</p>
                            <h4 class="text-primary fw-semibold">Rp 1.200.000<span class="fs-6 text-muted">/4 hari</span></h4>
                            <p class="text-muted small">Hemat hingga Rp 400.000</p>
                        </div>
                        <div class="card-footer bg-transparent border-0 text-center">
                            <input type="hidden" name="nama_paket" value="Sewa 3 Hari Gratis 1 Hari">
                            <input type="hidden" name="harga" value="1200000">
                            <input type="hidden" name="satuan" value="4 hari">
                            <input type="hidden" name="diskon" value="400000">
                            <button type="submit" class="btn btn-primary btn-sm shadow" data-bs-toggle="tooltip" title="Ambil Promo">
                                <i class="fas fa-calendar-check me-2"></i>Ambil Promo
                            </button>
                        </div>
                    </div>
                </form>
            </div>

            <!-- Promo 2: Paket Sewa + Supir + BBM -->
            <div class="col-md-6 col-lg-3">
                <form action="../promo/promo.php" method="POST">
                    <div class="card h-100 shadow-lg position-relative overflow-hidden">
                        <span class="badge bg-info position-absolute top-0 start-0 m-3 z-3">All-in-One</span>
                        <div class="card-body text-center">
                            <i class="fas fa-car-side fa-3x text-primary mb-3"></i>
                            <h5 class="card-title fw-bold">Paket Sewa + Supir + BBM</h5>
                            <p class="text-muted">Nikmati perjalanan tanpa repot dengan supir dan bahan bakar.</p>
                            <h4 class="text-primary fw-semibold">Rp 700.000<span class="fs-6 text-muted">/hari</span></h4>
                            <p class="text-muted small">Termasuk supir berpengalaman</p>
                        </div>
                        <div class="card-footer bg-transparent border-0 text-center">
                            <input type="hidden" name="nama_paket" value="Paket Sewa + Supir + BBM">
                            <input type="hidden" name="harga" value="700000">
                            <input type="hidden" name="satuan" value="1 hari">
                            <input type="hidden" name="diskon" value="0">
                            <button type="submit" class="btn btn-primary btn-sm shadow" data-bs-toggle="tooltip" title="Ambil Promo">
                                <i class="fas fa-calendar-check me-2"></i>Ambil Promo
                            </button>
                        </div>
                    </div>
                </form>
            </div>

            <!-- Promo 3: Diskon Akhir Pekan / Hari Raya -->
            <div class="col-md-6 col-lg-3">
                <form action="../promo/promo.php" method="POST">
                    <div class="card h-100 shadow-lg position-relative overflow-hidden">
                        <span class="badge bg-danger position-absolute top-0 start-0 m-3 z-3">Limited Offer</span>
                        <div class="card-body text-center">
                            <i class="fas fa-calendar-alt fa-3x text-primary mb-3"></i>
                            <h5 class="card-title fw-bold">Diskon Akhir Pekan / Hari Raya</h5>
                            <p class="text-muted">Dapatkan diskon spesial untuk sewa di akhir pekan atau hari raya.</p>
                            <h4 class="text-primary fw-semibold">Rp 350.000<span class="fs-6 text-muted">/hari</span></h4>
                            <p class="text-muted small">Hemat hingga Rp 50.000/hari</p>
                        </div>
                        <div class="card-footer bg-transparent border-0 text-center">
                            <input type="hidden" name="nama_paket" value="Diskon Akhir Pekan / Hari Raya">
                            <input type="hidden" name="harga" value="350000">
                            <input type="hidden" name="satuan" value="1 hari">
                            <input type="hidden" name="diskon" value="50000">
                            <button type="submit" class="btn btn-primary btn-sm shadow" data-bs-toggle="tooltip" title="Ambil Promo">
                                <i class="fas fa-calendar-check me-2"></i>Ambil Promo
                            </button>
                        </div>
                    </div>
                </form>
            </div>

            <!-- Promo 4: Eksklusif Online -->
            <div class="col-md-6 col-lg-3">
                <form action="../promo/promo.php" method="POST">
                    <div class="card h-100 shadow-lg position-relative overflow-hidden">
                        <span class="badge bg-warning position-absolute top-0 start-0 m-3 z-3">Online Only</span>
                        <div class="card-body text-center">
                            <i class="fas fa-laptop fa-3x text-primary mb-3"></i>
                            <h5 class="card-title fw-bold">Eksklusif Online</h5>
                            <p class="text-muted">Pesan melalui website atau aplikasi untuk diskon tambahan.</p>
                            <h4 class="text-primary fw-semibold">Diskon 10%</h4>
                            <p class="text-muted small">Berlaku untuk semua paket</p>
                        </div>
                        <div class="card-footer bg-transparent border-0 text-center">
                            <input type="hidden" name="nama_paket" value="Eksklusif Online">
                            <input type="hidden" name="harga" value="0">
                            <input type="hidden" name="satuan" value="semua paket">
                            <input type="hidden" name="diskon" value="10">
                            <button type="submit" class="btn btn-primary btn-sm shadow" data-bs-toggle="tooltip" title="Ambil Promo">
                                <i class="fas fa-calendar-check me-2"></i>Ambil Promo
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </div>
</section>

<!-- Custom CSS for Promo Section -->
<style>
    .promo-section .card {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        border: none;
    }

    .promo-section .card:hover {
        transform: translateY(-10px);
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
    }

    .promo-section .btn-primary {
        transition: all 0.3s ease;
    }

    .promo-section .btn-primary:hover {
        transform: translateY(-2px);
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    }

    .promo-section .badge {
        font-size: 0.8rem;
    }

    .promo-section .card-body {
        padding: 1.5rem;
    }

    .promo-section .card-footer {
        padding-bottom: 1.5rem;
    }

    .promo-section .fa-3x {
        color: #007bff;
    }

    #promo-countdown {
        font-size: 1.2rem;
    }

    @media (max-width: 768px) {
        .promo-section .card-title {
            font-size: 1.25rem;
        }

        .promo-section .card-body {
            padding: 1rem;
        }

        .promo-section .btn-sm {
            font-size: 0.8rem;
        }

        .promo-section .fa-3x {
            font-size: 2rem;
        }

        #promo-countdown {
            font-size: 1rem;
        }
    }
</style>


<script>
    // Set tanggal akhir promo (misalnya, 3 hari dari sekarang)
    const countDownDate = new Date().getTime() + (360 * 24 * 60 * 60 * 1000);

    // Update countdown setiap 1 detik
    const x = setInterval(function() {
        const now = new Date().getTime();
        const distance = countDownDate - now;

        // Hitung hari, jam, menit, detik
        const days = Math.floor(distance / (1000 * 60 * 60 * 24));
        const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        const seconds = Math.floor((distance % (1000 * 60)) / 1000);

        // Tampilkan countdown
        document.getElementById("countdown").innerHTML = days + "d " + hours + "h " + minutes + "m " + seconds + "s ";

        // Jika countdown selesai
        if (distance < 0) {
            clearInterval(x);
            document.getElementById("countdown").innerHTML = "Promo telah berakhir!";
        }
    }, 1000);
</script>