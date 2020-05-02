<?php

use App\Controller\UserController;


if ((isset($_GET["page"]) && $_GET["page"] == 'signup')) {
    $controller = new UserController();
    $controller->signup();

} elseif (isset($_GET["page"]) && $_GET["page"] == 'login') {  
    $controller = new UserController();
    $controller->login();

} elseif (isset($_GET["page"]) && $_GET["page"] == 'logout') {  
    $controller = new UserController();
    $controller->logout();

}