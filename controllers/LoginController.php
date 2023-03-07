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
        $this->view->render($this->pageTpl, $this->pageData);
    }

    public function auth() {
        if(!empty($_POST) && !empty($_POST['inputLogin']) && !empty($_POST['inputPassword'])){
            $login = $_POST['inputLogin'];
            $password = md5($_POST['inputPassword']);
            if($this->model->checkUser($login, $password)) {
                $_SESSION['user'] = $_POST['inputLogin'];
                echo json_encode(['error'=>false]);
            } else {
                echo json_encode(['error'=>true, 'message'=>'Incorrect login or password!']);
            }
            exit();
        }
    }
}