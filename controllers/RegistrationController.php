<?php


class RegistrationController extends Controller {

    private $pageTpl = "/views/registration.tpl.php";


    public function __construct(){
        $this->model = new RegistrationModel();
        $this->view = new View();
    }

    public function index() {
        if(!empty($_SESSION['user'])) {
            header("Location: /web_app/");
        }
        $this->pageData['title'] = " Registration page";
        $this->view->render($this->pageTpl, $this->pageData);
    }

    public function register() {
        $regName = filter_var(trim($_POST['name']), FILTER_SANITIZE_STRING);
        $regSurname = filter_var(trim($_POST['surname']), FILTER_SANITIZE_STRING);
        $regEmail = $_POST['email'];
        $regLogin = filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING);
        $regPassword = md5($_POST['password']);
        if(empty($regName) || empty($regSurname) || empty($regEmail) || empty($regLogin) || empty($regPassword)) {
            echo json_encode(['error' => true, 'message' => 'fill all mandatory fields']);
            exit();
        }
        if(!$this->model->checkExistedUser($regLogin, $regEmail)) {
            $this->model->registerNewUser($regName, $regSurname, $regEmail, $regLogin, $regPassword);
            $_SESSION['user'] = $_POST['login'];
            echo json_encode(['error' => false]);
        } else {
            echo json_encode(['error' => true, 'message' => 'Login or email already exist!']);
        }
        exit();
    }
}