<?php


class AccountController extends Controller {

    private $pageTpl = "/views/account.tpl.php";


    public function __construct(){
        $this->model = new AccountModel();
        $this->view = new View();
    }

    public function index() {
        $this->pageData['title'] = "Account page";
        $this->view->render($this->pageTpl, $this->pageData);
    }

}
