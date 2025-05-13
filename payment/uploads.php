<!-- Upload Bukti Pembayaran Section -->
<section class="upload-section py-5 bg-white">
    <div class="container">
        <!-- Header -->
        <div class="text-center mb-5" data-aos="fade-up" data-aos-duration="1000">
            <h2 class="fw-bold display-4 mb-3">Upload Bukti Pembayaran</h2>
            <p class="text-muted lead">Kirim bukti transfer Anda dengan mudah untuk verifikasi cepat!</p>
        </div>

        <!-- Upload Form -->
        <div class="row justify-content-center" data-aos="zoom-in" data-aos-duration="1000">
            <div class="col-lg-8">
                <form id="uploadForm" action="/api/upload-proof" method="POST" enctype="multipart/form-data" class="shadow-lg p-4 rounded bg-light">
                    <!-- File Input -->
                    <div class="mb-3">
                        <label for="paymentProof" class="form-label fw-semibold">Bukti Transfer (JPG, PNG, PDF)</label>
                        <input type="file" class="form-control" id="paymentProof" name="paymentProof" accept="image/jpeg,image/png,application/pdf" required>
                        <div class="form-text">Maksimal 5MB. Pastikan bukti transfer jelas.</div>
                        <!-- Preview Image -->
                        <div id="imagePreview" class="mt-3" style="display: none;">
                            <img id="previewImg" class="img-fluid rounded" style="max-height: 200px; object-fit: contain;" alt="Preview Bukti Transfer">
                        </div>
                    </div>
                    <!-- Nama Pengirim -->
                    <div class="mb-3">
                        <label for="senderName" class="form-label fw-semibold">Nama Pengirim</label>
                        <input type="text" class="form-control" id="senderName" name="senderName" placeholder="Masukkan nama sesuai rekening" required>
                    </div>
                    <!-- Tanggal Transaksi -->
                    <div class="mb-3">
                        <label for="transactionDate" class="form-label fw-semibold">Tanggal Transaksi</label>
                        <input type="date" class="form-control" id="transactionDate" name="transactionDate" required>
                    </div>
                    <!-- Submit Button -->
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary btn-lg shadow" data-bs-toggle="tooltip" title="Submit Bukti">
                            <i class="fas fa-upload me-2"></i>Submit Bukti
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- Custom CSS for Upload Section -->
<style>
    .upload-section .form-control {
        transition: border-color 0.3s ease;
    }

    .upload-section .form-control:focus {
        border-color: #007bff;
        box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
    }

    .upload-section .btn-primary {
        transition: all 0.3s ease;
    }

    .upload-section .btn-primary:hover {
        transform: translateY(-2px);
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    }

    .upload-section .shadow-lg {
        border-radius: 12px;
    }

    @media (max-width: 768px) {
        .upload-section .form-label {
            font-size: 0.9rem;
        }

        .upload-section .form-control {
            font-size: 0.85rem;
        }

        .upload-section .btn-lg {
            font-size: 1rem;
        }

        .upload-section #previewImg {
            max-height: 150px;
        }
    }
</style>

<!-- JavaScript for File Preview and Validation -->
<script>
    document.getElementById('paymentProof').addEventListener('change', function(event) {
        const file = event.target.files[0];
        const previewContainer = document.getElementById('imagePreview');
        const previewImg = document.getElementById('previewImg');

        // Validasi ukuran file (maks 5MB)
        if (file && file.size > 5 * 1024 * 1024) {
            Swal.fire({
                title: 'Ukuran file terlalu besar!',
                text: 'Ukuran file maksimal 5MB!',
                icon: 'error',
                confirmButtonText: 'OK'
            });
            event.target.value = '';
            previewContainer.style.display = 'none';
            return;
        }

        // Validasi tipe file
        const allowedTypes = ['image/jpeg', 'image/png', 'application/pdf'];
        if (file && !allowedTypes.includes(file.type)) {
            Swal.fire({
                title: 'Tipe file tidak valid!',
                text: 'File harus berupa JPG, PNG, atau PDF!',
                icon: 'error',
                confirmButtonText: 'OK'
            });
            event.target.value = '';
            previewContainer.style.display = 'none';
            return;
        }

        // Tampilkan pratinjau jika file adalah gambar
        if (file && file.type.startsWith('image/')) {
            const reader = new FileReader();
            reader.onload = function(e) {
                previewImg.src = e.target.result;
                previewContainer.style.display = 'block';
            };
            reader.readAsDataURL(file);
        } else {
            previewContainer.style.display = 'none';
        }
    });

    document.getElementById('uploadForm').addEventListener('submit', function(event) {
        event.preventDefault(); // Hentikan submit untuk validasi

        const paymentProof = document.getElementById('paymentProof').files[0];
        const senderName = document.getElementById('senderName').value.trim();
        const transactionDate = document.getElementById('transactionDate').value;

        // Validasi input
        if (!paymentProof) {
            Swal.fire({
                title: 'Bukti transfer belum diunggah!',
                text: 'Harap unggah bukti transfer terlebih dahulu.',
                icon: 'warning',
                confirmButtonText: 'OK'
            });
            return;
        }
        if (!senderName) {
            Swal.fire({
                title: 'Nama pengirim tidak boleh kosong!',
                text: 'Harap masukkan nama pengirim.',
                icon: 'warning',
                confirmButtonText: 'OK'
            });
            return;
        }
        if (!transactionDate) {
            Swal.fire({
                title: 'Tanggal transaksi belum dipilih!',
                text: 'Harap pilih tanggal transaksi.',
                icon: 'warning',
                confirmButtonText: 'OK'
            });
            return;
        }

        // Simulasi submit (ganti dengan logika backend sebenarnya)
        console.log('Form submitted:', {
            paymentProof: paymentProof.name,
            senderName: senderName,
            transactionDate: transactionDate
        });

        // SweetAlert setelah berhasil
        Swal.fire({
            title: 'Bukti pembayaran berhasil diunggah!',
            text: 'Anda akan menerima konfirmasi segera.',
            icon: 'success',
            confirmButtonText: 'OK'
        });

        // Reset form
        document.getElementById('uploadForm').reset();
        document.getElementById('imagePreview').style.display = 'none';
    });
</script>