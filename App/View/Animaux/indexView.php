<div class="recherche mt-5"></div>
<div class="affichage mt-5 justify-content-around">
    <?php foreach ($animals as $animal) : ?>
        <div class="card" style="width: 18rem;">
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
                <a href="<?= $animal->id ?>" class="btn btn-primary">Voir en détail</a>
            </div>
        </div>
    <?php endforeach ?>
</div>
