<?php


class RegistrationController extends Controller {

    private $pageTpl = "/views/registration.tpl.php";


    public function __construct(){
        $this->model = new RegistrationModel();
        $this->view = new View();
    }

    public function index() {
        $this->pageData['title'] = " Registration page";
        if(!empty($_POST)){
            if($this->register()) {
                $this->pageData['registerMsg'] = "User successfully created!";
            } else {
                $this->pageData['registerMsg'] = "An error occurred while registering!";
            }
        }
        $this->view->render($this->pageTpl, $this->pageData);
    }

    public function register() {
        if (!empty($_POST) && !empty($_POST['name']) && !empty($_POST['surname']) && !empty($_POST['email']) && !empty($_POST['login']) && !empty($_POST['password'])) {
            $regName = $_POST['name'];
            $regSurname = $_POST['surname'];
            $regEmail = $_POST['email'];
            $regLogin = $_POST['login'];
            $regPassword = md5($_POST['password']);
            $this->model->registerNewUser($regName, $regSurname, $regEmail, $regLogin, $regPassword);
            return true;
        } else {
            var_dump($_POST);
//            $this->pageData['registerMsg'] = "Fill all required fields";
//            return false;
        }
    }

}