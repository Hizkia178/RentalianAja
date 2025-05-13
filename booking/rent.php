<?php
session_start();
require '../databases/db.php';

if (!isset($_SESSION['user_id'])) {
    showSweetAlert("Anda harus login terlebih dahulu.", "warning", "../auth/login.php");
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id_mobil = isset($_POST['id_mobil']) ? intval($_POST['id_mobil']) : 0;
    $id_user  = $_SESSION['user_id'];

    if (!$id_mobil) {
        showSweetAlert("Data pemesanan tidak lengkap.", "warning", "../cars/index.php");
    }

    // Cek apakah mobil ada
    $query  = "SELECT * FROM mobil WHERE id = $id_mobil";
    $result = $conn->query($query);
    if ($result->num_rows === 0) {
        showSweetAlert("Mobil tidak ditemukan.", "error", "../cars/index.php");
    }

    // Cek apakah mobil sudah disewa (status tidak 'selesai')
    $query_check = "SELECT * FROM sewa 
                    WHERE mobil_id = ? 
                    AND status != 'selesai'"; // Cek mobil yang masih disewa (status bukan 'selesai')

    if ($stmt_check = $conn->prepare($query_check)) {
        $stmt_check->bind_param("i", $id_mobil);
        $stmt_check->execute();
        $stmt_check->store_result();

        if ($stmt_check->num_rows > 0) {
            showSweetAlert("Mobil ini sudah disewa. Silakan pilih mobil lain.", "warning", "../cars/index.php");
            exit();
        }
        $stmt_check->close();
    }

    // Menyimpan data pemesanan
    $tanggal_mulai = $_POST['tanggal_mulai'] ?? '';
    $tanggal_selesai = $_POST['tanggal_selesai'] ?? '';
    if (!$tanggal_mulai || !$tanggal_selesai) {
        showSweetAlert("Tanggal pemesanan tidak lengkap.", "warning", "../cars/index.php");
    }

    $start  = new DateTime($tanggal_mulai);
    $end    = new DateTime($tanggal_selesai);
    $durasi = $start->diff($end)->days + 1;
    $tanggal_sewa = $tanggal_mulai;

    $stmt = $conn->prepare("INSERT INTO sewa (user_id, mobil_id, tanggal_sewa, durasi_sewa, status) VALUES (?, ?, ?, ?, 'belum bayar')");
    $stmt->bind_param("iisi", $id_user, $id_mobil, $tanggal_sewa, $durasi);
    $stmt->execute();

    if ($stmt->affected_rows > 0) {
        showSweetAlert("Pemesanan berhasil! Segera selesaikan pembayaran.", "success", "../cars/index.php");
    } else {
        showSweetAlert("Terjadi kesalahan saat menyimpan data.", "error", "../cars/index.php");
    }

    $stmt->close();
    $conn->close();
}

function showSweetAlert($message, $icon, $redirect)
{
?>
    <!DOCTYPE html>
    <html lang="id">
    <head>
        <meta charset="UTF-8">
        <title>Notifikasi</title>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    </head>
    <body>
        <script>
            Swal.fire({
                icon: '<?= $icon ?>',
                title: '<?= addslashes($message) ?>',
                showConfirmButton: false,
                timer: 3000
            }).then(() => {
                window.location.href = '<?= $redirect ?>';
            });

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
