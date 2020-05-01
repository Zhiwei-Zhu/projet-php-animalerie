<?php


namespace App\Controller;


use App\Model\LigneCommandeModel;
use App\Model\ProduitModel;
use Core\Model\DbInterface;
use Core\Controller\Controller;

class ProduitController extends Controller{

    public function __construct()
    {
        $this->ProduitModel = new ProduitModel();
        $this->dbInterface = new DbInterface();
    }
    public function home(){
        $produits = $this->ProduitModel->findAll();

        return $this->render("Produit/indexView ", [
            'produits' => $produits,
        ]);
    }
    public function newAnimal(){

        if(!empty($_POST)){


            $this->dbInterface->save($_POST, 'produit');

            return $this->redirectToRoute('produit');

        }
        return $this->render("Produit/newView");
    }

    public function single()
    {
        $produit = $this->ProduitModel->find($_GET["id"]);
        return $this->render("Produit/singleView", ['produit' => $produit]);
    }

    public function modify()
    {
        if (!empty($_POST)) {
            $this->dbInterface->update('produit', $_POST, $_GET["id"]);
            return $this->redirectToRoute('singlepPoduit', $_GET["id"]);
        }
        $produit = $this->ProduitModel->find($_GET["id"]);
        return $this->render("Produit/modifyView", ['produit' => $produit]);
    }

    public function delete()
    {
        $this->dbInterface->delete('produit', $_GET["id"]);
        return $this->redirectToRoute('produit');
    }
}