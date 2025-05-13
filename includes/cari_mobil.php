<?php
include '../databases/db.php'; // Menghubungkan ke database

// Mengecek apakah data POST ada
if (isset($_POST['car']) && isset($_POST['location'])) {
    $carName = $_POST['car'];
    $location = $_POST['location'];

    // Query untuk mencari mobil
    $sql = "SELECT * FROM mobil WHERE nama_mobil = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $carName);
    $stmt->execute();
    $result = $stmt->get_result();

    // Jika mobil ditemukan
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        echo '
            <p><strong>Nama Mobil:</strong> ' . $row['nama_mobil'] . '</p>
            <p><strong>Harga per Hari:</strong> ' . number_format($row['harga_per_hari'], 0, ',', '.') . '</p>
            <p><strong>Rating:</strong> ' . $row['rating'] . ' / 5</p>
            <p><strong>Badge:</strong> ' . $row['badge'] . '</p>
            <p><strong>Deskripsi:</strong> ' . $row['deskripsi'] . '</p>
            <p><strong>Kapasitas Penumpang:</strong> ' . $row['kapasitas_penumpang'] . ' orang</p>
            <p><strong>Bahan Bakar:</strong> ' . $row['bahan_bakar'] . '</p>
        ';
    } else {
        echo ''; // Jika mobil tidak ditemukan
    }
} else {
    echo ''; // Jika data tidak lengkap
}
?>
