<?php
class User {
    private $db;
    public function __construct() {
        $this->db = new Database;
    }

    public function register($data) {
        $this->db->query('INSERT INTO users (user_names, user_email, user_pass) VALUES(:username, :email, :password)');

        //Bind values
        $this->db->bind(':username', $data['username']);
        $this->db->bind(':email', $data['email']);
        $this->db->bind(':password', $data['password']);

        //Execute function
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function login($username, $password) {
        $this->db->query('SELECT * FROM users WHERE user_email = :username');

        //Bind value
        $this->db->bind(':username', $username);

        $row = $this->db->single();

        $hashedPassword = $row->user_pass;

        if (password_verify($password, $hashedPassword)) {
            return $row;
        } else {
            return false;
        }
    }

    public function getUsers(){
        $this->db->query("SELECT * FROM users");
        $result = $this->db->resultSet();
        return $result;
    }
    public function getAbout(){
        $this->db->query("SELECT * FROM about");
        $resultAbout = $this->db->resultSet();
        $rows = $this->db->single();

        return $rows;
    }
    public function getComp(){
        $this->db->query("SELECT * FROM  competences");
        $resultComp = $this->db->resultSet();
        return $resultComp;
    }
    public function getExp(){
        $this->db->query("SELECT * FROM  experiences");
        $resultExp = $this->db->resultSet();
        return $resultExp;
    }
    public function getMsg(){
        $this->db->query("SELECT * FROM  messages");
        $resultMsg = $this->db->resultSet();
        return $resultMsg;
    }
    public function getProj(){
        $this->db->query("SELECT * FROM  projects");
        $resultPro = $this->db->resultSet();
        return $resultPro;
    }

    //Find user by email. Email is passed in by the Controller.
    public function findUserByEmail($email) {
        //Prepared statement
        $this->db->query('SELECT * FROM users WHERE user_email = :email');

        //Email param will be binded with the email variable
        $this->db->bind(':email', $email);

        //Check if email is already registered
        if($this->db->rowCount() > 0) {
            return true;
        } else {
            return false;
        }
    }
}
