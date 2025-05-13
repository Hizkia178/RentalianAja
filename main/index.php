<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- FontAwesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
    <!--Google Font-->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" />
    <!--Boxicons-->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <!-- CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Halaman Utama Rental Mobil</title>
    <!--Custom Css-->
    <link rel="stylesheet" href="../assets/scroll.css">
    <link rel="stylesheet" href="../assets/navbar.css">
</head>

<body>
    <!--Navbar-->
    <?php require '../includes/navbar.php'; ?>

    <!--Main Content-->
    <div class="mt-1">
        <?php require '../includes/welcome.php'; ?>
        <?php require '../includes/features.php'; ?>
        <?php require '../includes/faq.php'; ?>
        <?php require '../includes/feedback.php'; ?>
        <?php require '../includes/contact.php'; ?>
    </div>

    <!-- JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Bootstrap JS and Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
    <script src="../script/aos.js"></script>
    <script src="../script/tooltip.js"></script>
    <!-- Swiper JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <!-- Scroll to Top Button -->
    <button type="button" class="btn btn-primary btn-lg rounded-circle" id="btnScrollTop" data-bs-toggle="tooltip" title="Scroll to top">
        <i class="fas fa-arrow-up"></i>
    </button>
    <!--Footter-->
    <?php require '../includes/footer.php'; ?>
    <script src="../script/scroll.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>

</html>