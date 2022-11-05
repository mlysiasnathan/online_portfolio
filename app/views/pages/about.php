<?php include APP_ROOT . '/views/includes/head.php';?>

<?php include APP_ROOT . '/views/includes/side-bar.php';?>



<main id="main">
    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center section-title">
          
            <h2>About <strong class="h4"><?= $data['abouts']->name_1;?> <?= $data['abouts']->name_2; ?></strong></h2>

        </div>

      </div>
    </section><!-- End Breadcrumbs -->
<!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="section-title">
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
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
                  <li><i class="bi bi-chevron-right"></i> <strong>Birthday:</strong> <span><?=date('d F Y', strtotime($data['abouts']->birthday));?></span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Phone:</strong> <span><?= $data['abouts']->tel_1; ?></span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Address:</strong> <span><?= $data['abouts']->address; ?></span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>City:</strong> <span><?= $data['abouts']->country; ?>, <?= $data['abouts']->city; ?></span></li>
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
            <p><?= $data['abouts']->sumary ?></p>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Facts Section ======= -->
    <section id="facts" class="facts">
      <div class="container">

        <div class="section-title">
          <h2>Facts</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row no-gutters">

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up">
            <div class="count-box">
              <i class="bi bi-emoji-smile"></i>
              <span data-purecounter-start="0" data-purecounter-end="9" data-purecounter-duration="1" class="purecounter"></span>
              <p><strong>Happy Clients</strong></p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="count-box">
              <i class="bi bi-journal-richtext"></i>
              <span data-purecounter-start="0" data-purecounter-end="5" data-purecounter-duration="1" class="purecounter"></span>
              <p><strong>Projects</strong></p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up" data-aos-delay="200">
            <div class="count-box">
              <i class="bi bi-headset"></i>
              <span data-purecounter-start="0" data-purecounter-end="2065" data-purecounter-duration="1" class="purecounter"></span>
              <p><strong>Hours Of Support</strong></p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up" data-aos-delay="300">
            <div class="count-box">
              <i class="bi bi-people"></i>
              <span data-purecounter-start="0" data-purecounter-end="3" data-purecounter-duration="1" class="purecounter"></span>
              <p><strong>Hard Workers</strong></p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Facts Section -->

    <!-- ======= Skills Section ======= -->
    <section id="skills" class="skills section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Skills</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row skills-content mb-5">
        <?php foreach($data['competences'] as $competence) : ?>          
          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <div class="progress">
              <span class="skill"><?= $competence->name ?><i class="val"><?= $competence->level ?>%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="<?= $competence->level ?>" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>
          </div>
        <?php endforeach;?>          
        </div>
      </div>
    </section>
    <!-- End Skills Section -->
 
  </main><!-- End #main -->

<?php include APP_ROOT . '/views/includes/footer.php';?>