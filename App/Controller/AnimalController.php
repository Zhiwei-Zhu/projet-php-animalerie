<?php


namespace App\Controller;


use App\Model\AnimalModel;
use App\Model\ReservationModel;
use Core\Model\DbInterface;
use Core\Controller\Controller;

class AnimalController extends Controller{

    public function __construct()
    {
        $this->ReservationModel = new ReservationModel();
        $this->AnimalModel = new AnimalModel();
        $this->dbInterface = new DbInterface();
    }

    public function home(){
        $animals = $this->AnimalModel->findAll();
        return $this->render("Animal/singleView", ['animals' => $animals]);
    }
    public function newProduit(){

        if(!empty($_POST)){
            $animal = $_POST;

            $this->dbInterface->save($animal, 'animal');

            return $this->redirectToRoute('animal');

        }
        return $this->render("Animal/newView");
    }

    public function single()
    {
        $animal = $this->AnimalModel->find($_GET["id"]);
        return $this->render("Animal/singleView", ['animal' => $animal]);
    }

    public function modify()
    {
        if (!empty($_POST)) {
            $this->dbInterface->update('animal', $_POST, $_GET["id"]);
            return $this->redirectToRoute('singleAnimal', $_GET["id"]);
        }
        $animal = $this->AnimalModel->find($_GET["id"]);
        return $this->render("Animal/modifyView", ['animal' => $animal]);
    }

    public function delete()
    {
        $this->dbInterface->delete('animal', $_GET["id"]);
        return $this->redirectToRoute('home');
    }

    public function reservation(){
        $reservations = $this->ReservationModel->findAll();
        return $this->render("Animal/singleView", ['reservations' => $reservations]);
    }

    public function newReservation()
    {
        $message="";

        if (!empty($_POST) && $_POST['daterdv']) {
            $user=$_SESSION['user'];
            $_POST['user_id']=$user['id'];
            $_POST['animal_id']=$_GET["id"];
            $_POST['datetime']=new \DateTime();

            $this->dbInterface->save($_POST,'reservation');
            return $this->redirectToRoute('singleAnimal', $_GET["id"]);
        }else{
            $message= "veullez choisir une date de rdv";
        }
        $animal = $this->AnimalModel->find($_GET["id"]);
        return $this->render("Animal/modifyView", [
            'animal' => $animal,
            'message' => $message]
        );

    }


}