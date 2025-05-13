<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SignUp Form - Rentalin Aja</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="../auth/styles.css">

</head>

<body>
    <!-- Formulir Daftar -->
    <div class="container" data-aos="fade-up" data-aos-duration="1000">
        <h2 data-aos="zoom-in" data-aos-delay="100">Formulir Pendaftaran</h2>
        <form action="../auth/proses_daftar.php" method="post">
            <div class="input-container" data-aos="fade-right" data-aos-delay="200">
                <label for="nama">Nama Lengkap</label>
                <i class="fas fa-user"></i>
                <input type="text" id="nama" name="nama" placeholder="Masukkan Nama Anda" required>
            </div>
            <div class="input-container" data-aos="fade-left" data-aos-delay="300">
                <label for="tgl_lahir">Tanggal Lahir</label>
                <i class="fas fa-calendar-alt"></i>
                <input type="date" id="tgl_lahir" name="tgl_lahir" required>
            </div>
            <div class="input-container" data-aos="fade-right" data-aos-delay="400">
                <label for="email">Email</label>
                <i class="fas fa-envelope"></i>
                <input type="email" id="email" name="email" placeholder="Masukkan Email Anda" required>
            </div>
            <div class="input-container" data-aos="fade-left" data-aos-delay="500">
                <label for="password">Password</label>
                <i class="fas fa-lock"></i>
                <input type="password" id="password" name="password" placeholder="Masukkan Password Anda" required>
            </div>
            <button type="submit" class="submit-btn" data-aos="zoom-in" data-aos-delay="600" data-bs-toggle="tooltip" title="Kirim Form">
                <i class="fas fa-paper-plane"></i> Kirim
            </button>
        </form>
        <div class="link-span" data-aos="fade-up" data-aos-delay="700">
            <p>Sudah punya akun? <span><a href="../auth/login.php" data-bs-toggle="tooltip" title="Login Disini">Login di sini</a></span></p>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../script/aos.js"></script>
    <script src="../script/tooltip.js"></script>
</body>

</html>