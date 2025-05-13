<!-- Filter Pencarian Mobil Section -->
<section class="filter-section py-5 bg-white">
    <div class="container">
        <div class="text-center mb-5" data-aos="fade-up" data-aos-duration="1000">
            <h2 class="fw-bold mb-3">Cari Mobil Sesuai Kebutuhan Anda</h2>
            <p class="text-muted">Temukan kendaraan ideal dengan filter cepat dan mudah. Sesuaikan tipe, kapasitas, dan harga!</p>
        </div>
        <div class="card shadow p-4" data-aos="zoom-in" data-aos-duration="1000">
            <div class="card-body">
                <form>
                    <div class="row g-3">
                        <!-- Tipe Mobil -->
                        <div class="col-md-4">
                            <label for="carType" class="form-label fw-semibold">
                                <i class="fas fa-car me-2 text-primary"></i>Pilih Mobil
                            </label>
                            <select class="form-select" id="carType" aria-label="Pilih Mobil">
                                <option selected disabled>Pilih Mobil</option>
                                <option value="Toyota">Toyota Avanza</option>
                                <option value="Honda">Honda CR-V</option>
                                <option value="Mitsubishi">Mitsubishi Xpander</option>
                                <option value="Daihatsu">Daihatsu Xenia</option>
                            </select>
                        </div>
                        <!-- Kapasitas Penumpang -->
                        <div class="col-md-4">
                            <label for="capacity" class="form-label fw-semibold">
                                <i class="fas fa-users me-2 text-primary"></i>Kapasitas Penumpang
                            </label>
                            <select class="form-select" id="capacity" aria-label="Pilih Kapasitas">
                                <option selected disabled>Pilih Kapasitas</option>
                                <option value="2">2 Penumpang</option>
                                <option value="4">4 Penumpang</option>
                                <option value="7">7 Penumpang</option>
                                <option value="8">8+ Penumpang</option>
                            </select>
                        </div>
                        <!-- Harga Per Hari -->
                        <div class="col-md-4">
                            <label for="priceRange" class="form-label fw-semibold">
                                <i class="fas fa-tag me-2 text-primary"></i>Harga Per Hari
                            </label>
                            <select class="form-select" id="priceRange" aria-label="Pilih Harga">
                                <option selected>Pilih Harga</option>
                                <option value="200-400">Rp 200.000 - Rp 400.000</option>
                                <option value="400-600">Rp 400.000 - Rp 600.000</option>
                                <option value="600-1000">Rp 600.000 - Rp 1.000.000</option>
                                <option value="1000+">Rp 1.000.000+</option>
                            </select>
                        </div>
                    </div>
                    <!-- Tombol Cari -->
                    <div class="d-flex justify-content-end mt-4">
                        <button type="submit" class="btn btn-primary btn-lg shadow" data-bs-toggle="tooltip" title="Cari Mobil Sekarang">
                            <i class="fas fa-search me-2"></i>Cari Mobil
                        </button>
                    </div>
                </form>
            </div>
        </div>
        <!-- Keuntungan -->
        <div class="row g-3 mt-4">
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                <div class="d-flex align-items-center">
                    <i class="fas fa-bolt text-primary fa-2x me-3"></i>
                    <div>
                        <h5 class="fw-semibold">Pencarian Cepat</h5>
                        <p class="text-muted">Temukan mobil dalam hitungan detik.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
                <div class="d-flex align-items-center">
                    <i class="fas fa-filter text-primary fa-2x me-3"></i>
                    <div>
                        <h5 class="fw-semibold">Filter Fleksibel</h5>
                        <p class="text-muted">Sesuaikan dengan kebutuhan Anda.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="400">
                <div class="d-flex align-items-center">
                    <i class="fas fa-check-circle text-primary fa-2x me-3"></i>
                    <div>
                        <h5 class="fw-semibold">Hasil Akurat</h5>
                        <p class="text-muted">Dapatkan mobil yang benar-benar cocok.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Custom CSS untuk Tombol di Pojok Kanan -->
<style>
    .filter-section .btn-primary {
        transition: all 0.3s ease;
    }

    .filter-section .btn-primary:hover {
        transform: translateY(-2px);
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    }

    .filter-section .d-flex.justify-content-end {
        margin-top: 1.5rem;
        /* Menambah jarak atas untuk keseimbangan */
    }
</style>