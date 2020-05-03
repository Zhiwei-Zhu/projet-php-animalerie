<div class="recherche mt-5"></div>
<div class="affichage mt-5 justify-content-around">
    <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="https://fakeimg.pl/300x200/" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title"></h5>
            <div class="card-text">
                <p>Nom: <?= $produit->nom ?></p>
                <p>Catégorie: <?= $produit->type_animal ?></p>
                <p>Prix: <?= $produit->prix ?></p>
                <p>Stock: <?= $produit->stock ?> </p>
            </div>
            <?php if (!isset($_SESSION["user"])): ?>
                <a href="index.php?page=reserver&id=<?= $produit->id ?>" class="btn btn-primary">Ajouter au panier</a>
            <?php elseif ($_SESSION["user"]->role=="admin"): ?> 
                <a href="index.php?page=modifyAnimal&id=<?= $produit->id ?>" class="btn btn-primary">Modifier</a>
                <a href="index.php?page=deleteAnimal&id=<?= $produit->id ?>" class="btn btn-danger">Supprimer</a>
            <?php elseif (isset($_SESSION["user"])): ?>
                <p>Veuillez vous connecter pour ajouter un produit au panier</p>
                <a href="" alt="" class="btn btn-secondary">Ajouter au panier</a>
            <?php endif; ?>
        </div>
    </div>
</div>