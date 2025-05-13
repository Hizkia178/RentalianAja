<!-- Metode Pembayaran Section -->
<section class="metode-section py-5 bg-white">
    <div class="container">
        <!-- Header -->
        <div class="text-center mb-5" data-aos="fade-up" data-aos-duration="1000">
            <h2 class="fw-bold display-4 mb-3">Metode Pembayaran</h2>
            <p class="text-muted lead">Kami menyediakan berbagai opsi pembayaran untuk kenyamanan Anda!</p>
        </div>

        <!-- Payment Method Cards -->
        <div class="row g-4" data-aos="zoom-in" data-aos-duration="1000">
            <!-- Transfer Bank -->
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 shadow-lg position-relative overflow-hidden">
                    <div class="card-body text-center">
                        <i class="fas fa-university fa-3x text-primary mb-3"></i>
                        <h5 class="card-title fw-bold">Transfer Bank</h5>
                        <p class="text-muted">Pilih bank favorit Anda: BCA, Mandiri, BNI, BRI, dan lainnya.</p>
                        <p class="text-muted small">Pemrosesan instan, tanpa biaya tambahan.</p>
                    </div>
                </div>
            </div>
            <!-- E-wallet -->
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 shadow-lg position-relative overflow-hidden">
                    <div class="card-body text-center">
                        <i class="fas fa-wallet fa-3x text-primary mb-3"></i>
                        <h5 class="card-title fw-bold">E-wallet</h5>
                        <p class="text-muted">Bayar dengan OVO, GoPay, DANA, atau ShopeePay.</p>
                        <p class="text-muted small">Cepat, aman, dan praktis.</p>
                    </div>
                </div>
            </div>
            <!-- Kartu Kredit -->
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 shadow-lg position-relative overflow-hidden">
                    <div class="card-body text-center">
                        <i class="fas fa-credit-card fa-3x text-primary mb-3"></i>
                        <h5 class="card-title fw-bold">Kartu Kredit</h5>
                        <p class="text-muted">Gunakan Visa atau MasterCard untuk pembayaran fleksibel.</p>
                        <p class="text-muted small">Proses aman dengan enkripsi.</p>
                    </div>
                </div>
            </div>
            <!-- QRIS -->
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 shadow-lg position-relative overflow-hidden">
                    <span class="badge bg-success position-absolute top-0 start-0 m-3 z-3">Cepat</span>
                    <div class="card-body text-center">
                        <i class="fas fa-qrcode fa-3x text-primary mb-3"></i>
                        <h5 class="card-title fw-bold">QRIS</h5>
                        <p class="text-muted">Scan QR untuk pembayaran instan dari aplikasi apa saja.</p>
                        <p class="text-muted small">Didukung semua bank dan e-wallet.</p>
                    </div>
                </div>
            </div>
            <!-- Bayar di Tempat -->
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 shadow-lg position-relative overflow-hidden">
                    <div class="card-body text-center">
                        <i class="fas fa-money-bill-wave fa-3x text-primary mb-3"></i>
                        <h5 class="card-title fw-bold">Bayar di Tempat</h5>
                        <p class="text-muted">Bayar tunai saat mobil diantar (Cash on Delivery).</p>
                        <p class="text-muted small">Tersedia di wilayah tertentu.</p>
                    </div>
                </div>
            </div>
            <!-- Cicilan -->
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 shadow-lg position-relative overflow-hidden">
                    <span class="badge bg-info position-absolute top-0 start-0 m-3 z-3">Fleksibel</span>
                    <div class="card-body text-center">
                        <i class="fas fa-hand-holding-usd fa-3x text-primary mb-3"></i>
                        <h5 class="card-title fw-bold">Cicilan</h5>
                        <p class="text-muted">Bayar dengan cicilan via Kredivo atau Akulaku.</p>
                        <p class="text-muted small">Syarat dan ketentuan berlaku.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Custom CSS for Metode Pembayaran Section -->
<style>
    .metode-section .card {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        border: none;
    }
    .metode-section .card:hover {
        transform: translateY(-10px);
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
    }
    .metode-section .btn-primary {
        transition: all 0.3s ease;
    }
    .metode-section .btn-primary:hover {
        transform: translateY(-2px);
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    }
    .metode-section .badge {
        font-size: 0.8rem;
    }
    .metode-section .card-body {
        padding: 1.5rem;
    }
    .metode-section .fa-3x {
        color: #007bff;
    }
    @media (max-width: 768px) {
        .metode-section .card-title {
            font-size: 1.25rem;
        }
        .metode-section .card-body {
            padding: 1rem;
        }
        .metode-section .btn-sm, .metode-section .btn-lg {
            font-size: 0.8rem;
        }
        .metode-section .fa-3x {
            font-size: 2rem;
        }
    }
</style>