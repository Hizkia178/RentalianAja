<!-- Paket Durasi Variatif Section -->
<section class="paket-section py-5 bg-gradient-light">
    <div class="container">
        <!-- Header -->
        <div class="text-center mb-5" data-aos="fade-up" data-aos-duration="1000">
            <h2 class="fw-bold display-4 mb-3">Pilih Paket Sewa Anda</h2>
            <p class="text-muted lead">Kami punya paket untuk setiap kebutuhan: dari perjalanan singkat hingga sewa jangka panjang!</p>
        </div>

        <?php
        include '../databases/db.php';

        $query = "SELECT * FROM paket_sewa WHERE is_aktif = 1";
        $result = mysqli_query($conn, $query);
        ?>

        <div class="row g-4" data-aos="zoom-in" data-aos-duration="1000">
            <?php while ($row = mysqli_fetch_assoc($result)): ?>
                <div class="col-md-6 col-lg-3">
                    <div class="card h-100 shadow-lg position-relative overflow-hidden">
                        <?php if ($row['badge_text']): ?>
                            <span class="badge <?= $row['badge_class']; ?> position-absolute top-0 start-0 m-3 z-3"><?= $row['badge_text']; ?></span>
                        <?php endif; ?>
                        <div class="card-body text-center">
                            <h5 class="card-title fw-bold"><?= $row['nama_paket']; ?></h5>
                            <p class="text-muted"><?= $row['deskripsi']; ?></p>
                            <h4 class="text-primary fw-semibold">Rp <?= number_format($row['harga'], 0, ',', '.'); ?><span class="fs-6 text-muted">/<?= $row['satuan']; ?></span></h4>
                            <ul class="list-unstyled mt-3">
                                <li><i class="fas fa-check text-success me-2"></i><?= $row['fitur_1']; ?></li>
                                <li><i class="fas fa-check text-success me-2"></i><?= $row['fitur_2']; ?></li>
                                <li><i class="fas fa-check text-success me-2"></i><?= $row['fitur_3']; ?></li>
                            </ul>
                        </div>
                        <div class="card-footer bg-transparent border-0 text-center">
                            <?php if ($row['is_button_form']): ?>
                                <form action="../promo/paket.php" method="POST">
                                    <input type="hidden" name="paket" value="<?= $row['nama_paket']; ?>">
                                    <input type="hidden" name="harga" value="<?= $row['harga']; ?>">
                                    <input type="hidden" name="satuan" value="<?= $row['satuan']; ?>">
                                    <button type="submit" class="btn btn-primary btn-sm shadow" data-bs-toggle="tooltip" title="Pilih Paket">
                                        <i class="fas fa-calendar-check me-2"></i>Pilih Paket
                                    </button>
                                </form>
                            <?php else: ?>
                                <a href="#" class="btn btn-primary btn-sm shadow pilih-paket-jam" data-bs-toggle="tooltip" title="Pilih Paket"
                                    onclick="event.preventDefault(); showUnavailableFeature();">
                                    <i class="fas fa-calendar-check me-2"></i>Pilih Paket
                                </a>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
        </div>

    </div>
</section>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    function showUnavailableFeature() {
        Swal.fire({
            icon: 'info',
            title: 'Fitur Belum Tersedia',
            text: 'Sabar ya, masih dikoding.',
            confirmButtonText: 'Oke'
        });
    }
</script>
<!-- Custom CSS for Paket Section -->
<style>
    .paket-section .card {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        border: none;
    }

    .paket-section .card:hover {
        transform: translateY(-10px);
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
    }

    .paket-section .btn-primary {
        transition: all 0.3s ease;
    }

    .paket-section .btn-primary:hover {
        transform: translateY(-2px);
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    }

    .paket-section .badge {
        font-size: 0.8rem;
    }

    .paket-section .card-body {
        padding: 1.5rem;
    }

    .paket-section .card-footer {
        padding-bottom: 1.5rem;
    }

    @media (max-width: 768px) {
        .paket-section .card-title {
            font-size: 1.25rem;
        }

        .paket-section .card-body {
            padding: 1rem;
        }

        .paket-section .btn-sm {
            font-size: 0.8rem;
        }
    }
</style>