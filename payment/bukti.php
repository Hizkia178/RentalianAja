
<section class="booking-fee-section py-5 bg-white">
    <div class="container">
        <!-- Header -->
        <div class="text-center mb-5" data-aos="fade-up" data-aos-duration="1000">
            <h2 class="fw-bold display-4 mb-3">Booking Fee / Down Payment</h2>
            <p class="text-muted lead">Pelajari ketentuan pembayaran kami dengan cara yang interaktif!</p>
        </div>

        <!-- Interactive Tabs -->
        <div class="row justify-content-center" data-aos="zoom-in" data-aos-duration="1000">
            <div class="col-lg-8">
                <ul class="nav nav-tabs border-0 mb-4" id="dpTabs" role="tablist">
                    <!-- Tab 1: Minimal DP -->
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active d-flex align-items-center" id="dp-tab" data-bs-toggle="tab" data-bs-target="#dp-content" type="button" role="tab" aria-controls="dp-content" aria-selected="true">
                            <i class="fas fa-money-check-alt fa-2x me-2"></i> Minimal DP
                        </button>
                    </li>
                    <!-- Tab 2: Sisa Pembayaran -->
                    <li class="nav-item" role="presentation">
                        <button class="nav-link d-flex align-items-center" id="remaining-tab" data-bs-toggle="tab" data-bs-target="#remaining-content" type="button" role="tab" aria-controls="remaining-content" aria-selected="false">
                            <i class="fas fa-car fa-2x me-2"></i> Sisa Pembayaran
                        </button>
                    </li>
                    <!-- Tab 3: Refund & Reschedule -->
                    <li class="nav-item" role="presentation">
                        <button class="nav-link d-flex align-items-center" id="refund-tab" data-bs-toggle="tab" data-bs-target="#refund-content" type="button" role="tab" aria-controls="refund-content" aria-selected="false">
                            <i class="fas fa-calendar-check fa-2x me-2"></i> Refund & Reschedule
                        </button>
                    </li>
                </ul>
                <div class="tab-content shadow-lg rounded p-4 bg-light" id="dpTabContent">
                    <!-- Content: Minimal DP -->
                    <div class="tab-pane fade show active" id="dp-content" role="tabpanel" aria-labelledby="dp-tab">
                        <div class="d-flex align-items-start">
                            <div class="flex-shrink-0 me-3">
                                <i class="fas fa-money-check-alt fa-3x text-primary"></i>
                            </div>
                            <div>
                                <h5 class="fw-bold mb-2">Minimal DP 30%</h5>
                                <p class="text-muted">Bayar hanya 30% dari total biaya sewa sebagai uang muka untuk mengamankan pemesanan Anda.</p>
                                <span class="badge bg-success">Mudah & Terjangkau</span>
                            </div>
                        </div>
                    </div>
                    <!-- Content: Sisa Pembayaran -->
                    <div class="tab-pane fade" id="remaining-content" role="tabpanel" aria-labelledby="remaining-tab">
                        <div class="d-flex align-items-start">
                            <div class="flex-shrink-0 me-3">
                                <i class="fas fa-car fa-3x text-primary"></i>
                            </div>
                            <div>
                                <h5 class="fw-bold mb-2">Sisa Dibayar Saat Ambil Mobil</h5>
                                <p class="text-muted">Lunasi sisa pembayaran saat mobil diantar, dengan opsi tunai, transfer, atau metode lain.</p>
                                <span class="badge bg-info">Fleksibel</span>
                            </div>
                        </div>
                    </div>
                    <!-- Content: Refund & Reschedule -->
                    <div class="tab-pane fade" id="refund-content" role="tabpanel" aria-labelledby="refund-tab">
                        <div class="d-flex align-items-start">
                            <div class="flex-shrink-0 me-3">
                                <i class="fas fa-calendar-check fa-3x text-primary"></i>
                            </div>
                            <div>
                                <h5 class="fw-bold mb-2">Aturan Refund & Reschedule</h5>
                                <ul class="list-unstyled text-muted mb-0">
                                    <li><i class="fas fa-check text-success me-2"></i>Refund penuh untuk pembatalan 48 jam sebelum waktu sewa.</li>
                                    <li><i class="fas fa-check text-success me-2"></i>Reschedule gratis 1 kali dengan pemberitahuan 24 jam sebelumnya.</li>
                                    <li><i class="fas fa-check text-success me-2"></i>Pengembalian DP dalam 7 hari kerja setelah pembatalan.</li>
                                </ul>
                                <span class="badge bg-warning">Transparan</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Custom CSS for Booking Fee Interactive Section -->
<style>
    .booking-fee-section .nav-tabs {
        justify-content: center;
    }
    .booking-fee-section .nav-link {
        color: #6c757d;
        border: none;
        padding: 1rem 2rem;
        transition: all 0.3s ease;
        border-radius: 8px;
        margin: 0 0.5rem;
        background-color: #f8f9fa;
    }
    .booking-fee-section .nav-link:hover {
        background-color: #e9ecef;
        transform: scale(1.05);
    }
    .booking-fee-section .nav-link.active {
        background-color: #007bff;
        color: white;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.15);
    }
    .booking-fee-section .nav-link i {
        transition: transform 0.3s ease;
    }
    .booking-fee-section .nav-link:hover i {
        transform: scale(1.2);
    }
    .booking-fee-section .tab-content {
        border-radius: 8px;
        min-height: 200px;
    }
    .booking-fee-section .tab-pane {
        animation: fadeIn 0.5s ease-in-out;
    }
    .booking-fee-section .badge {
        font-size: 0.8rem;
    }
    .booking-fee-section .fa-3x {
        color: #007bff;
    }
    .booking-fee-section ul li {
        margin-bottom: 0.5rem;
    }
    @keyframes fadeIn {
        from { opacity: 0; transform: translateY(10px); }
        to { opacity: 1; transform: translateY(0); }
    }
    @media (max-width: 768px) {
        .booking-fee-section .nav-link {
            padding: 0.75rem 1rem;
            font-size: 0.9rem;
            margin: 0 0.25rem;
        }
        .booking-fee-section .nav-link i {
            font-size: 1.5rem;
        }
        .booking-fee-section .tab-content {
            padding: 1rem;
        }
        .booking-fee-section .fa-3x {
            font-size: 2rem;
        }
        .booking-fee-section .badge {
            font-size: 0.7rem;
        }
    }
</style>