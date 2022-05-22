<!-- ======= Mobile nav toggle button ======= -->
  <i class="bi bi-list mobile-nav-toggle d-xl-none"></i>

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="d-flex flex-column">

      <div class="profile">
        <img src="<?=URL_ROOT?>/assets/img/profile-img.jpg" alt="" class="img-fluid rounded-circle">
        <h1 class="text-light"><a href="index.html">Lysias Nathan</a></h1>
        <div class="social-links mt-3 text-center">
          <a href="tel:+250780870676" class="whatsapp"><i class="bx bxl-whatsapp"></i></a>
          <a href="https://www.facebook.com/lysias.nathan" class="facebook"><i class="bx bxl-facebook"></i></a>
          <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
          <a href="mailto:mlysiasnathan@gmail.com" class="google-plus"><i class="bx bxl-google"></i></a>
          <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
        </div>
      </div>

      <nav id="navbar" class="nav-menu navbar">
        <ul>
          <li><a href="<?=URL_ROOT?>/pages/index" class="nav-link scrollto active"><i class="bx bx-home"></i> <span>Home</span></a></li>
          <li><a href="<?=URL_ROOT?>/pages/index.php#about" class="nav-link scrollto"><i class="bx bx-user"></i> <span>About</span></a></li>
          <li><a href="<?=URL_ROOT?>/pages/index.php#resume" class="nav-link scrollto"><i class="bx bx-file-blank"></i> <span>Resume</span></a></li>
          <li><a href="<?=URL_ROOT?>/pages/index.php#portfolio-details" class="nav-link scrollto"><i class="bx bx-book-content"></i> <span>Projects</span></a></li>
          

          <li>
            <?php if(isset($_SESSION['username'])) : ?>
              <a href="<?=URL_ROOT?>/users/logout" class="nav-link scrollto"><i class="bx bx-server"></i> <span class="btn btn-outline-danger rounded p-1">Log out</span></a>
            <?php else : ?>
              <a href="<?=URL_ROOT?>/users/register" class="nav-link scrollto"><i class="bx bx-server"></i> <span class="btn btn-outline-primary rounded p-1">Log in</span></a>
            <?php endif; ?>
          </li>
          <li><a href="<?=URL_ROOT?>/pages/index.php#contact" class="nav-link scrollto"><i class="bx bx-envelope"></i> <span>Contact</span></a></li>
          
          
        </ul>
      </nav><!-- .nav-menu -->
    </div>
  </header><!-- End Header -->