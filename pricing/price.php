<!-- Prices Section -->
<section class="prices-section py-5 bg-white">
    <div class="container">
        <!-- Header -->
        <div class="text-center mb-5" data-aos="fade-up" data-aos-duration="1000">
            <h2 class="fw-bold display-4 mb-3">Harga Sewa Mobil</h2>
            <p class="text-muted lead">Temukan harga sewa transparan untuk semua mobil kami. Pilih sesuai kebutuhan Anda!</p>
        </div>

        <!-- Tabel Harga -->
        <div class="table-responsive" data-aos="zoom-in" data-aos-duration="1000">
            <table class="table table-hover table-bordered align-middle">
                <thead class="table-primary">
                    <tr>
                        <th scope="col">Nama Mobil</th>
                        <th scope="col">Gambar</th>
                        <th scope="col">Harga Per Hari</th>
                        <th scope="col">Harga Per Minggu</th>
                        <th scope="col">Harga Per Bulan</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Mobil 1: Toyota Avanza -->
                    <tr>
                        <td class="fw-semibold">Toyota Avanza <span class="badge bg-success ms-2">Diskon 15%</span></td>
                        <td><img src="../api/avanza.jpeg" alt="Toyota Avanza" class="img-fluid rounded" style="max-height: 80px; object-fit: cover;"></td>
                        <td>Rp 400.000</td>
                        <td>Rp 2.500.000</td>
                        <td>Rp 9.000.000</td>
                        <td>
                            <a href="#" onclick="konfirmasiBooking(event)" class="btn btn-success btn-sm shadow" data-bs-toggle="tooltip" title="Book Now">
                                <i class="fas fa-calendar-check me-2"></i>Book Now
                            </a>

                        </td>

                    </tr>
                    <!-- Mobil 2: Honda CR-V -->
                    <tr>
                        <td class="fw-semibold">Honda CR-V <span class="badge bg-warning ms-2">Best Seller</span></td>
                        <td><img src="../api/honda.jpeg" alt="Honda CR-V" class="img-fluid rounded" style="max-height: 80px; object-fit: cover;"></td>
                        <td>Rp 800.000</td>
                        <td>Rp 5.000.000</td>
                        <td>Rp 18.000.000</td>
                        <td>
                            <a href="#" onclick="konfirmasiBooking(event)" class="btn btn-success btn-sm shadow" data-bs-toggle="tooltip" title="Book Now">
                                <i class="fas fa-calendar-check me-2"></i>Book Now
                            </a>

                        </td>

                    </tr>
                    <!-- Mobil 3: Mitsubishi Xpander -->
                    <tr>
                        <td class="fw-semibold">Mitsubishi Xpander <span class="badge bg-info ms-2">Baru!</span></td>
                        <td><img src="../api/misthsubi.webp" alt="Mitsubishi Xpander" class="img-fluid rounded" style="max-height: 80px; object-fit: cover;"></td>
                        <td>Rp 450.000</td>
                        <td>Rp 2.800.000</td>
                        <td>Rp 10.000.000</td>
                        <td>
                            <a href="#" onclick="konfirmasiBooking(event)" class="btn btn-success btn-sm shadow" data-bs-toggle="tooltip" title="Book Now">
                                <i class="fas fa-calendar-check me-2"></i>Book Now
                            </a>

                        </td>

                    </tr>
                    <!-- Mobil 4: Daihatsu Xenia -->
                    <tr>
                        <td class="fw-semibold">Daihatsu Xenia <span class="badge bg-danger ms-2">Hot Deal</span></td>
                        <td><img src="../api/daihatsu.jpeg" alt="Daihatsu Xenia" class="img-fluid rounded" style="max-height: 80px; object-fit: cover;"></td>
                        <td>Rp 420.000</td>
                        <td>Rp 2.600.000</td>
                        <td>Rp 9.500.000</td>
                        <td>
                            <a href="#" onclick="konfirmasiBooking(event)" class="btn btn-success btn-sm shadow" data-bs-toggle="tooltip" title="Book Now">
                                <i class="fas fa-calendar-check me-2"></i>Book Now
                            </a>

                        </td>

                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>
<script src="../script/move.js"></script>
<!-- Custom CSS for Prices Section -->
<style>
    .prices-section .table {
        border-radius: 8px;
        overflow: hidden;
    }

    .prices-section .table th,
    .prices-section .table td {
        vertical-align: middle;
        text-align: center;
    }

    .prices-section .table-hover tbody tr:hover {
        background-color: #f8f9fa;
        transition: background-color 0.3s ease;
    }

    .prices-section .btn-success {
        transition: all 0.3s ease;
    }

    .prices-section .btn-success:hover {
        transform: translateY(-2px);
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    }

    .prices-section img {
        max-height: 80px;
        object-fit: cover;
    }

    @media (max-width: 768px) {

        .prices-section .table th,
        .prices-section .table td {
            font-size: 0.9rem;
        }

        .prices-section .btn-sm {
            padding: 0.25rem 0.5rem;
            font-size: 0.8rem;
        }

        .prices-section img {
            max-height: 60px;
        }
    }
</style>