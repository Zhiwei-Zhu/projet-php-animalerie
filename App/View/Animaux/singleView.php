    <div class="recherche mt-5"></div>
    <div class="affichage mt-5 justify-content-around">
        <img class="card-img-top" src="https://fakeimg.pl/300x200/" alt="Card image cap">
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
                <a href="index.php?page=reserver&id=<?= $animal->id ?>" class="btn btn-primary">Réserver</a>
            <?php elseif ($_SESSION["user"]->role=="admin"): ?> 
                <a href="index.php?page=modifyAnimal&id=<?= $animal->id ?>" class="btn btn-primary">Modifier</a>
                <a href="index.php?page=deleteAnimal&id=<?= $animal->id ?>" class="btn btn-danger">Supprimer</a>
            <?php elseif (isset($_SESSION["user"])): ?>
                <p>Veuillez être connecter pour réserver</p>
                <a href="" alt="" class="btn btn-secondary">Réserver</a>
            <?php endif; ?>
        </div>
    </div>
