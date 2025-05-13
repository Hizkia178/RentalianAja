<!-- Instruksi Pembayaran Section -->
<section class="instruksi-section py-5 bg-gradient-light">
    <div class="container">
        <!-- Header -->
        <div class="text-center mb-5" data-aos="fade-up" data-aos-duration="1000">
            <h2 class="fw-bold display-4 mb-3">Cara Mudah Sewa Mobil</h2>
            <p class="text-muted lead">Ikuti langkah-langkah sederhana ini untuk menyewa mobil tanpa bingung!</p>
        </div>

        <!-- Timeline -->
        <div class="timeline" data-aos="zoom-in" data-aos-duration="1000">
            <!-- Langkah 1: Pilih Mobil -->
            <div class="timeline-item">
                <div class="timeline-icon">
                    <i class="fas fa-car"></i>
                </div>
                <div class="timeline-content">
                    <h5 class="fw-bold">1. Pilih Mobil</h5>
                    <p class="text-muted">Jelajahi koleksi mobil kami dan pilih yang sesuai dengan kebutuhan Anda.</p>
                </div>
            </div>
            <!-- Langkah 2: Booking & Isi Data -->
            <div class="timeline-item">
                <div class="timeline-icon">
                    <i class="fas fa-calendar-alt"></i>
                </div>
                <div class="timeline-content">
                    <h5 class="fw-bold">2. Booking & Isi Data</h5>
                    <p class="text-muted">Masukkan tanggal sewa, durasi, dan data pribadi Anda di formulir pemesanan.</p>
                </div>
            </div>
            <!-- Langkah 3: Lakukan Pembayaran -->
            <div class="timeline-item">
                <div class="timeline-icon">
                    <i class="fas fa-money-bill-wave"></i>
                </div>
                <div class="timeline-content">
                    <h5 class="fw-bold">3. Lakukan Pembayaran</h5>
                    <p class="text-muted">Pilih metode pembayaran (Transfer Bank, E-wallet, Kartu Kredit, QRIS, dll.) dan lakukan pembayaran.</p>
                </div>
            </div>
            <!-- Langkah 4: Upload Bukti -->
            <div class="timeline-item">
                <div class="timeline-icon">
                    <i class="fas fa-upload"></i>
                </div>
                <div class="timeline-content">
                    <h5 class="fw-bold">4. Upload Bukti Pembayaran</h5>
                    <p class="text-muted">Unggah bukti pembayaran melalui website kami atau kirim via WhatsApp.</p>
                </div>
            </div>
            <!-- Langkah 5: Dapat Konfirmasi -->
            <div class="timeline-item">
                <div class="timeline-icon">
                    <i class="fas fa-check-circle"></i>
                </div>
                <div class="timeline-content">
                    <h5 class="fw-bold">5. Dapat Konfirmasi</h5>
                    <p class="text-muted">Terima konfirmasi pemesanan via WhatsApp atau email dalam waktu 1 jam.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Custom CSS for Instruksi Pembayaran Section -->
<style>
    .instruksi-section .timeline {
        position: relative;
        max-width: 800px;
        margin: 0 auto;
    }
    .instruksi-section .timeline-item {
        display: flex;
        align-items: flex-start;
        margin-bottom: 2rem;
        position: relative;
    }
    .instruksi-section .timeline-icon {
        width: 50px;
        height: 50px;
        background-color: #007bff;
        color: white;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.5rem;
        flex-shrink: 0;
        z-index: 1;
    }
    .instruksi-section .timeline-content {
        background-color: white;
        padding: 1.5rem;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        margin-left: 1.5rem;
        flex-grow: 1;
    }
    .instruksi-section .timeline::before {
        content: '';
        position: absolute;
        top: 0;
        bottom: 0;
        left: 25px;
        width: 4px;
        background-color: #007bff;
        z-index: 0;
    }
    .instruksi-section .timeline-item:last-child::before {
        content: '';
        position: absolute;
        top: 0;
        bottom: 0;
        left: 25px;
        width: 4px;
        background-color: transparent;
    }
    .instruksi-section .btn-primary {
        transition: all 0.3s ease;
    }
    .instruksi-section .btn-primary:hover {
        transform: translateY(-2px);
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    }
    @media (max-width: 768px) {
        .instruksi-section .timeline-icon {
            width: 40px;
            height: 40px;
            font-size: 1.2rem;
        }
        .instruksi-section .timeline-content {
            padding: 1rem;
            margin-left: 1rem;
        }
        .instruksi-section .timeline::before {
            left: 20px;
        }
        .instruksi-section .btn-lg {
            font-size: 1rem;
        }
    }
</style>