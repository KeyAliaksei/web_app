<?php

$_POST = json_decode(file_get_contents("php://input"), true);

error_reporting(E_ALL);
ini_set('display_errors', 'on');

require_once ("conf/config.php");
