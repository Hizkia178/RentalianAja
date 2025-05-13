<!-- Section Ulasan Pelanggan -->
<section class="py-5 bg-white">
  <div class="container">
    <!-- Judul Section -->
    <div class="text-center mb-5">
      <h2 class="mb-3 fw-bold" data-aos="zoom-in" data-aos-delay="200" style="color: #2c3e50;">Ulasan Pelanggan</h2>
      <p class="text-muted" data-aos="fade-up" data-aos-delay="300">
        Dengarkan cerita bahagia dari pelanggan kami yang telah mempercayai <strong>Rentalin</strong> untuk setiap perjalanan mereka.
      </p>
    </div>

    <!-- Slider Ulasan -->
    <div class="overflow-hidden position-relative">
      <div class="d-flex flex-nowrap scroll-feedback">
        <!-- Kartu Feedback 1 -->
        <div class="card shadow rounded-4 me-4 p-4" style="min-width: 320px; background: #fff5f5; border: none;" data-aos="fade-left" data-aos-delay="400">
          <div class="d-flex align-items-center mb-3">
            <img src="https://randomuser.me/api/portraits/men/45.jpg" alt="Foto Pengguna" class="rounded-circle me-3" style="width: 50px; height: 50px; object-fit: cover;">
            <div>
              <h6 class="mb-0 fw-semibold" style="color: #e74c3c;">Aldo Siregar</h6>
              <small class="text-muted">Medan, Indonesia</small>
            </div>
          </div>
          <div class="star-display mb-3">★★★★★</div>
          <p class="mb-0"><i class="fas fa-quote-left me-2 text-secondary"></i>Rentalin bikin liburan saya nyaman banget. Mobil bersih, layanan cepat!</p>
        </div>

        <!-- Kartu Feedback 2 -->
        <div class="card shadow rounded-4 me-4 p-4" style="min-width: 320px; background: #f0f9ff; border: none;" data-aos="fade-left" data-aos-delay="500">
          <div class="d-flex align-items-center mb-3">
            <img src="https://randomuser.me/api/portraits/women/67.jpg" alt="Foto Pengguna" class="rounded-circle me-3" style="width: 50px; height: 50px; object-fit: cover;">
            <div>
              <h6 class="mb-0 fw-semibold" style="color: #3498db;">Dian Puspita</h6>
              <small class="text-muted">Jakarta, Indonesia</small>
            </div>
          </div>
          <div class="star-display mb-3">★★★★☆</div>
          <p class="mb-0"><i class="fas fa-quote-left me-2 text-secondary"></i>Puas banget! Harga terjangkau, kualitas oke.</p>
        </div>

        <!-- Kartu Feedback 3 -->
        <div class="card shadow rounded-4 me-4 p-4" style="min-width: 320px; background: #e6ffed; border: none;" data-aos="fade-left" data-aos-delay="600">
          <div class="d-flex align-items-center mb-3">
            <img src="https://randomuser.me/api/portraits/men/23.jpg" alt="Foto Pengguna" class="rounded-circle me-3" style="width: 50px; height: 50px; object-fit: cover;">
            <div>
              <h6 class="mb-0 fw-semibold" style="color: #2ecc71;">Rizky Maulana</h6>
              <small class="text-muted">Bandung, Indonesia</small>
            </div>
          </div>
          <div class="star-display mb-3">★★★★★</div>
          <p class="mb-0"><i class="fas fa-quote-left me-2 text-secondary"></i>Pelayanan ramah dan responsif. Sangat direkomendasikan!</p>
        </div>

        <!-- Kartu Feedback 4 (Duplikat) -->
        <div class="card shadow rounded-4 me-4 p-4" style="min-width: 320px; background: #fff5f5; border: none;" data-aos="fade-left" data-aos-delay="400">
          <div class="d-flex align-items-center mb-3">
            <img src="https://randomuser.me/api/portraits/men/45.jpg" alt="Foto Pengguna" class="rounded-circle me-3" style="width: 50px; height: 50px; object-fit: cover;">
            <div>
              <h6 class="mb-0 fw-semibold" style="color: #e74c3c;">Aldo Siregar</h6>
              <small class="text-muted">Medan, Indonesia</small>
            </div>
          </div>
          <div class="star-display mb-3">★★★★★</div>
          <p class="mb-0"><i class="fas fa-quote-left me-2 text-secondary"></i>Rentalin bikin liburan saya nyaman banget. Mobil bersih, layanan cepat!</p>
        </div>

        <!-- Kartu Feedback 5 (Duplikat) -->
        <div class="card shadow rounded-4 me-4 p-4" style="min-width: 320px; background: #f0f9ff; border: none;" data-aos="fade-left" data-aos-delay="500">
          <div class="d-flex align-items-center mb-3">
            <img src="https://randomuser.me/api/portraits/women/67.jpg" alt="Foto Pengguna" class="rounded-circle me-3" style="width: 50px; height: 50px; object-fit: cover;">
            <div>
              <h6 class="mb-0 fw-semibold" style="color: #3498db;">Dian Puspita</h6>
              <small class="text-muted">Jakarta, Indonesia</small>
            </div>
          </div>
          <div class="star-display mb-3">★★★★☆</div>
          <p class="mb-0"><i class="fas fa-quote-left me-2 text-secondary"></i>Puas banget! Harga terjangkau, kualitas oke.</p>
        </div>
      </div>
    </div>
  </div>
</section>


<style>
  .scroll-feedback {
    animation: scrollX 60s linear infinite;
  }

  @keyframes scrollX {
    from {
      transform: translateX(0);
    }

    to {
      transform: translateX(calc(-100% - 1.5rem));
    }
  }

  .scroll-feedback:hover {
    animation-play-state: running;
  }

  .card {
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    border-radius: 15px !important;
    border: none !important;
  }

  .star-display {
    color: #f1c40f;
    font-size: 1.2rem;
  }

  .card-body {
    padding: 1.5rem;
  }

  .card p {
    font-size: 0.95rem;
    line-height: 1.6;
    color: #34495e;
  }
</style>