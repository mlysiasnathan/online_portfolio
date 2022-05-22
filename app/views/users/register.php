<?php include APP_ROOT . '/views/includes/head-login.php';?>


    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">
          <form action="<?php echo URL_ROOT; ?>/users/login" class="sign-in-form" method="POST">
            <h2 class="title">Log in</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" placeholder="Username or Email" name="email" />
              <span class="invalidFeedback">
                <?php echo $data['usernameError'] ?>
              </span>
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Password :" name="password" />
              <span class="invalidFeedback">
                <?php echo $data['passwordError'] ?>
              </span>
            </div>
            <input id="submit" type="submit" value="Log in" class="btn solid" />
            <p class="social-text">Or Sign in with social platforms</p>
            <div class="social-media">
              <a href="#" class="social-icon">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-google"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>
          </form>
          <form action="<?php echo URL_ROOT; ?>/users/register" class="sign-up-form" method="POST">
            <h2 class="title">Sign up</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" placeholder="Usernames" name="username" required/>
              <span class="invalidFeedback">
                <?php echo $data['usernameError'] ?>
              </span>
            </div>
            <div class="input-field">
              <i class="fas fa-envelope"></i>
              <input type="email" placeholder="Email" name="email" required/>
              <span class="invalidFeedback">
                <?php echo $data['emailError'] ?>
              </span>
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Password" name="password" required/>
              <span class="invalidFeedback">
                <?php echo $data['passwordError'] ?>
              </span>
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Confirm Password" name="confirmPassword" required/>
              <span class="invalidFeedback">
                <?php echo $data['confirmPasswordError'] ?>
              </span>
            </div>
            <input id="submit" type="submit" value="Sign up" class="btn" />
            <p class="social-text">Or Sign up with social platforms</p>
            <div class="social-media">
              <a href="#" class="social-icon">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-google"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>
          </form>
        </div>
      </div>

      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h3>New here ?</h3>
            <p>
              Lorem ipsum, dolor sit amet consectetur adipisicing elit. Debitis,
              ex ratione. Aliquid!
            </p>
            <button class="btn transparent" id="sign-up-btn">
              Sign up
            </button>
            <a href="<?=URL_ROOT?>/pages/index" class="btn transparent" id="home-btn" style="margin-top: 5px;padding: 9px;text-decoration: none;">
              Home Page
            </a>
          </div>
          <img src="<?php echo URL_ROOT?>/login-assets/img/log.svg" class="image" alt="" />
        </div>
        <div class="panel right-panel">
          <div class="content">
            <h3>One of us ?</h3>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum
              laboriosam ad deleniti.
            </p>
            <button class="btn transparent" id="sign-in-btn">
              Log in
            </button>
            <a href="<?=URL_ROOT?>/pages/index" class="btn transparent" id="home-btn" style="margin-top: 5px;padding: 9px;text-decoration: none;">
              Home Page
            </a>
            
          </div>
          <img src="<?php echo URL_ROOT?>/login-assets/img/register.svg" class="image" alt="" />
        </div>
      </div>
    </div>

    <script src="<?php echo URL_ROOT?>/login-assets/app.js"></script>
  </body>
</html>
