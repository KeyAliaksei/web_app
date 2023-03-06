<?php


class AccountController extends Controller {

    private $pageTpl = "/views/account.tpl.php";


    public function __construct(){
        $this->model = new AccountModel();
        $this->view = new View();
    }

    public function index() {

        if(!$_SESSION['user']){
            header("Location: /web_app/");
        }

        $this->pageData['title'] = "Account page";

        $orders = $this->model->getOrders();
        $this->pageData['orders'] = $orders;

        $products = $this->model->getProducts();
        $this->pageData['products'] = $products;

        $companyInfo = $this->model->getCompanyInfo();
        $this->pageData['companyInfo'] = $companyInfo;

        $this->view->render($this->pageTpl, $this->pageData);
    }

    public function logout(){
        session_destroy();
        header("Location: /web_app/");
    }

}
