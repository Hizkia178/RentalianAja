<?php
require_once '../databases/db.php';

// Cek apakah pengguna sudah login
if (!isset($_SESSION['user_id'])) {
    header("Location: ../auth/login.php");
    exit();
}

$sql = "SELECT * FROM mobil";
$result = $conn->query($sql);

if (!$result) {
    die("Error: " . $conn->error);
}
?>

<section id="booking" class="gallery-section py-5 bg-gradient-light position-relative overflow-hidden">
    <div class="container">
        <!-- Header -->
        <div class="text-center mb-5" data-aos="fade-down" data-aos-duration="1000">
            <h2 class="fw-bold display-4 mb-3">Koleksi Mobil Impian Anda</h2>
            <p class="text-muted lead">Pilih kendaraan terbaik untuk perjalanan tak terlupakan, dari MPV keluarga hingga SUV premium!</p>
        </div>

        <!-- Swiper Carousel -->
        <div class="swiper car-gallery mb-5" data-aos="zoom-in" data-aos-duration="1000">
            <div class="swiper-wrapper">
                <?php while ($row = $result->fetch_assoc()) {
                    if ($row['gambar_blob']) {
                        $imageData = base64_encode($row['gambar_blob']);
                        $imageSrc = 'data:image/jpeg;base64,' . $imageData;
                    } else {
                        $imageSrc = 'path/to/default/image.jpg';
                    }
                ?>
                    <div class="swiper-slide">
                        <div class="card h-100 shadow-lg position-relative overflow-hidden car-card">
                            <span class="badge bg-<?php echo $row['badge_color']; ?> position-absolute top-0 start-0 m-3 z-3">
                                <?php echo $row['badge_text']; ?>
                            </span>
                            <img src="<?php echo $imageSrc; ?>" class="card-img-top car-img" alt="<?php echo $row['nama_mobil']; ?>" style="height: 200px; object-fit: cover;">
                            <div class="card-body">
                                <h5 class="card-title fw-bold"><?php echo $row['nama_mobil']; ?></h5>
                                <div class="d-flex align-items-center mb-2">
                                    <?php for ($i = 1; $i <= 5; $i++) {
                                        echo $i <= $row['rating'] ? '<i class="fas fa-star text-warning me-1"></i>' : '<i class="far fa-star text-warning me-1"></i>';
                                    } ?>
                                    <span class="ms-2 text-muted">(<?php echo $row['rating']; ?>)</span>
                                </div>
                                <p class="card-text text-muted">Harga: <span class="text-primary fw-semibold"><?php echo "Rp " . number_format($row['harga_per_hari'], 0, ',', '.'); ?>/hari</span></p>
                                <p class="card-text"><?php echo $row['deskripsi']; ?></p>
                                <div class="d-flex gap-3 mt-3">
                                    <span><i class="fas fa-users text-primary me-2"></i><?php echo $row['kapasitas_penumpang']; ?> Penumpang</span>
                                    <span><i class="fas fa-gas-pump text-primary me-2"></i><?php echo $row['bahan_bakar']; ?></span>
                                </div>
                            </div>
                            <div class="card-footer bg-transparent border-0 d-flex gap-2">
                                <button class="btn btn-primary btn-sm flex-grow-1 shadow" data-bs-toggle="modal" data-bs-target="#carModal<?php echo $row['id']; ?>">
                                    <i class="fas fa-info-circle me-2"></i>Detail
                                </button>
                                <button class="btn btn-success btn-sm flex-grow-1 shadow" data-bs-toggle="modal" data-bs-target="#rentModal<?php echo $row['id']; ?>">
                                    <i class="fas fa-calendar-check me-2"></i>Sewa
                                </button>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
            <div class="swiper-button-prev" data-aos="fade-right" data-aos-delay="200"></div>
            <div class="swiper-button-next" data-aos="fade-left" data-aos-delay="200"></div>
            <div class="swiper-pagination" data-aos="fade-up" data-aos-delay="300"></div>
        </div>

        <!-- Modals -->
        <?php $result->data_seek(0);
        while ($row = $result->fetch_assoc()) {
            $imageSrc = $row['gambar_blob'] ? 'data:image/jpeg;base64,' . base64_encode($row['gambar_blob']) : 'path/to/default/image.jpg';
        ?>
            <!-- Modal Detail -->
            <div class="modal fade" id="carModal<?php echo $row['id']; ?>" tabindex="-1" aria-labelledby="carModal<?php echo $row['id']; ?>Label" aria-hidden="true">
                <div class="modal-dialog modal-sm modal-dialog-centered" style="max-width: 400px;">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title fw-bold" id="carModal<?php echo $row['id']; ?>Label"><?php echo $row['nama_mobil']; ?></h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <img src="<?php echo $imageSrc; ?>" class="img-fluid rounded mb-3" alt="<?php echo $row['nama_mobil']; ?>" style="height: 150px; object-fit: cover; width: 100%;">
                            <span class="badge bg-<?php echo $row['badge_color']; ?> mb-2"><?php echo $row['badge_text']; ?></span>
                            <div class="d-flex align-items-center mb-2">
                                <?php for ($i = 1; $i <= 5; $i++) {
                                    echo $i <= $row['rating'] ? '<i class="fas fa-star text-warning me-1"></i>' : '<i class="far fa-star text-warning me-1"></i>';
                                } ?>
                                <span class="ms-2 text-muted">(<?php echo $row['rating']; ?>)</span>
                            </div>
                            <p class="card-text text-muted">Harga: <span class="text-primary fw-semibold"><?php echo "Rp " . number_format($row['harga_per_hari'], 0, ',', '.'); ?>/hari</span></p>
                            <p class="card-text"><?php echo $row['deskripsi']; ?></p>
                            <div class="d-flex gap-3 mt-3">
                                <span><i class="fas fa-users text-primary me-2"></i><?php echo $row['kapasitas_penumpang']; ?> Penumpang</span>
                                <span><i class="fas fa-gas-pump text-primary me-2"></i><?php echo $row['bahan_bakar']; ?></span>
                            </div>
                        </div>
                        <div class="modal-footer d-flex gap-2">
                            <button type="button" class="btn btn-outline-secondary btn-sm shadow" data-bs-dismiss="modal">Tutup</button>
                            <button class="btn btn-success btn-sm shadow" data-bs-toggle="modal" data-bs-target="#rentModal<?php echo $row['id']; ?>"><i class="fas fa-calendar-check me-2"></i>Sewa</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal Sewa -->
            <div class="modal fade" id="rentModal<?php echo $row['id']; ?>" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <form class="modal-content rent-form" data-id="<?php echo $row['id']; ?>">
                        <div class="modal-header">
                            <h5 class="modal-title fw-bold">
                                <i class="fas fa-car me-2"></i> Sewa: <?php echo $row['nama_mobil']; ?>
                            </h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                        </div>
                        <div class="modal-body">
                            <input type="date" name="tanggal_mulai" class="form-control mb-3" required>
                            <input type="date" name="tanggal_selesai" class="form-control mb-3" required>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                               Batal
                            </button>
                            <button type="submit" class="btn btn-success">
                                <i class="fas fa-check-circle me-2"></i> Sewa Sekarang
                            </button>
                        </div>
                    </form>
                </div>
            </div>


        <?php } ?>
    </div>
</section>

<script>
    document.querySelectorAll('.rent-form').forEach(form => {
        form.addEventListener('submit', function(e) {
            e.preventDefault();

            const id = this.dataset.id;
            const tanggal_mulai = this.querySelector('input[name="tanggal_mulai"]').value;
            const tanggal_selesai = this.querySelector('input[name="tanggal_selesai"]').value;

            fetch('../booking/rent.php', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/x-www-form-urlencoded'
                    },
                    body: new URLSearchParams({
                        id_mobil: id,
                        tanggal_mulai: tanggal_mulai,
                        tanggal_selesai: tanggal_selesai
                    })
                })
                .then(res => res.text())
                .then(res => {
                    document.open();
                    document.write(res);
                    document.close();
                })
                .catch(() => {
                    alert('Terjadi kesalahan. Silakan coba lagi.');
                });
        });
    });
</script>



<!-- Custom CSS for Hover Effects, Modal, and Swiper -->
<style>
    .car-card {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .car-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2) !important;
    }

    .car-img {
        transition: transform 0.3s ease;
    }

    .car-card:hover .car-img {
        transform: scale(1.05);
    }

    .modal-content {
        border-radius: 10px;
        overflow: hidden;
    }

    .modal-body img {
        max-height: 150px;
        object-fit: cover;
    }

    .modal-footer .btn {
        transition: all 0.3s ease;
    }

    .modal-footer .btn:hover {
        transform: translateY(-2px);
    }

    /* Sembunyikan pagination dots */
    .swiper-pagination {
        display: none !important;
    }

    /* Sembunyikan tombol navigasi prev/next */
    .swiper-button-prev,
    .swiper-button-next {
        display: none !important;
    }
</style>