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

        $commandes = $this->ligneCommandeModel->findBy(['commande_id'=>'null']);
        return $this->render("Commandes/indexView", [
            'commandes' => $commandes,
        ]);
    }

    public function paiement(){
        $montanttotal=0;
        $lignecommandes = $this->ligneCommandeModel->findBy(["commande_id" => "null"]);
        foreach ($lignecommandes as $lignecommande){
            $montanttotal+=$lignecommande->montant;
        }

        $commandes = $this->ligneCommandeModel->findBy(["commande_id" => "null"]);

        return $this->render("Commandes/paiement", [
            'commandes'=>$commandes,
            'montanttotal'=>$montanttotal,
        ]);
    }

    public function remerciement(){
        $montanttotal=0;
        $lignecommandes = $this->ligneCommandeModel->findBy(["commande_id" => "null"]);
        foreach ($lignecommandes as $lignecommande){
            $montanttotal+=$lignecommande->montant;
        }
        $_POST['user']=$_SESSION['user']->nom;
        $date= new \DateTime();
            $_POST['datetime']=$date->format('Y-m-d') ;
            $_POST['montanttotal']=$montanttotal;
            $_POST['etat']='attente confirmation';
            $this->dbInterface->save($_POST,'commande');
            $commande = $this->CommandeModel->findBy(["user" => $_SESSION['user']->nom]);
            $commande_id= $commande[0]->id;
            foreach ($lignecommandes as $lignecommande){
                $this->dbInterface->update('lignecommande',['commande_id'=>$commande_id], $lignecommande->id);
            }
        return $this->render("Commandes/remerciement", [
        ]);
    }

    public function admincommande(){
        if (!empty($_POST)){
            var_dump($this->dbInterface->update('commande', $_POST, $_GET["id"]));
            $this->dbInterface->update('commande', $_POST, $_GET["id"]);
            return $this->redirectToRoute('adminCommande', $_GET["id"]);
        }
        $commandes = $this->CommandeModel->findAll();

        return $this->render("Commandes/adminIndexViews", [
            'commandes' => $commandes,
        ]);
    }

}