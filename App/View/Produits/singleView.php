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
            <a href="index.php?page=modifyProperty&id=" class="btn btn-primary">Modifier</a>
            <a href="index.php?page=deleteProperty&id=" class="btn btn-danger">Supprimer</a>
        </div>
    </div>
</div>