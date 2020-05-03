    <div class="recherche mt-5"></div>
    <div class="affichage mt-5 justify-content-around">
    <?php if($animal->type == "chien"): ?>
        <img class="card-img-top" src="https://lemagduchien.ouest-france.fr/images/dossiers/2019-06/chien-heureux-064736.jpg" alt="Card image cap">
    <?php endif; ?>
    <?php if($animal->type == "chat"): ?>
        <img class="card-img-top" src="http://www.leparisien.fr/resizer/74wMQIeXKLDUKuKvSzJQME_0ULg=/932x582/arc-anglerfish-eu-central-1-prod-leparisien.s3.amazonaws.com/public/KNVYKZBDTTOXNO37FEVDTD5DJU.jpg" alt="Card image cap">
    <?php endif; ?>
    <?php if($animal->type == "oiseaux"): ?>
        <img class="card-img-top" src="https://media1.ledevoir.com/images_galerie/nwd_752350_589649/image.jpg" alt="Card image cap">
    <?php endif; ?>
        <div class="card-body">
            <h5 class="card-title"></h5>
            <div class="card-text">
                <p>Nom: <?= $animal->nom ?></p>
                <p>Type: <?= $animal->type ?></p>
                <p>Race: <?= $animal->race ?></p>
                <p>Taille: <?= $animal->taille ?></p>
                <p>Poids: <?= $animal->poids ?></p>
                <p>Age: <?= $animal->age ?></p>
            </div>

            <?php if (!isset($_SESSION["user"])): ?>
                <p>Veuillez être connecter pour réserver</p>
                <a href="" alt="" class="btn btn-secondary">Réserver</a>
            <?php else : ?>
                <form action="index.php?page=newReservationAnimal&id=<?= $animal->id ?>" method="POST">
                    <label for="daterdv">date rendez-vous</label>
                    <input type="date" id="daterdv" name="daterdv">
                    <button type="submit" class="btn btn-primary">Réserver</button>
                </form>
                <?php if ($_SESSION["user"]->role=="admin"): ?> 
                    <a href="index.php?page=modifyAnimal&id=<?= $animal->id ?>" class="btn btn-primary">Modifier</a>
                    <a href="index.php?page=deleteAnimal&id=<?= $animal->id ?>" class="btn btn-danger">Supprimer</a>
                <?php endif; ?>
            <?php endif; ?>
        </div>
    </div>
