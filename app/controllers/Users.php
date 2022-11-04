<?php
class Users extends Controller {
    public function __construct() {
        $this->userModel = $this->model('User');
    }

    public function register() {
        $data = [
            'title' => 'Login page',
            'username' => '',
            'email' => '',
            'password' => '',
            'confirmPassword' => '',
            'usernameRegError' => '',
            'emailRegError' => '',
            'passwordRegError' => '',
            'confirmPasswordError' => '',
            'registerError' => ''
        ];

      if($_SERVER['REQUEST_METHOD'] == 'POST'){
        // Process form
        // Sanitize POST data
        $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

              $data = [
                'username' => trim($_POST['username']),
                'email' => trim($_POST['email']),
                'password' => trim($_POST['password']),
                'confirmPassword' => trim($_POST['confirmPassword']),
                'usernameRegError' => '',
                'emailRegError' => '',
                'passwordRegError' => '',
                'confirmPasswordError' => '',
                'registerError' => ''
            ];

            $nameValidation = "/^[a-zA-Z0-9 ]*$/";
            $passwordValidation = "/^(.{0,7}|[^a-z]*|[^\d]*)$/i";

            //Validate username on letters/numbers
            if (empty($data['username'])) {
                $data['usernameRegError'] = 'Username is required';
            } elseif (!preg_match($nameValidation, $data['username'])) {
                $data['usernameRegError'] = 'Name can only contain letters and numbers and space.';
            }

            //Validate email
            if (empty($data['email'])) {
                $data['emailRegError'] = 'Email address is required';
            } elseif (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
                $data['emailRegError'] = 'Please enter the correct format.';
            } else {
                //Check if email exists.
                if ($this->userModel->findUserByEmail($data['email'])) {
                $data['emailRegError'] = 'Email is already taken.';
                }
            }

           // Validate password on length, numeric values,
            if(empty($data['password'])){
              $data['passwordRegError'] = 'Please enter password.';
            } elseif(strlen($data['password']) < 3){
              $data['passwordRegError'] = 'Password must be at least 4 characters';
            } elseif (!preg_match($passwordValidation, $data['password'])) {
              $data['passwordRegError'] = 'Password must be have at least one numeric value.';
            }

            //Validate confirm password
             if (empty($data['confirmPassword'])) {
                $data['confirmPasswordError'] = 'Please enter password.';
            } else {
                if ($data['password'] != $data['confirmPassword']) {
                $data['confirmPasswordError'] = 'Passwords do not match, please try again.';
                }
            }

            // Make sure that errors are empty
            if (empty($data['usernameRegError']) && empty($data['emailRegError']) && empty($data['passwordRegError']) && empty($data['confirmPasswordError'])) {

                // Hash password
                $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);

                //Register user from model function
                if ($this->userModel->register($data)) {
//Redirect to the login Autentification=====================================================================================
                    $loggedInUser = $this->userModel->login($data['email'], trim($_POST['password']));

                    if ($loggedInUser) {
                        $this->createUserSession($loggedInUser);
                    } else {
                        $data['LogInError'] = 'Password or username is incorrect. Please try again.';
                        $this->view('pages/index', $data);
                    }
                } else {
                    die('Something went wrong.');
                }
            }else{
                $data['registerError'] = 'Registration fail ! TRY AGAIN';
            }
        }
        $this->view('pages/index', $data);
    }

    public function login() {
        $data = [
            'title' => 'Login page',
            'username' => '',
            'password' => '',
            'usernameError' => '',
            'passwordError' => '',
            'LogInError' => ''
        ];

        //Check for post
        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            //Sanitize post data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $data = [
                'title' => 'Login page',
                'username' => trim($_POST['username_user']),
                'password' => trim($_POST['password_user']),
                'usernameError' => '',
                'passwordError' => '',
                'LogInError' => ''
            ];
            //Validate username
            if (empty($data['username'])) {
                $data['usernameError'] = 'Username is required';
            }

            //Validate password
            if (empty($data['password'])) {
                $data['passwordError'] = 'Password is required';
            }

            //Check if all errors are empty
            if (empty($data['usernameError']) && empty($data['passwordError'])) {
                $loggedInUser = $this->userModel->login($data['username'], $data['password']);

                if ($loggedInUser) {
                    $this->createUserSession($loggedInUser);
                } else {
                    $data['passwordError'] = 'Password or username is incorrect. Please try again.';
                    $data['LogInError'] = 'Login fail ! TRY AGAIN';
                    $this->view('pages/index', $data);
                }
            }

        } else {
            $data = [
                'username' => '',
                'password' => '',
                'usernameError' => '',
                'passwordError' => ''
            ];
        }
        $this->view('pages/index', $data);
    }

    public function createUserSession($user) {
        $_SESSION['user_idBlog'] = $user->user_id;
        $_SESSION['usernameBlog'] = $user->user_names;
        $_SESSION['emailBlog'] = $user->user_email;
        header('location:' . URL_ROOT . '/pages/index');
    }

    public function logout() {
        unset($_SESSION['user_idBlog']);
        unset($_SESSION['usernameBlog']);
        unset($_SESSION['emailBlog']);
        header('location:' . URL_ROOT);
    }
}
