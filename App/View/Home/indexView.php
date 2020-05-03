
<div class="container">
    <div class="mt-5 text-align">
        <h2>Présentation de l'association</h2>
    </div>
    <div class="mt-5 text-align">
        <p>On sait depuis longtemps que travailler avec du texte lisible et contenant du sens est source de distractions, et empêche de se concentrer sur la mise en page elle-même. L'avantage du Lorem Ipsum sur un texte générique comme 'Du texte. Du texte. Du texte.' est qu'il possède une distribution de lettres plus ou moins normale, et en tout cas comparable avec celle du français standard. De nombreuses suites logicielles de mise en page ou éditeurs de sites Web ont fait du Lorem Ipsum leur faux texte par défaut, et une recherche pour 'Lorem Ipsum' vous conduira vers de nombreux sites qui n'en sont encore qu'à leur phase de construction. Plusieurs versions sont apparues avec le temps, parfois par accident, souvent intentionnellement (histoire d'y rajouter de petits clins d'oeil, voire des phrases embarassantes).</p>
    </div>
</div>


<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        <?php foreach ($animals as $animal) : ?>
        <?php if($animal->type === "chat"): ?>
        <div class="carousel-item active">
            <img src="http://www.leparisien.fr/resizer/74wMQIeXKLDUKuKvSzJQME_0ULg=/932x582/arc-anglerfish-eu-central-1-prod-leparisien.s3.amazonaws.com/public/KNVYKZBDTTOXNO37FEVDTD5DJU.jpg" class="d-block w-100" alt="chat">
        </div>
        
        <?php elseif($animal->type === "chien"): ?>
        <div class="carousel-item active">
            <img src="https://lemagduchien.ouest-france.fr/images/dossiers/2019-06/chien-heureux-064736.jpg" class="d-block w-100" alt="chat">
        </div>
        
        <?php elseif($animal->type === "oiseaux"): ?>
            <div class="carousel-item active">
                <img src="https://secure.img1-fg.wfcdn.com/im/07292327/resize-h800-w800%5Ecompr-r85/1166/116615321/Jeremy+Artful+12+in+x+6+in+x+8+in+Birdhouse.jpg" class="d-block w-100" alt="chat">
            </div>
            <?php endif ?>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>

    <?php endforeach ?>
</div>



<div class="recherche mt-5"></div>
<div class="affichage mt-5 justify-content-around">
<?php foreach ($produits as $produit) :?>
    <div class="card" style="width: 18rem;">
    <?php if ($produit->type_animal === "chien"): ?>
        <img class="card-img-top" src="https://cdn.pixabay.com/photo/2015/07/22/13/21/kibble-855419_960_720.jpg" alt="Produit pour chien">
        <?php endif; ?>
    <?php if ($produit->type_animal === "chat"): ?>
        <img class="card-img-top" src="https://image.shutterstock.com/image-photo/ceramic-bowl-dried-pet-food-260nw-1047394765.jpg" alt="Produit pour chat">
        <?php endif; ?>
    <?php if ($produit->type_animal === "oiseaux"): ?>
        <img class="card-img-top" src="https://secure.img1-fg.wfcdn.com/im/07292327/resize-h800-w800%5Ecompr-r85/1166/116615321/Jeremy+Artful+12+in+x+6+in+x+8+in+Birdhouse.jpg" alt="Produit pour oiseaux">
        <?php endif; ?>
        <div class="card-body">
            <h5 class="card-title"></h5>
            <div class="card-text">
                <p>Nom: <?= $produit->nom ?></p>
                <p>Catégorie: <?= $produit->type_animal ?></p>
                <p>Prix: <?= $produit->prix ?></p>
                <p>Stock: <?= $produit->stock ?> </p>
            </div>
            <a href="<?= $produit->id ?>" class="btn btn-primary">Voir en détail</a>
        </div>
    </div>
</div>
<?php endforeach ?>


<div class="container mt-5">
    <form action="index.php?page=dons" method="POST">
        <div class="form-group">
            <label for="montant">Montant</label>
            <input type="text" class="form-control" id="montant" name="montant" value="">
        </div>
    <?php if (isset($_SESSION["user"])): ?>
        <button href="#" type="submit" class="btn btn-primary">Enregistrer</button>
    </form>
</div>

<?php else :?>
    <button href="#" type="submit" disabled >Enregistrer</button>
<?php endif  ?>



