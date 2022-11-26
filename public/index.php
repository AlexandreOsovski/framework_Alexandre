<?php


require_once('../vendor/autoload.php');
require_once('../app/functions/functions.php');

use app\controller\home;
(new \app\core\rotas());

$controller = new home();

pre($controller->testando());