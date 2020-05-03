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

        $commandes = $this->ligneCommandeModel->findOneBy(["commande_id" => ["Null"]]);

        return $this->render("Commandes/indexView", [
            'commandes' => $commandes,
        ]);
    }
    public function paiement(){
        $montanttotal=0;
        if (!empty($_POST)){
            $lignecommandes = $this->ligneCommandeModel->findOneBy(["commande_id" => ["Null"]]);
            foreach ($lignecommandes as $lignecommande){
                $montanttotal+=$lignecommande->montant;
            }
            $_POST['user']=$_SESSION['user']->nom;
            $_POST['datetime']= new \DateTime();
            $_POST['montanttotal']=$montanttotal;
            $_POST['etat']='attente confirmation';
            $this->dbInterface->save($_POST,'commande');
            $commande_id = $this->CommandeModel->findOneBy(["user" => $_SESSION['user']->nom]);
            $commande_id= $commande_id->id;
            foreach ($lignecommandes as $lignecommande){
                $this->dbInterface->save(['commande_id'=>$commande_id],'lignecommande');
            }

            return $this->redirectToRoute('singleAnimal', $_GET["id"]);
        }
        $commandes = $this->ligneCommandeModel->findOneBy(["commande_id" => ["Null"]]);

        return $this->render("Commandes/Paiement", [
            'commandes'=>$commandes,
            'montanttotal'=>$montanttotal
        ]);
    }
    public function remerciement(){

        return $this->render("Commandes/remerciement", [
        ]);
    }
    public function admincommande(){
        if (!empty($_POST)){
            $this->dbInterface->update('commande', $_POST, $_GET["id"]);
            return $this->redirectToRoute('adminCommande', $_GET["id"]);
        }
        $commandes = $this->CommandeModel->findAll();

        return $this->render("Commandes/adminindexView", [
            'commandes' => $commandes,
        ]);
    }

}