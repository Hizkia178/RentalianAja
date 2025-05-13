<?php
session_start();
session_unset();
session_destroy();

showSweetAlert("Logout berhasil. Sampai jumpa lagi!", "info", "../auth/login.php");

// Fungsi showSweetAlert
function showSweetAlert($message, $icon, $redirect)
{
?>
    <!DOCTYPE html>
    <html lang="id">
    <head>
        <meta charset="UTF-8">
        <title>Notifikasi Logout</title>
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
