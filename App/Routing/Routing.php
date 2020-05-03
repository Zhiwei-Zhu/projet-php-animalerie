<?php

use App\Controller\UserController;
use App\Controller\AnimalController;
use App\Controller\HomeController;
use App\Controller\ProduitController;
use Model\DbInterface;



if ((isset($_GET["page"]) && $_GET["page"] == 'home') || !isset($_GET["page"])) {
    $controller = new HomeController();
    $controller->home();

} elseif (isset($_GET["page"]) && $_GET["page"] == 'homeAnimal') { 
    $controller = new AnimalController();
    $controller->home();

} elseif (isset($_GET["page"]) && $_GET["page"] == 'newAnimal') { 
    $controller = new AnimalController();
    $controller->newAnimal();

    
} elseif (isset($_GET["page"]) && $_GET["page"] == 'singleAnimal') {  
    $controller = new AnimalController();
    $controller->single();


} elseif (isset($_GET["page"]) && $_GET["page"] == 'modifyAnimal') { 
    $controller = new AnimalController();
    $controller->modify();
    

} elseif (isset($_GET["page"]) && $_GET["page"] == 'deleteAnimal') { 
    $controller = new AnimalController();
    $controller->delete();


} elseif (isset($_GET["page"]) && $_GET["page"] == 'reservationAnimal') { 
    $controller = new AnimalController();
    $controller->reservation();


} elseif (isset($_GET["page"]) && $_GET["page"] == 'newReservationAnimal') { 
    $controller = new AnimalController();
    $controller->newReservation();


}



if ((isset($_GET["page"]) && $_GET["page"] == 'home') || !isset($_GET["page"])) {
    $controller = new HomeController();
    $controller->home();

}elseif (isset($_GET["page"]) && $_GET["page"] == 'homeProduit') { 
    $controller = new ProduitController();
    $controller->home();

} elseif (isset($_GET["page"]) && $_GET["page"] == 'newProduit') { 
    $controller = new ProduitController();
    $controller->newAnimal();

} elseif (isset($_GET["page"]) && $_GET["page"] == 'singleProduit') {  
    $controller = new ProduitController();
    $controller->single();

} elseif (isset($_GET["page"]) && $_GET["page"] == 'modifyProduit') { 
    $controller = new ProduitController();
    $controller->modify();
    

} elseif (isset($_GET["page"]) && $_GET["page"] == 'deleteProduit') { 
    $controller = new ProduitController();
    $controller->delete();
}




if ((isset($_GET["page"]) && $_GET["page"] == 'home') || !isset($_GET["page"])) {
    $controller = new HomeController();
    $controller->home();


} elseif (isset($_GET["page"]) && $_GET["page"] == 'homeCommande') { 
    $controller = new CommandeController();
    $controller->home();

}




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

