<?php include APP_ROOT . '/views/includes/head.php';?>

<?php include APP_ROOT . '/views/includes/side-bar.php';?>


<main id="main">
	<!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center section-title">
            <h2>Project <?= $data['project']->proj_name ?></h2>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-8">
            <div class="portfolio-details-slider swiper">
              <div class="swiper-wrapper align-items-center">

                <div class="swiper-slide">
                  <img src="<?=URL_ROOT?>/public/upload/<?= $data['project']->land_1 ?>" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="<?=URL_ROOT?>/public/upload/<?= $data['project']->land_2 ?>" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="<?=URL_ROOT?>/public/upload/<?= $data['project']->land_3 ?>" alt="">
                </div>

              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="portfolio-info">
              <h3>Project information</h3>
              <ul>
                <li><strong>Category</strong>: <?= $data['project']->proj_category ?></li>
                <li><strong>Client</strong>: <?= $data['project']->proj_client ?></li>
                <li><strong>Project URL</strong>: <a href="<?= dirname(URL_ROOT) . $data['project']->proj_url ?>" target="_blank">http://localhost<?= $data['project']->proj_url ?></a></li>
              </ul>
            </div>
            <div class="portfolio-description">
              <h2><?= $data['project']->proj_name ?> detail</h2>
              <p>
                <?= $data['project']->proj_detail ?>
              </p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Portfolio Details Section -->

    </main><!-- End #main -->

<?php include APP_ROOT . '/views/includes/footer.php';?>