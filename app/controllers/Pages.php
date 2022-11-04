<?php
class Pages extends Controller {
    public function __construct() {
        $this->userModel = $this->model('User');
    }

    public function index() {
        $projects = $this->userModel->getProjects();
        $experience = $this->userModel->getExperience();
        $formations = $this->userModel->getFormationsSmall();
        $job = $this->userModel->getJob();
        $abouts = $this->userModel->getAbout();
        $users = $this->userModel->getUsers();
        $data = [
            'title' => 'LYSNATH - Blog',
            'users' => $users,
            'abouts' => $abouts,
            'projects' => $projects,
            'formations' => $formations,
            'job' => $job,
            'experience' => $experience
        ];
        $this->view('pages/index', $data);
    }


    public function about() {
        if (!isLoggedIn()) {
            header('Location: ' . URL_ROOT);
        }
        $abouts = $this->userModel->getAbout();
        $competences = $this->userModel->getCompetences();
        $data = [
            'title' => 'LYSNATH - Blog',
            'abouts' => $abouts,
            'competences' => $competences,
        ];
        $this->view('pages/about', $data);
    }

    public function resume() {
        if (!isLoggedIn()) {
            header('Location: ' . URL_ROOT);
        }
        $experiences = $this->userModel->getExperiencies();
        $jobs = $this->userModel->getJobs();
        $abouts = $this->userModel->getAbout();
        $formations = $this->userModel->getFormations();
        $data = [
            'title' => 'LYSNATH - Blog',
            'abouts' => $abouts,
            'jobs' => $jobs,
            'experiences' => $experiences,
            'formations' => $formations,
        ];
        $this->view('pages/resume', $data);
    }

    public function project($proj_id) {
        if (!isLoggedIn()) {
            header('Location: ' . URL_ROOT);
        }
        $project = $this->userModel->getProject($proj_id);
        $data = [
            'title' => 'LYSNATH - Blog',
            'project' => $project,
        ];
        $this->view('pages/project', $data);
    }
    
}
?>