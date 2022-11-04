<?php include APP_ROOT . '/views/includes/head.php';?>

<?php include APP_ROOT . '/views/includes/side-bar.php';?>



<main id="main">
	<!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center section-title">
            <h2>Resume (Curiculum Vitae)</h2>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

	<!-- ======= Resume Section ======= -->
    <section id="resume" class="resume">
      <div class="container">

        <div class="section-title">
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>
        <div class="row">
          <div class="col-lg-6" data-aos="fade-up">
            <h3 class="resume-title">Sumary</h3>
            <div class="resume-item pb-0">
              <h4><?= $data['abouts']->name_2 ?></h4>
              <p><em><?= $data['abouts']->sumary ?></em></p>
              <ul>
                <li><?= $data['abouts']->address ?></li>
                <li><?= $data['abouts']->tel_1 ?></li>
                <li><?= $data['abouts']->gmail ?></li>
              </ul>
            </div>

            <h3 class="resume-title">Education</h3>
        <?php foreach($data['experiences'] as $experience) : ?>
            <div class="resume-item">
              <h4><?= $experience->course ?></h4>
              <h5><?= $experience->start ?> - <?= $experience->end ?></h5>
              <h5>Optains with <?= $experience->level ?></h5>
              <p><em>Rochester Institute of Technology, Rochester, NY</em></p>
              <p>Qui deserunt veniam. Et sed aliquam labore tempore sed quisquam iusto autem sit. Ea vero voluptatum qui ut dignissimos deleniti nerada porti sand markend</p>
            </div>
        <?php endforeach ?>
          </div>

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <h3 class="resume-title">Professional Experience</h3>
        <?php foreach($data['jobs'] as $job) : ?>
            <div class="resume-item">
              <h4><?= $job->job_name ?></h4>
              <h5><?= $job->job_start ?> - <?= $job->job_end ?></h5>
              <p><em><?= $job->job_address ?></em></p>
              <ul>
                <li><?= $job->role_1 ?></li>
                <li><?= $job->role_2 ?></li>
              </ul>
            </div>
        <?php endforeach ?>

        <h3 class="resume-title">Formations &amp; Internship Experience</h3>
        <?php foreach($data['formations'] as $formation) : ?>
            <div class="resume-item">
              <h4><?= $formation->form_names ?></h4>
              <h5><?= $formation->form_start ?> - <?= $formation->form_end ?></h5>
            </div>
        <?php endforeach ?>
          </div>
        </div>
      </div>
    </section><!-- End Resume Section -->


</main><!-- End #main -->

<?php include APP_ROOT . '/views/includes/footer.php';?>