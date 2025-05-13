<!-- Integrasi dengan Booking Tracker Section -->
<section class="tracker-section py-5 bg-gradient-light">
    <div class="container">
        <!-- Header -->
        <div class="text-center mb-5" data-aos="fade-up" data-aos-duration="1000">
            <h2 class="fw-bold display-4 mb-3">Lacak Status Pemesanan Anda</h2>
            <p class="text-muted lead">Pantau setiap langkah proses sewa mobil Anda dengan mudah!</p>
        </div>

        <!-- Booking Tracker -->
        <div class="row justify-content-center" data-aos="zoom-in" data-aos-duration="1000">
            <div class="col-lg-8">
                <div class="tracker-wrapper shadow-lg p-4 bg-white rounded">
                    <!-- Progress Bar -->
                    <div class="progress mb-4" style="height: 10px;">
                        <div class="progress-bar bg-success" role="progressbar" style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>

                    <!-- Tracker Steps -->
                    <div class="d-flex justify-content-between flex-wrap">
                        <!-- Step 1: Booking -->
                        <div class="tracker-step text-center">
                            <div class="tracker-icon completed mb-2">
                                <i class="fas fa-calendar-alt fa-2x"></i>
                            </div>
                            <h6 class="fw-bold">Booking</h6>
                            <p class="text-muted small">Pemesanan Anda telah diterima.</p>
                        </div>
                        <!-- Step 2: Pembayaran Diterima -->
                        <div class="tracker-step text-center">
                            <div class="tracker-icon active mb-2">
                                <i class="fas fa-check-circle fa-2x"></i>
                            </div>
                            <h6 class="fw-bold">Pembayaran Diterima</h6>
                            <p class="text-muted small">Bukti pembayaran telah diverifikasi.</p>
                        </div>
                        <!-- Step 3: Mobil Dipersiapkan -->
                        <div class="tracker-step text-center">
                            <div class="tracker-icon mb-2">
                                <i class="fas fa-tools fa-2x"></i>
                            </div>
                            <h6 class="fw-bold">Mobil Dipersiapkan</h6>
                            <p class="text-muted small">Mobil sedang diperiksa.</p>
                        </div>
                        <!-- Step 4: Siap Antar -->
                        <div class="tracker-step text-center">
                            <div class="tracker-icon mb-2">
                                <i class="fas fa-truck fa-2x"></i>
                            </div>
                            <h6 class="fw-bold">Siap Antar</h6>
                            <p class="text-muted small">Mobil siap dikirim ke lokasi Anda.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Custom CSS for Booking Tracker Section -->
<style>
    .tracker-section .tracker-wrapper {
        border-radius: 12px;
    }
    .tracker-section .progress-bar {
        transition: width 0.5s ease-in-out;
    }
    .tracker-section .tracker-step {
        flex: 1;
        min-width: 120px;
        padding: 0 10px;
    }
    .tracker-section .tracker-icon {
        width: 50px;
        height: 50px;
        background-color: #e9ecef;
        color: #6c757d;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto;
        transition: all 0.3s ease;
    }
    .tracker-section .tracker-icon.completed {
        background-color: #28a745;
        color: white;
    }
    .tracker-section .tracker-icon.active {
        background-color: #007bff;
        color: white;
        animation: pulse 1.5s infinite;
    }
    .tracker-section .tracker-step h6 {
        font-size: 1rem;
        margin-bottom: 0.5rem;
    }
    .tracker-section .tracker-step p {
        font-size: 0.8rem;
    }
    @keyframes pulse {
        0% { transform: scale(1); }
        50% { transform: scale(1.1); }
        100% { transform: scale(1); }
    }
    @media (max-width: 768px) {
        .tracker-section .tracker-step {
            min-width: 100%;
            margin-bottom: 1.5rem;
        }
        .tracker-section .tracker-icon {
            width: 40px;
            height: 40px;
            font-size: 1.2rem;
        }
        .tracker-section .tracker-step h6 {
            font-size: 0.9rem;
        }
        .tracker-section .tracker-step p {
            font-size: 0.75rem;
        }
    }
</style>