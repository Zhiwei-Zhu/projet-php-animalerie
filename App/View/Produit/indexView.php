<div class="recherche mt-5"></div>
<div class="affichage mt-5 justify-content-around">
<?php foreach ($produits as $produit) :?>
    <div class="card" style="width: 18rem;">
    <?php if ($produit->type_animal == "chien") ?>
        <img class="card-img-top" src="https://fakeimg.pl/300x200/" alt="Produit pour chien">
    <?php elseif($produit->type_animal == "chat") ?>
        <img class="card-img-top" src="https://fakeimg.pl/300x200/" alt="Produit pour chat">
    <?php elseif($produit->type_animal == "oiseaux") ?>
    <img class="card-img-top" src="https://fakeimg.pl/300x200/" alt="Produit pour oiseaux">
    <?php endif ?>
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