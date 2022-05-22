<?php
class Pages extends Controller {
    public function __construct() {
        $this->userModel = $this->model('User');
    }

    public function index() {
        $users = $this->userModel->getUsers();
        $data = [
            'title' => 'LYSNATH - Blog',
            'users' => $users
        ];

        $this->view('pages/index', $data);
    }


    public function about() {
        $about = $this->userModel->getAbout();
        $data = [
            'name' => $about->name_1

        ];
        $this->view('pages/about');
    }
    public function resume() {
        $this->view('pages/resume');
    }
    public function project() {
        $this->view('pages/project');
    }
    
}
?>