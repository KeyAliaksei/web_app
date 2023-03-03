<?php


class LoginController extends Controller {

    private $pageTpl = "/views/login.tpl.php";


    public function __construct(){
        $this->model = new LoginModel();
        $this->view = new View();
    }

    public function index() {
        $this->pageData['title'] = "Login page";
        $this->view->render($this->pageTpl, $this->pageData);
    }

    public function auth() {
        var_dump($_POST);
        exit();
    }

}