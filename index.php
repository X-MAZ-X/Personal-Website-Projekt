<?php require_once('.\assets\layout\header.php')?>
 
 
    <section id="hero" class="hero section dark-background">

      <div id="hero-carousel" data-bs-interval="5000" class="container carousel carousel-fade" data-bs-ride="carousel">

        <!-- Slide 1 -->
        <div class="carousel-item active">
          <div class="carousel-container">
            <h2 class="animate__animated animate__fadeInDown">Welcome to <span>my EK Site</span></h2>
            <p class="animate__animated animate__fadeInUp">Hier präsentirer Ich ihnen meine Seite zur bearbeitung des Website Prjekt</p>
            <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Mehr Information</a>
          </div>
        </div>

        <!-- Slide 2 -->
        <div class="carousel-item">
          <div class="carousel-container">
            <h2 class="animate__animated animate__fadeInDown">Kontaktiern</h2>
            <p class="animate__animated animate__fadeInUp">Wenn Sie mehr Information möchten, könne Sie mich Kontaktiern.</p>
            <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Mehr Information</a>
          </div>
        </div>

        <!-- Slide 3 -->
        <div class="carousel-item">
          <div class="carousel-container">
            <h2 class="animate__animated animate__fadeInDown">Lebenslauf</h2>
            <p class="animate__animated animate__fadeInUp">Hier könne Sie meinen Lebenslauf finden.</p>
            <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Mehr Information</a>
          </div>
        </div>

        <a class="carousel-control-prev" href="#hero-carousel" role="button" data-bs-slide="prev">
          <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
        </a>

        <a class="carousel-control-next" href="#hero-carousel" role="button" data-bs-slide="next">
          <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
        </a>

      </div>

      <svg class="hero-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28 " preserveAspectRatio="none">
        <defs>
          <path id="wave-path" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z"></path>
        </defs>
        <g class="wave1">
          <use xlink:href="#wave-path" x="50" y="3"></use>
        </g>
        <g class="wave2">
          <use xlink:href="#wave-path" x="50" y="0"></use>
        </g>
        <g class="wave3">
          <use xlink:href="#wave-path" x="50" y="9"></use>
        </g>
      </svg>

    </section><!-- /Hero Section -->

    <!-- About Section -->
    <section id="about" class="about section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Information</h2>
        <p>Wer bin Ich</p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-6 content" data-aos="fade-up" data-aos-delay="100">
            <p>
              Hier stehen die Information die Sie als Kunde erfahren möchten
            </p>
            <ul>
              <li><i class="bi bi-check2-circle"></i> <span>Eine Seiten Erstellung</span></li>
              <li><i class="bi bi-check2-circle"></i> <span>Wenn Sie mehr Information möchten, könne Sie mich Kontaktiern.</span></li>
              <li><i class="bi bi-check2-circle"></i> <span>Hier könne Sie meinen Lebenslauf finden.</span></li>
            </ul>
          </div>

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
            <p>Ich hoffe ihnen gefällt die erstellung der Seite und das Layout. Die Order Strucktur wurde beachtet und bei Git Hub hochgeladen.</p>
            <a href="#" class="read-more"><span>Mehr Information</span><i class="bi bi-arrow-right"></i></a>
          </div>

        </div>

      </div>
 
            <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
            <div class="team-member">
              <div class="member-img">
                <img src="assets/img/team/team-3.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter-x"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Mark Zöphel</h4>
                <span>CTO</span>
              </div>
            </div>
          </div><!-- End Team Member -->
 

    <!-- Contact Section -->
    <section id="contact" class="contact section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Kontakt</h2>
        <p>Kontaktiern Sie uns</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade" data-aos-delay="100">

        <div class="row gy-4">

          <div class="col-lg-4">
            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="200">
              <i class="bi bi-geo-alt flex-shrink-0"></i>
              <div>
                <h3>Addresse</h3>
                <p>DAA Herford </p>
              </div>
            </div><!-- End Info Item -->

            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
              <i class="bi bi-telephone flex-shrink-0"></i>
              <div>
                <h3>Telefon</h3>
                <p>+05221 55488 55</p>
              </div>
            </div><!-- End Info Item -->

            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
              <i class="bi bi-envelope flex-shrink-0"></i>
              <div>
                <h3>Email</h3>
                <p>DAA@example.com</p>
              </div>
            </div><!-- End Info Item -->

          </div>

          <div class="col-lg-8">
            <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="200">
              <div class="row gy-4">

                <div class="col-md-6">
                  <input type="text" name="name" class="form-control" placeholder="Your Name" required="">
                </div>

                <div class="col-md-6 ">
                  <input type="email" class="form-control" name="email" placeholder="Your Email" required="">
                </div>

                <div class="col-md-12">
                  <input type="text" class="form-control" name="subject" placeholder="Subject" required="">
                </div>

                <div class="col-md-12">
                  <textarea class="form-control" name="message" rows="6" placeholder="Message" required=""></textarea>
                </div>

                <div class="col-md-12 text-center">
                  <div class="loading">Es wird geladen</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Ihre Nachricht wurde versendet. Vielen Dank!</div>

                  <button type="submit">Möchten Sie mir eine Nachricht senden</button>
                </div>

              </div>
            </form>
          </div><!-- End Contact Form -->

        </div>

      </div>

    </section><!-- /Contact Section -->

    <?php require_once('.\assets\layout\footer.php')?>