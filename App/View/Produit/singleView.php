<div class="recherche mt-5"></div>
<div class="affichage mt-5 justify-content-around">
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
            <h5 class="card-title"></h5>
            <div class="card-text">
                <p>Nom: <?= $produit->nom ?></p>
                <p>Catégorie: <?= $produit->type_animal ?></p>
                <p>Prix: <?= $produit->prix ?></p>
                <p>Stock: <?= $produit->stock ?> </p>
            </div>
        <?php if (!isset($_SESSION["user"])): ?>
            <p>Veuillez être connecter pour acheter</p>
            <a href="" alt="" class="btn btn-secondary">Ajouter au Panier</a>
        <?php else : ?>
            <form action="index.php?page=addCommande&id=<?= $produit->id ?>" method="POST">
                <label for="quantite">quantité</label>
                <input type="number" id="quantite" name="quantite">
                <button type="submit" class="btn btn-primary">Ajouter au Panier</button>
            </form>
            <?php if ($_SESSION["user"]->role=="admin"): ?>
                <a href="index.php?page=modifyProduit&id=<?= $produit->id ?>" class="btn btn-primary">Modifier</a>
                <a href="index.php?page=deleteProduit&id=<?= $produit->id ?>" class="btn btn-danger">Supprimer</a>
            <?php endif; ?>
        <?php endif; ?>
        </div>
    </div>
</div>