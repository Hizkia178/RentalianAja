<?php
session_start();
include '../databases/db.php';  

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Mengambil data dari POST
    $user_id = $_SESSION['user_id'];  
    $nama_paket = $_POST['nama_paket']; 
    $harga = $_POST['harga'];          
    $satuan = $_POST['satuan'];         
    $diskon = $_POST['diskon'];       
    $tanggal_pilih = date('Y-m-d H:i:s');  

    // Cek apakah user sudah mengklaim promo sebelumnya
    $check_query = "SELECT * FROM promo WHERE user_id = ? AND nama_paket = ?";
    if ($stmt_check = $conn->prepare($check_query)) {
        $stmt_check->bind_param("is", $user_id, $nama_paket);
        $stmt_check->execute();
        $stmt_check->store_result();

        if ($stmt_check->num_rows > 0) {
            // Jika sudah ada, tampilkan notifikasi
            showSweetAlert("Anda sudah mengklaim promo ini sebelumnya.", "warning", "../pricing/index.php");
            $stmt_check->close();
            exit();
        }
        $stmt_check->close();
    }

    // Query untuk memasukkan data promo ke dalam database
    $sql = "INSERT INTO promo (user_id, nama_paket, harga, satuan, diskon, tanggal_pilih)
            VALUES (?, ?, ?, ?, ?, ?)";

    if ($stmt = $conn->prepare($sql)) {
        $stmt->bind_param("issdss", $user_id, $nama_paket, $harga, $satuan, $diskon, $tanggal_pilih);

        if ($stmt->execute()) {
            showSweetAlert("Promo berhasil dipilih!", "success", "../pricing/index.php");
        } else {
            showSweetAlert("Terjadi kesalahan saat menyimpan data. Coba lagi.", "error", "../pricing/index.php");
        }
        $stmt->close();
    } else {
        showSweetAlert("Gagal menyiapkan query.", "error", "../pricing/index.php");
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
