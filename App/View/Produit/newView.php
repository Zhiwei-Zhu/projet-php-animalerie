<div class="container mt-5">
<form action="index.php?page=newProduit" method="POST">
<div class="form-group">
        <label for="nom">Nom</label>
        <input type="text" class="form-control" id="nom" name="nom" value="">
    </div>
    <div class="form-group">
        <label for="type_animal">Catégorie</label>
        <input type="text" class="form-control" id="type_animal" name="type_animal" value="">
    </div>
    <div class="form-group">
        <label for="Prix">Prix</label>
        <input type="number" class="form-control" id="prix" name="prix" value="">
    </div>
    <div class="form-group">
        <label for="stock">Stock</label>
        <input type="number" class="form-control" id="stock" name="stock" value="">
    </div>
        <button type="submit" class="btn btn-primary">Enregistrer</button>
</form>
</div>