<?php
session_start();
include '../databases/db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $user_id = $_SESSION['user_id'];
    $nama_paket = $_POST['paket'];
    $harga = $_POST['harga'];
    $satuan = $_POST['satuan'];
    $tanggal_pilih = date('Y-m-d H:i:s');

    // Cek apakah pengguna sudah memilih paket ini sebelumnya
    $checkQuery = "SELECT id FROM paket_pilihan WHERE user_id = ? AND nama_paket = ?";
    if ($checkStmt = $conn->prepare($checkQuery)) {
        $checkStmt->bind_param("is", $user_id, $nama_paket);
        $checkStmt->execute();
        $checkStmt->store_result();

        if ($checkStmt->num_rows > 0) {
            showSweetAlert("Anda sudah memilih paket ini sebelumnya.", "warning", "../cars/index.php");
            exit();
        }
        $checkStmt->close();
    }

    // Jika belum ada, simpan data paket
    $sql = "INSERT INTO paket_pilihan (user_id, nama_paket, harga, satuan, tanggal_pilih)
            VALUES (?, ?, ?, ?, ?)";

    if ($stmt = $conn->prepare($sql)) {
        $stmt->bind_param("issss", $user_id, $nama_paket, $harga, $satuan, $tanggal_pilih);

        if ($stmt->execute()) {
            showSweetAlert("Paket berhasil dipilih!", "success", "../cars/index.php");
        } else {
            showSweetAlert("Terjadi kesalahan saat menyimpan data.", "error", "../cars/index.php");
        }
        $stmt->close();
    } else {
        showSweetAlert("Gagal menyiapkan query.", "error", "../cars/index.php");
    }
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
