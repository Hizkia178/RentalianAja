<!-- Navbar Rental Mobil dengan Profile Dropdown dan Dark Mode Toggle -->
<nav class="navbar navbar-expand-lg navbar-light bg-white shadow sticky-top py-3" style="font-family: 'Poppins', sans-serif;" data-aos="fade-down" data-aos-delay="200">
    <div class="container">
        <a class="navbar-brand fw-bold text-primary d-flex align-items-center" href="#">
            <i class='bx bxs-car bx-sm me-2 text-primary'></i>RentalinAja
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#rentalNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-end" id="rentalNavbar">
            <ul class="navbar-nav align-items-center">
                <li class="nav-item mx-2">
                    <a class="nav-link fw-medium d-flex align-items-center nav-hover" href="../main/index.php">
                        <i class="fas fa-house-user text-primary me-2"></i>Home
                    </a>
                </li>
                <li class="nav-item mx-2">
                    <a class="nav-link fw-medium d-flex align-items-center nav-hover" href="../cars/index.php">
                        <i class="fas fa-car me-2 text-primary"></i>Our Cars
                    </a>
                </li>
                <li class="nav-item mx-2">
                    <a class="nav-link fw-medium d-flex align-items-center nav-hover" href="../pricing/index.php">
                        <i class="fas fa-tags me-2 text-primary"></i>Pricing
                    </a>
                </li>
                <li class="nav-item mx-2">
                    <a class="nav-link fw-medium d-flex align-items-center nav-hover" href="../contact/index.php">
                        <i class="fas fa-envelope-open-text text-primary me-2"></i>Contact
                    </a>
                </li>

                <li class="nav-item mx-2">
                    <a class="nav-link fw-medium d-flex align-items-center nav-hover" href="../payment/index.php">
                        <i class="fas fa-credit-card me-2 text-primary"></i>Payment
                    </a>
                </li>

                <!-- Profile Dropdown -->
                <li class="nav-item dropdown mx-2">
                    <a class="nav-link dropdown-toggle fw-medium d-flex align-items-center nav-hover" href="#" id="profileDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fas fa-user-circle me-2 text-primary"></i>Profile
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end border-0 shadow-lg p-3 rounded-4" aria-labelledby="profileDropdown" style="min-width: 280px;">
                        <!-- Profile Card -->
                        <?php
                        session_start();
                        require_once '../databases/db.php';

                        //cek user apakah login
                        if (!isset($_SESSION['user_id'])) {
                            header("Location: ../auth/login.php");
                        }

                        $userId = $_SESSION['user_id'];

                        $query = $conn->prepare("SELECT nama, email FROM users WHERE id = ?");
                        $query->bind_param("i", $userId);
                        $query->execute();
                        $query->bind_result($nama, $email);
                        $query->fetch();
                        $query->close();
                        ?>
                        <div class="profile-card" data-aos="fade-left" data-aos-delay="300">
                            <i class="fas fa-user-circle profile-icon"></i>
                            <div class="profile-details">
                                <h6><?= htmlspecialchars($nama) ?></h6>
                                <small><?= htmlspecialchars($email) ?></small>
                            </div>
                        </div>
                        <hr class="my-3">
                        <?php
                        include '../databases/db.php';

                        $user_id = $_SESSION['user_id'];

                        $query = "SELECT COUNT(*) as total FROM sewa WHERE user_id = $user_id AND status = 'belum bayar'";
                        $result = mysqli_query($conn, $query);
                        $data = mysqli_fetch_assoc($result);
                        $notif_count = $data['total'];
                        ?>

                        <a href="#" class="dropdown-item d-flex align-items-center mb-2 quick-access-link position-relative" data-bs-toggle="tooltip" data-bs-placement="left" title="Lihat riwayat pemesanan Anda">
                            <i class="fas fa-history me-2 text-primary"></i>
                            Booking History

                            <?php if ($notif_count > 0): ?>
                                <span class="badge bg-danger ms-2">
                                    <?= $notif_count; ?>
                                    <span class="visually-hidden">notifikasi belum bayar</span>
                                </span>
                            <?php endif; ?>
                        </a>

                        <a href="#" class="dropdown-item d-flex align-items-center mb-2 quick-access-link" data-bs-toggle="tooltip" data-bs-placement="left" title="Kelola detail pembayaran dan tagihan">
                            <i class="fas fa-credit-card me-2 text-primary"></i>Payment Details
                        </a>
                        <a href="#" class="dropdown-item d-flex align-items-center mb-2 quick-access-link" data-bs-toggle="tooltip" data-bs-placement="left" title="Hubungi tim dukungan kami" onclick="showAlert()">
                            <i class="fas fa-headset me-2 text-primary"></i>Customer Support
                        </a>

                        <button id="darkModeToggle" class="dropdown-item d-flex align-items-center mb-2 quick-access-link" data-bs-toggle="tooltip" data-bs-placement="left" title="Aktifkan atau nonaktifkan mode gelap">
                            <i id="darkModeIcon" class="fas fa-moon me-2 text-primary"></i>Dark Mode
                        </button>


                        <hr class="my-3">
                        <a href="../auth/logout.php" class="btn btn-outline-danger w-100 d-flex align-items-center justify-content-center gap-2 shadow" data-bs-toggle="tooltip" title="Click to logout">
                            <i class="fas fa-sign-out-alt"></i>Logout
                        </a>
                    </ul>
                </li>
            </ul>

            <a href="#" onclick="konfirmasiBooking(event)" class="btn btn-primary ms-3 d-flex align-items-center shadow" data-bs-toggle="tooltip" title="Book Now" data-aos="zoom-in" data-aos-delay="400">
                <i class='bx bx-calendar-check me-2'></i>Book Now
            </a>
        </div>
    </div>
</nav>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    function showAlert() {
        Swal.fire({
            title: 'Fitur ini tidak ada di dalam project',
            text: 'Apakah Anda ingin melanjutkan ke halaman support atau mencoba fitur lainnya?',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Lanjutkan',
            cancelButtonText: 'Batal',
        }).then((result) => {
            if (result.isConfirmed) {
               window.location.href = '../main/index.php';
            }
        });
    }
</script>
<script src="../script/move.js"></script>
<!-- Custom CSS for Quick Access Links and Dark Mode -->
<style>
    .quick-access-link {
        border-radius: 6px;
        padding: 10px 15px;
        transition: all 0.3s ease;
        background: none;
        border: none;
        width: 100%;
        text-align: left;
    }

    .quick-access-link:hover {
        background-color: #f8f9fa;
        transform: translateX(5px);
    }

    .quick-access-link i {
        transition: transform 0.3s ease;
    }

    .quick-access-link:hover i {
        transform: scale(1.2);
    }

    /* Dark Mode Styling */
    .dark-mode {
        background-color: #1a1a1a;
        color: #e0e0e0;
    }

    .dark-mode .navbar {
        background-color: #2c2c2c !important;
    }

    .dark-mode .navbar-brand,
    .dark-mode .nav-link,
    .dark-mode .btn-primary {
        color: #80d8ff !important;
    }

    .dark-mode .nav-link i,
    .dark-mode .navbar-brand i,
    .dark-mode .btn-primary i {
        color: #80d8ff !important;
    }

    .dark-mode .dropdown-menu {
        background-color: #2c2c2c;
        color: #e0e0e0;
    }

    .dark-mode .dropdown-item {
        color: #e0e0e0;
    }

    .dark-mode .dropdown-item:hover {
        background-color: #3a3a3a;
    }

    .dark-mode .quick-access-link i {
        color: #80d8ff;
    }

    .dark-mode .profile-card small,
    .dark-mode .profile-details h6 {
        color: #e0e0e0;
    }

    .dark-mode .btn-outline-danger {
        color: #ff6b6b;
        border-color: #ff6b6b;
    }

    .dark-mode .btn-outline-danger:hover {
        background-color: #ff6b6b;
        color: #2c2c2c;
    }

    .dark-mode hr {
        border-color: #4a4a4a;
    }

    /* Smooth Transitions */
    body,
    .navbar,
    .nav-link,
    .dropdown-menu,
    .dropdown-item,
    .btn,
    hr {
        transition: background-color 0.3s ease, color 0.3s ease, border-color 0.3s ease;
    }

    @media (max-width: 768px) {
        .quick-access-link {
            font-size: 0.9rem;
            padding: 8px 12px;
        }

        .quick-access-link i {
            font-size: 0.9rem;
        }
    }
</style>

<script>
    // Fungsi untuk mengatur ikon berdasarkan mode
    function setDarkModeIcon(isDark) {
        const icon = document.getElementById('darkModeIcon');
        icon.className = isDark ? 'fas fa-sun me-2 text-primary' : 'fas fa-moon me-2 text-primary';
    }

    // Fungsi untuk toggle dark mode
    function toggleDarkMode() {
        const body = document.body;
        const isDark = body.classList.toggle('dark-mode');
        localStorage.setItem('theme', isDark ? 'dark' : 'light');
        setDarkModeIcon(isDark);
    }

    // Inisialisasi saat halaman dimuat
    document.addEventListener('DOMContentLoaded', () => {
        const savedTheme = localStorage.getItem('theme');
        if (savedTheme === 'dark') {
            document.body.classList.add('dark-mode');
            setDarkModeIcon(true);
        }

        // Event listener untuk tombol toggle
        document.getElementById('darkModeToggle').addEventListener('click', toggleDarkMode);

        // Inisialisasi tooltip
        var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
        var tooltipList = tooltipTriggerList.map(function(tooltipTriggerEl) {
            return new bootstrap.Tooltip(tooltipTriggerEl);
        });
    });
</script>