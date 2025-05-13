<?php
session_start();
require_once '../databases/db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nama       = htmlspecialchars(trim($_POST['nama']));
    $tgl_lahir  = $_POST['tgl_lahir'];
    $email      = htmlspecialchars(trim($_POST['email']));
    $password   = $_POST['password'];

    // Validasi kosong
    if (empty($nama) || empty($tgl_lahir) || empty($email) || empty($password)) {
        showNotyf("Semua kolom wajib diisi!", "error", "../auth/daftar.php");
        exit();
    }

    // Cek apakah email sudah terdaftar
    $cek = $conn->prepare("SELECT id FROM users WHERE email = ?");
    $cek->bind_param("s", $email);
    $cek->execute();
    $cek->store_result();

    if ($cek->num_rows > 0) {
        showNotyf("Email sudah digunakan. Silakan pakai email lain.", "warning", "../auth/daftar.php");
        exit();
    }

    // Simpan user baru
    $passwordHash = password_hash($password, PASSWORD_DEFAULT);
    $stmt = $conn->prepare("INSERT INTO users (nama, tgl_lahir, email, password) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $nama, $tgl_lahir, $email, $passwordHash);

    if ($stmt->execute()) {
        showNotyf("Pendaftaran berhasil! Silakan login.", "success", "../auth/login.php");
    } else {
        showNotyf("Gagal mendaftar. Coba lagi.", "error", "../auth/daftar.php");
    }

    $stmt->close();
    $cek->close();
    $conn->close();
}

// Fungsi Notyf Notification
function showNotyf($message, $type, $redirect)
{
?>
    <!DOCTYPE html>
    <html lang="id">
    <head>
        <meta charset="UTF-8">
        <title>Notifikasi Pendaftaran</title>
        <link href="https://cdn.jsdelivr.net/npm/notyf/notyf.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/notyf/notyf.min.js"></script>
    </head>
    <body>
        <script>
            const notyf = new Notyf({
                duration: 3000, 
                position: { x: 'right', y: 'top' }, 
            });

            notyf.<?= $type ?>('<?= addslashes($message) ?>');

            // Redirect setelah notifikasi selesai
            setTimeout(() => {
                window.location.href = '<?= $redirect ?>';
            }, 3100);
        </script>
    </body>
    </html>
<?php
    exit();
}
?>
