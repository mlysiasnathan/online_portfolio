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
        $this->db->query('SELECT * FROM users WHERE user_email = :username OR user_names = :username');

        //Bind value
        $this->db->bind(':username', $username);
        $this->db->bind(':username', $username);

        $row = $this->db->single();

        if ($row) {
            $hashedPassword = $row->user_pass;
        } else{
            return false;
        }

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
        $this->db->query('SELECT * FROM about');
        $resultAbout = $this->db->single();
        return $resultAbout;
    }
    public function getCompetences(){
        $this->db->query('SELECT * FROM competences');
        $resultComp = $this->db->resultSet();
        return $resultComp;
    }

    public function getExperiencies(){
        $this->db->query('SELECT * FROM experiences');
        $resultExp = $this->db->resultSet();
        return $resultExp;
    }
    public function getExperience(){
        $this->db->query('SELECT * FROM experiences LIMIT 1');
        $resultExpSmall = $this->db->single();
        return $resultExpSmall;
    }

    public function getFormations(){
        $this->db->query('SELECT * FROM formations');
        $resultForm = $this->db->resultSet();
        return $resultForm;
    }
    public function getFormationsSmall(){
        $this->db->query('SELECT * FROM formations LIMIT 1');
        $resultFormSm = $this->db->single();
        return $resultFormSm;
    }

    public function getJobs(){
        $this->db->query('SELECT * FROM jobs');
        $resultJob = $this->db->resultSet();
        return $resultJob;
    }

    public function getJob(){
        $this->db->query('SELECT * FROM jobs LIMIT 1');
        $resultJobSmall = $this->db->single();
        return $resultJobSmall;
    }
    public function getProjects(){
        $this->db->query('SELECT * FROM projects');
        $resultPros = $this->db->resultSet();
        return $resultPros;
    }

    public function getProject($proj_id){
        $this->db->query('SELECT * FROM projects WHERE proj_id = :proj_id');
        $this->db->bind(':proj_id', $proj_id);
        $resultPro = $this->db->single();
        return $resultPro;
    }

    //Find user by email. Email is passed in by the Controller.
    public function findUserByEmail($email) {
        //Prepared statement
        $this->db->query('SELECT * FROM users WHERE user_email = :email');

        //Email param will be binded with the email variable
        $this->db->bind(':email', $email);
        $this->db->execute();

        //Check if email is already registered
        if($this->db->rowCount() > 0) {
            return true;
        } else {
            return false;
        }
    }
}
