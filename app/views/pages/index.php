<?php include APP_ROOT . '/views/includes/head.php';?>

<?php include APP_ROOT . '/views/includes/side-bar.php';?>

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex flex-column justify-content-center align-items-center">
    
    <div class="hero-container" data-aos="fade-in">
      <h1><?= $data['abouts']->name_2; ?></h1>
      <p>I'm <span class="typed" data-typed-items="Web Designer,Web Developer, Freelancer"></span></p>
    </div>
    <?php if(isset($data['registerError'])) : ?>
      <div class="alert alert-danger rounded text-center text-danger col-lg-5" role="alert">
          <?= $data['registerError'] ?>
      </div>
    <?php endif ?>
    
    <?php if(isset($data['LogInError'])) : ?>
      <div class="alert alert-danger rounded text-center text-danger col-lg-5" role="alert">
          <?= $data['LogInError'] ?>
      </div>
    <?php endif ?>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">
        <div class="section-title">
          <h2>About</h2>
          <!-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p> -->
        </div>

        <div class="row">
          <div class="col-lg-4" data-aos="fade-right">
            <img src="<?=URL_ROOT?>/assets/img/profile-img.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
            <h3>UI/UX Designer &amp; Web Developer.</h3>
            <p class="fst-italic">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
              magna aliqua.
            </p>
            <div class="row">
              <div class="col-lg-6">
                <ul>
                  <li><i class="bi bi-chevron-right"></i> <strong>Phone:</strong> <span><?= $data['abouts']->tel_1; ?></span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>City:</strong> <span><?= $data['abouts']->country; ?>, <?= $data['abouts']->city; ?></span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Address:</strong> <span><?= $data['abouts']->address; ?></span></li>
                </ul>
              </div>
              <div class="col-lg-6">
                <ul>
                  <li><i class="bi bi-chevron-right"></i> <strong>Age:</strong> <span><?php $sub = null;$date = new Datetime(); echo $sub = (int)$date->format('Y') - (int)date('Y', strtotime($data['abouts']->birthday));?></span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Degree:</strong> <span>Master</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>PhEmailone:</strong> <span><?= $data['abouts']->gmail ?></span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Freelance:</strong> <span>Available</span></li>
                </ul>
              </div>
            </div>
            
          </div>
        </div>

      </div>
    </section><!-- End About Section -->
    <div class="container">
      <?php if(isset($_SESSION['usernameBlog'])) : ?>
        <a class="col-12 rounded btn btn-outline-primary" href="<?=URL_ROOT?>/pages/about">
          Read more about my <strong>Facts</strong> and my <strong>Skills</strong>
        </a>
      <?php else : ?>
        <a class="col-12 rounded btn btn-outline-primary" type="button" data-bs-toggle="modal" data-bs-target="#modalLogin">
          Read more about my <strong>Facts</strong> and my <strong>Skills</strong>
        </a>
      <?php endif ?>
    </div>
    <!-- End Skills Section -->

    <!-- ======= Resume Section ======= -->
    <section id="resume" class="resume">
      <div class="container">

        <div class="section-title">
          <h2>Resume</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row">
          <div class="col-lg-6" data-aos="fade-up">
            <h3 class="resume-title">Small Sumary about me</h3>
            <div class="resume-item pb-0">
              <h4><?= $data['abouts']->name_2; ?></h4>
              <p><em><?= $data['abouts']->sumary ?></em></p>
              <ul>
                <li><?= $data['abouts']->address; ?></li>
                <li><?= $data['abouts']->tel_1; ?></li>
                <li><?= $data['abouts']->gmail ?></li>
              </ul>
            </div>

            <h3 class="resume-title">Education</h3>
            
            <div class="resume-item">
              <h4><?= $data['experience']->course; ?></h4>
              <h5><?= $data['experience']->start ?> - <?= $data['experience']->end ?></h5>
              <h5>Optains with <?= $data['experience']->level ?></h5>
            </div>
          </div>
          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <h3 class="resume-title">Professional Experience</h3>
            <div class="resume-item">
              <h4><?= $data['job']->job_name ?></h4>
              <h5><?= $data['job']->job_start ?> - <?= $data['job']->job_end ?></h5>
              <p><em><?= $data['job']->job_address ?></em></p>
              <ul>
                <li><?= $data['job']->role_1 ?></li>
                <li><?= $data['job']->role_2 ?></li>
              </ul>
            </div>
            <h3 class="resume-title">Formations &amp; Internship Experience</h3>
            <div class="resume-item">
              <h4><?= $data['formations']->form_names ?></h4>
              <h5><?= $data['formations']->form_start ?> - <?= $data['formations']->form_end ?></h5>
            </div>
          </div>
        </div>

      </div>
    </section>
    <div class="container">
      <?php if(isset($_SESSION['usernameBlog'])) : ?>
        <a class="col-12 rounded btn btn-outline-primary mb-3" href="<?=URL_ROOT?>/pages/resume">
          Read more about my <strong>Studies</strong> , my <strong>Degrees</strong> and my <strong>Professional Experience</strong>
        </a>
      <?php else : ?>
        <a class="col-12 rounded btn btn-outline-primary mb-3" type="button" data-bs-toggle="modal" data-bs-target="#modalLogin">
          Read more about my <strong>Studies</strong> , my <strong>Degrees</strong> and my <strong>Professional Experience</strong>
        </a>
      <?php endif ?>
    </div>

    <!-- End Resume Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio-details" class="portfolio section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Projects achieves</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row" data-aos="fade-up">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-web">Web</li>
              <li data-filter=".filter-app">Mobile & old</li>              
            </ul>
          </div>
        </div>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="100">

      <?php foreach($data['projects'] as $project) : ?>
        <?php if($project->proj_category == 'web design'): ?>
          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
        <?php elseif($project->proj_category == 'android'): ?>
          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
        <?php endif ?>
            <div class="portfolio-wrap" style="border-radius: 10px;">
              <img src="<?=URL_ROOT?>/public/upload/<?= $project->land_1?>" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="<?=URL_ROOT?>/public/upload/<?= $project->land_1?>" data-gallery="portfolioGallery" class="portfolio-lightbox" title="<?= $project->proj_name?>"><i class="bx bx-key"></i></a>
                <?php if(isset($_SESSION['usernameBlog'])) : ?>
                  <a href="<?=URL_ROOT?>/pages/project/<?= $project->proj_id?>" title="More Details"><i class="bx bx-file-blank"></i></a>
                <?php else : ?>
                  <a type="button" data-bs-toggle="modal" data-bs-target="#modalLogin" title="More Details"><i class="bx bx-file-blank"></i></a>
                <?php endif ?>
              </div>
            </div>
          </div>
      <?php endforeach ?>

        </div>
      </div>
    </section><!-- End Portfolio Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Testimonials</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item" data-aos="fade-up">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="<?=URL_ROOT?>/assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                <h3>Saul Goodman</h3>
                <h4>Ceo &amp; Founder</h4>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item" data-aos="fade-up" data-aos-delay="100">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="<?=URL_ROOT?>/assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
                <h3>Sara Wilsson</h3>
                <h4>Designer</h4>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item" data-aos="fade-up" data-aos-delay="200">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="<?=URL_ROOT?>/assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
                <h3>Jena Karlis</h3>
                <h4>Store Owner</h4>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item" data-aos="fade-up" data-aos-delay="300">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="<?=URL_ROOT?>/assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
                <h3>Matt Brandon</h3>
                <h4>Freelancer</h4>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item" data-aos="fade-up" data-aos-delay="400">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="<?=URL_ROOT?>/assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
                <h3>John Larson</h3>
                <h4>Entrepreneur</h4>
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2>Contact</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row" data-aos="fade-in">

          <div class="col-lg-5 d-flex align-items-stretch">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p><?= $data['abouts']->country; ?>, <?= $data['abouts']->city; ?></p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p><?= $data['abouts']->gmail ?></p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Call:</h4>
                <p><?= $data['abouts']->tel_1; ?></p>
              </div>

              <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>
            </div>

          </div>

          <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="form-group col-md-6">
                  <label for="name">Your Name</label>
                  <input type="text" name="name" class="form-control" id="name" required>
                </div>
                <div class="form-group col-md-6">
                  <label for="name">Your Email</label>
                  <input type="email" class="form-control" name="email" id="email" required>
                </div>
              </div>
              <div class="form-group">
                <label for="name">Subject</label>
                <input type="text" class="form-control" name="subject" id="subject" required>
              </div>
              <div class="form-group">
                <label for="name">Message</label>
                <textarea class="form-control" name="message" rows="10" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

<?php include APP_ROOT . '/views/includes/footer.php';?>