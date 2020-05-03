<?php


namespace App\Controller;


use App\Model\AnimalModel;
use App\Model\ProduitModel;
use Core\Model\DbInterface;
use Core\Controller\Controller;

class HomeController extends Controller{

    public function __construct()
    {
        $this->ProduitModel = new ProduitModel();
        $this->AnimalModel = new AnimalModel();
        $this->dbInterface = new DbInterface();
    }

    public function home(){
        $animals = $this->AnimalModel->findAll();
        $produits = $this->ProduitModel->findAll();

        return $this->render("Home/indexView", [
            'animals' => $animals,
            'produits' => $produits,
        ]);
    }
    public function dons(){

        if(!empty($_POST)){
            $user=$_SESSION['user'];
            $_POST['user_id']=$user['id'];
            $date=new \DateTime();
            $_POST['datetime']=$date->format('Y-m-d');

            $this->dbInterface->save($_POST,'dons');

            return $this->redirectToRoute('home');

        }
        $animals = $this->AnimalModel->findAll();
        $produits = $this->ProduitModel->findAll();

        return $this->render("Home/indexView", [
            'animals' => $animals,
            'produits' => $produits,
        ]);
    }
}