<?php
session_start();
require_once '../databases/db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email    = trim($_POST['email']);
    $password = $_POST['password'];

    if (empty($email) || empty($password)) {
        showNotyf("Email dan password wajib diisi!", "error", "../auth/login.php");
        exit();
    }

    $stmt = $conn->prepare("SELECT id, nama, email, password FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows === 1) {
        $stmt->bind_result($id, $nama, $dbEmail, $dbPassword);
        $stmt->fetch();

        if (password_verify($password, $dbPassword)) {
            $_SESSION['user_id'] = $id;
            $_SESSION['nama']    = $nama;
            $_SESSION['email']   = $dbEmail;

            showNotyf("Login berhasil, selamat datang!", "success", "../main/index.php");
        } else {
            showNotyf("Password salah. Coba lagi.", "error", "../auth/login.php");
        }
    } else {
        showNotyf("Email tidak ditemukan. Silakan daftar.", "warning", "../auth/daftar.php");
    }

    $stmt->close();
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
        <title>Notifikasi Login</title>
        <link href="https://cdn.jsdelivr.net/npm/notyf/notyf.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/notyf/notyf.min.js"></script>
    </head>
    <body>
        <script>
            const notyf = new Notyf({
                duration: 3000, // Durasi notifikasi
                position: { x: 'right', y: 'top' }, // Posisi notifikasi
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
