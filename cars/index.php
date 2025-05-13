<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Cars</title>
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
    <!--Custom Css-->
    <link rel="stylesheet" href="../assets/scroll.css">
    <link rel="stylesheet" href="../assets/navbar.css">
    <link rel="stylesheet" href="../assets/body.css">
</head>

<body>


    <!--Navbar-->
    <?php require '../includes/navbar.php'; ?>
    <div class="mt-1">
        <!--Main Content Here -->
        <?php require '../cars/hero.php'; ?>
        <?php require '../cars/filter.php'; ?>
        <?php require '../cars/galery.php'; ?>
        <?php require '../pricing/paket.php'; ?>
        <?php require '../cars/security.php'; ?>
    </div>
    <!-- JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
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
    <script src="../script/swiper.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>

</html>