<div class="recherche mt-5"></div>
<div class="affichage mt-5 justify-content-around">
    <div class="container">
        <div class="row">
            <?php foreach ($animals as $animal) : ?>
                <div class="col-3">
                    <div class="card" style="width: 18rem;">
                    <?php if($animal->type === "chien"): ?>
                    <img class="card-img-top" src="https://lemagduchien.ouest-france.fr/images/dossiers/2019-06/chien-heureux-064736.jpg" alt="Card image cap">
                <?php endif; ?>
                <?php if($animal->type === "chat"): ?>
                    <img class="card-img-top" src="http://www.leparisien.fr/resizer/74wMQIeXKLDUKuKvSzJQME_0ULg=/932x582/arc-anglerfish-eu-central-1-prod-leparisien.s3.amazonaws.com/public/KNVYKZBDTTOXNO37FEVDTD5DJU.jpg" alt="Card image cap">
                <?php endif; ?>
                <?php if($animal->type === "oiseaux"): ?>
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
                            <a href="index.php?page=singleAnimal&id=<?= $animal->id ?>" class="btn btn-primary">Voir en détail</a>
                        </div>
                    </div>
                </div>    
            <?php endforeach ?>
        </div>
    </div>
</div>
