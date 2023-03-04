<?php

/**
 *  Routing class
 * http://localhost:8888/web_app/index
 * http://localhost:8888/web_app/index/login/account
 * http://localhost:8888/web_app/index/signup/account
 * http://localhost:8888/web_app/admin/login/account - temporarily canceled
 */

class Routing {

    public static function buildRoute() {

        /* Default controller and action*/
        $controllerName = "IndexController";
        $modelName = "IndexModel";
        $action = "index";

        $route = explode("/", $_SERVER['REQUEST_URI']);

        /* Define controller */
        if ($route[2] != '') {
          $controllerName = ucfirst($route[2]. "Controller");
          $modelName = ucfirst($route[2]. "Model");
        }

        include CONTROLLER_PATH . $controllerName . ".php";
        include MODEL_PATH . $modelName . ".php";

        if (isset($route[3]) && $route[3] !='') {
            $action = $route[3];
        }

        $controller = new $controllerName();
        $controller->$action();

    }

    public function errorPage() {
        //
    }
}