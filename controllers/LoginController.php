<?php


class LoginController extends Controller {

    private $pageTpl = "/views/login.tpl.php";


    public function __construct(){
        $this->model = new LoginModel();
        $this->view = new View();
    }

    public function index() {
        if(!empty($_SESSION['user'])) {
            header("Location: /web_app/");
        }


        $this->pageData['title'] = "Login page";
        if(!empty($_POST)) {
            if(!$this->auth()) {
                $this->pageData['error'] = "Uncorrected login or password!";
            }
        }
        $this->view->render($this->pageTpl, $this->pageData);
    }

    public function auth() {
        if(!empty($_POST) && !empty($_POST['inputLogin']) && !empty($_POST['inputPassword'])){
            $login = $_POST['inputLogin'];
            $password = md5($_POST['inputPassword']);
            if($this->model->checkUser($login, $password)) {
                $_SESSION['user'] = $_POST['inputLogin'];
                echo json_encode(['error'=>false]);
                exit();
            } else {
                echo json_encode(['error'=>true]);
                exit();
            }
        } else {
            echo json_encode(['error'=>true]);
            exit();
        }
    }

}