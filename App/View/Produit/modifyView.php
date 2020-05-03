<div class="container mt-5">
<form action="index.php?page=modifyProduit<?= $produit->id ?>" method="POST">
    <div class="form-group">
        <label for="Nom">Nom</label>
        <input type="text" class="form-control" id="Nom" name="Nom" value="<?= $produit->nom ?>">
    </div>
    <div class="form-group">
        <label for="Type_animal">Catégorie</label>
        <input type="text" class="form-control" id="Type_animal" name="Type_animal" value="<?= $produit->type_animal ?>">
    </div>
    <div class="form-group">
        <label for="Prix">Prix</label>
        <input type="number" class="form-control" id="Prix" name="Prix" value="<?= $produit->prix ?>">
    </div>
    <div class="form-group">
        <label for="Stock">Stock</label>
        <input type="number" class="form-control" id="Stock" name="Stock" value="<?= $produit->stock ?>">
    </div>
    <button type="submit" class="btn btn-primary">Enregistrer</button>
</form>
</div>
