<?php

/**
 *  Routing class
 * http://localhost:8888/web_app/home
 * http://localhost:8888/web_app/home/user
 * http://localhost:8888/web_app/home/admin
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

        if (isset($route[2]) && $route[2] !='') {
            $action = $route[2];
        }

        $controller = new $controllerName();
        $controller->$action();

    }

    public function errorPage() {
        //
    }
}