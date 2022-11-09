<!-- ======= Mobile nav toggle button ======= -->
  <i class="bi bi-list mobile-nav-toggle d-xl-none"></i>

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="d-flex flex-column">

      <div class="profile">
        <img src="<?=URL_ROOT?>/assets/img/profile-img.jpg" alt="" class="img-fluid rounded-circle">
        <h1 class="text-light"><a href="#"><?= $data['abouts']->name_2; ?></a></h1>
        <div class="social-links mt-3 text-center">
          <a href="tel:+243976742676" class="whatsapp"><i class="bx bxl-whatsapp"></i></a>
          <a href="https://www.facebook.com/lysias.nathan" class="facebook"><i class="bx bxl-facebook"></i></a>
          <a href="tel:+243976742676" class="instagram"><i class="bx bxl-telegram"></i></a>
          <a href="mailto:mlysiasnathan@gmail.com" class="google-plus"><i class="bx bxl-google"></i></a>
          <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
        </div>
      </div>

      <nav id="navbar" class="nav-menu navbar">
        <ul>
          <li><a href="<?= URL_ROOT ?>" class="nav-link scrollto active"><i class="bx bx-home"></i> <span>Home</span></a></li>
          <li><a href="<?= URL_ROOT ?>/pages/index#about" class="nav-link scrollto"><i class="bx bx-user"></i> <span>About</span></a></li>
          <li><a href="<?= URL_ROOT ?>/pages/index#resume" class="nav-link scrollto"><i class="bx bx-file-blank"></i> <span>Resume</span></a></li>
          <li><a href="<?=URL_ROOT?>/pages/index#portfolio-details" class="nav-link scrollto"><i class="bx bx-book-content"></i> <span>Projects</span></a></li>
          

          <li>
            <?php if(isset($_SESSION['usernameBlog'])) : ?>
              <a href="<?= URL_ROOT ?>/users/logout" class="nav-link scrollto"><i class="bx bx-server"></i> <span class="btn btn-outline-danger rounded p-1">Log out</span></a>
            <?php else : ?>
              <a href="#" class="nav-link scrollto" type="button" data-bs-toggle="modal" data-bs-target="#modalLogin" ><i class="bx bx-server"></i> <span class="btn btn-outline-primary rounded p-1">Log in</span></a>
            <?php endif; ?>
          </li>
          <li><a href="<?= URL_ROOT ?>/pages/index#contact" class="nav-link scrollto"><i class="bx bx-envelope"></i> <span>Contact</span></a></li>
        </ul>
      </nav><!-- .nav-menu -->

      <!-- log in modal -->

      <div class="modal fade" id="modalLogin" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="staticBackdropLabel">Log in</h5>
            </div>
            <div class="modal-body">

              <form class="row g-3 needs-validation" action="<?= URL_ROOT; ?>/users/login" method="POST" novalidate>
                <?php if(isset($data['passwordError'])) : ?>
                    <span class="invalidFeedback small pl-3 text-danger">
                        <?= $data['passwordError'];?>
                    </span>
                <?php endif ?>
                                    
                <div class="input-group has-validation" id="div-input">
                    <span class="input-group-text" id="inputGroupPrepend">@</span>
                    <input type="text" class="form-control" value="<?= $data['email'] ?? $data['username'] ?? '' ?>" id="validationCustomUsername" aria-describedby="inputGroupPrepend" placeholder="Username or Email address :" name="username_user" required>
                    <div class="invalid-feedback">
                       Please Enter your username.
                    </div>
                </div>
                <?php if(isset($data['usernameError'])) : ?>
                    <span class="invalidFeedback small pl-3 text-danger">
                        <?= $data['usernameError'];?>
                    </span>
                <?php endif ?>

                <div class="input-group has-validation mt-2" id="div-input">
                    <span class="input-group-text" id="inputGroupPrepend"><i class="bx bx-key"></i></span>
                    <input type="password" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" placeholder="Password :" name="password_user" required>
                    <div class="invalid-feedback">
                        Please Compete your password.
                    </div>
                </div>
                

                <div class="form-group ml-2">
                    <div class="custom-control custom-checkbox small">
                        <input type="checkbox" class="custom-control-input" id="customCheck">
                        <label class="custom-control-label" for="customCheck">Remember me</label>
                    </div>
                    <div class="invalid-feedback">
                        Check here !
                    </div>
                </div>            
              <div class="col">Don't having an account ? <a href="#" class="font-weight-bold" data-bs-toggle="modal" data-bs-target="#modalSign">Get registered here !!</a></div>
              
            </div>
            <div class="modal-footer">
              <div class="input-group justify-content-center">
                  <div class="col-6 px-2">
                      <button class="col-12 p-1 rounded btn btn-primary small" type="submit" name="user_log_in">
                          login
                      </button>
                  </div>
                  <div class="col-6 px-2">
                      <button class="col-12 p-1 rounded btn btn-outline-primary small" data-bs-dismiss="modal" aria-label="Close">
                          Cancel
                      </button>
                  </div>
              </div>
              </form>
            </div>
          </div>
        </div>
      </div>

      <!-- Sign in modal -->

      <div class="modal fade" id="modalSign" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="staticBackdropLabel">Sign in</h5>
            </div>
            <div class="modal-body">
              <form class="row g-3 needs-validation" action="<?= URL_ROOT; ?>/users/register" method="POST" novalidate>
                                    
                <div class="input-group has-validation" id="div-input">
                    <span class="input-group-text" id="inputGroupPrepend">Az</span>
                    <input type="text" class="form-control" value="<?= $data['username'] ?? '' ?>" id="validationCustomUsername" aria-describedby="inputGroupPrepend" placeholder="Username :" name="username" required>
                    <div class="invalid-feedback">
                       Please Enter your username.
                    </div>
                </div>
                <?php if(isset($data['usernameRegError'])) : ?>
                    <span class="invalidFeedback small pl-3 text-danger">
                        <?= $data['usernameRegError'];?>
                    </span>
                <?php endif ?>

                <div class="input-group has-validation" id="div-input">
                    <span class="input-group-text" id="inputGroupPrepend">@</span>
                    <input type="email" class="form-control" value="<?= $data['email'] ?? '' ?>" id="validationCustomUsername" aria-describedby="inputGroupPrepend" placeholder="Email address :" name="email" required>
                    <div class="invalid-feedback">
                       Please Enter your email.
                    </div>
                </div>
                <?php if(isset($data['emailRegError'])) : ?>
                    <span class="invalidFeedback small pl-3 text-danger">
                        <?= $data['emailRegError'];?>
                    </span>
                <?php endif ?>

                <div class="input-group has-validation mt-2" id="div-input">
                    <span class="input-group-text" id="inputGroupPrepend"><i class="bx bx-key"></i></span>
                    <input type="password" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" placeholder="Password :" name="password" required>
                    <div class="invalid-feedback">
                        Please Compete your password.
                    </div>
                </div>
                <?php if(isset($data['passwordRegError'])) : ?>
                    <span class="invalidFeedback small pl-3 text-danger">
                        <?= $data['passwordRegError'];?>
                    </span>
                <?php endif ?>

                <div class="input-group has-validation mt-2" id="div-input">
                    <span class="input-group-text" id="inputGroupPrepend"><i class="bx bx-key"></i></span>
                    <input type="password" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" placeholder="Password :" name="confirmPassword" required>
                    <div class="invalid-feedback">
                        Compete the same password.
                    </div>
                </div>
                <?php if(isset($data['confirmPasswordError'])) : ?>
                    <span class="invalidFeedback small pl-3 text-danger">
                        <?= $data['confirmPasswordError'];?>
                    </span>
                <?php endif ?>

                <div class="form-group ml-2">
                    <div class="custom-control custom-checkbox small">
                        <input type="checkbox" class="custom-control-input" id="customCheck">
                        <label class="custom-control-label" for="customCheck">Terms and conditions</label>
                    </div>
                    <div class="invalid-feedback">
                        Check here !
                    </div>
                </div>            
              <div class="col">Already have an account ? <a href="#" class="font-weight-bold" data-bs-toggle="modal" data-bs-target="#modalLogin">Log here !!</a></div>
              
            </div>
            <div class="modal-footer">
              <div class="input-group justify-content-center">
                  <div class="col-6 px-2">
                      <button class="col-12 p-1 rounded btn btn-primary small" type="submit">
                          Create account
                      </button>
                  </div>
                  <div class="col-6 px-2">
                      <button class="col-12 p-1 rounded btn btn-outline-primary small" data-bs-dismiss="modal" aria-label="Close">
                          Cancel
                      </button>
                  </div>
              </div>
            </div>
        </form>
          </div>
        </div>
      </div>
    </div>
  </header><!-- End Header -->