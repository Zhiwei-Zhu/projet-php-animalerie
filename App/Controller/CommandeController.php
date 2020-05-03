<?php


namespace App\Controller;


use App\Model\CommandeModel;
use App\Model\LigneCommandeModel;
use App\Model\ProduitModel;
use Core\Model\DbInterface;
use Core\Controller\Controller;

class CommandeController extends Controller{

    public function __construct()
    {
        $this->ligneCommandeModel = new LigneCommandeModel();
        $this->CommandeModel = new CommandeModel();
        $this->ProduitModel = new ProduitModel();
        $this->dbInterface = new DbInterface();
    }

    
    //panier
    public function home(){

        $commandes = $this->ligneCommandeModel->findOneBy(["commande_id" => ["id"]]);

        return $this->render("Panier/indexView", [
            'commandes' => $commandes,
        ]);
    }

}