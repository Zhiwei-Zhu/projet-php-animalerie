<?php


namespace App\Controller;


use App\Model\AnimalModel;
use App\Model\ReservationModel;
use App\Model\UserModel;
use Core\Model\DbInterface;
use Core\Controller\Controller;

class AnimalController extends Controller{

    public function __construct()
    {
        $this->UserModel = new UserModel();
        $this->ReservationModel = new ReservationModel();
        $this->AnimalModel = new AnimalModel();
        $this->dbInterface = new DbInterface();
    }

    public function home(){
        $animals = $this->AnimalModel->findAll();
        return $this->render("Animaux/indexView", ['animals' => $animals]);
    }
    public function newAnimal(){

        if(!empty($_POST)){
            $animal = $_POST;

            $this->dbInterface->save($animal, 'animal');

            return $this->redirectToRoute('homeAnimal');

        }
        return $this->render("Animaux/newView");
    }

    public function single()
    {
        $animal = $this->AnimalModel->find($_GET["id"]);
        return $this->render("Animaux/singleView", ['animal' => $animal]);
    }

    public function modify()
    {
        if (!empty($_POST)) {
            $this->dbInterface->update('animal', $_POST, $_GET["id"]);
            return $this->redirectToRoute('singleAnimal', $_GET["id"]);
        }
        $animal = $this->AnimalModel->find($_GET["id"]);
        return $this->render("Animaux/modifyView", ['animal' => $animal]);
    }

    public function delete()
    {
        $this->dbInterface->delete('animal', $_GET["id"]);
        return $this->redirectToRoute('home');
    }

    public function reservation(){
        $reservations = $this->ReservationModel->findAll();

        foreach ($reservations as $reservation){
            $reservation->user_id= $this->UserModel->find($reservation->user_id);
            $reservation->animal_id= $this->AnimalModel->find($reservation->animal_id);
        }
        return $this->render("Animaux/adminIndexViews", ['reservations' => $reservations]);
    }

    public function newReservation()
    {
        $message="";

        if (!empty($_POST) && $_POST['daterdv']) {
            ;
            $_POST['user_id']=$_SESSION['user']->id;
            $_POST['animal_id']=$_GET["id"];
            $datetime=new \DateTime();
            $_POST['datetime']=$datetime->format('Y-m-d');

            $this->dbInterface->save($_POST,'reservation');
            return $this->redirectToRoute('singleAnimal', $_GET["id"]);
        }else{
            $message= "veullez choisir une date de rdv";
        }
        $animal = $this->AnimalModel->find($_GET["id"]);
        return $this->render("Animaux/singleView", [
            'animal' => $animal,
            'message' => $message]
        );
    }


}