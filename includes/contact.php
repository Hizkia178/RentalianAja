<!-- Contact Section -->
<section class="py-5 bg-white" id="contact">
  <div class="container">
    <!-- Section Title -->
    <div class="text-center mb-5">
      <h2 data-aos="fade-up" data-aos-delay="200">Contact Us</h2>
      <p class="text-muted" data-aos="fade-up" data-aos-delay="300">Have questions or need assistance? Fill out the form or visit our location.</p>
    </div>

    <div class="row g-4">
      <!-- Contact Form -->
      <div class="col-lg-6" data-aos="fade-right" data-aos-delay="400">
        <div class="card shadow p-4 border-0 rounded-4">
          <form id="contactForm">
            <div class="mb-3">
              <label for="name" class="form-label"><i class="fas fa-user me-2"></i>Your Name</label>
              <input type="text" class="form-control" id="name" placeholder="Enter your name">
            </div>
            <div class="mb-3">
              <label for="email" class="form-label"><i class="fas fa-envelope me-2"></i>Email Address</label>
              <input type="email" class="form-control" id="email" placeholder="Enter your email">
            </div>
            <div class="mb-3">
              <label for="message" class="form-label"><i class="fas fa-comment-dots me-2"></i>Message</label>
              <textarea class="form-control" id="message" rows="5" placeholder="Your message here..."></textarea>
            </div>
            <button type="submit" class="btn btn-primary w-100 shadow" data-bs-toggle="tooltip" title="Send Message">
              <i class="fas fa-paper-plane me-2"></i>Send Message
            </button>
          </form>
        </div>
      </div>

      <!-- Google Maps -->
      <div class="col-lg-6" data-aos="fade-left" data-aos-delay="500">
        <div class="card shadow border-0 rounded-4 overflow-hidden h-100">
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3982.054798521051!2d98.654742!3d3.589403!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x303131c598eb8893%3A0x419ab0ba7a3ef632!2sUniversitas%20Sumatera%20Utara!5e0!3m2!1sid!2sid!4v1681109877654!5m2!1sid!2sid"
            width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade">
          </iframe>
        </div>
      </div>
    </div>
  </div>
</section>

<script>
    document.getElementById('contactForm').addEventListener('submit', function(event) {
        event.preventDefault(); 
        const name = document.getElementById('name').value.trim();
        const email = document.getElementById('email').value.trim();
        const message = document.getElementById('message').value.trim();
        if (!name || !email || !message) {
            Swal.fire({
                title: 'Form Tidak Lengkap',
                text: 'Harap isi semua kolom.',
                icon: 'warning',
                confirmButtonText: 'OK'
            });
            return;
        }
        console.log('Pesan Dikirim:', {
            name: name,
            email: email,
            message: message
        });
        Swal.fire({
            title: 'Pesan Anda Sudah Terkirim!',
            text: 'Pesan Anda telah berhasil dikirim ke admin. Tunggu balasan dari kami.',
            icon: 'success',
            confirmButtonText: 'OK'
        }).then(() => {
            document.getElementById('contactForm').reset();
        });
    });
</script>