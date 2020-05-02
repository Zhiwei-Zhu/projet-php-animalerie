<div class="container mt-5">
<form action="index.php?page=saveModifyProperty&id=" method="POST">
    <div class="form-group">
        <label for="Nom">Nom</label>
        <input type="text" class="form-control" id="Nom" name="Nom" value="">
    </div>
    <div class="form-group">
        <label for="address">Catégorie</label>
        <input type="text" class="form-control" id="address" name="address" value="">
    </div>
    <div class="form-group">
        <label for="postalCode">Prix</label>
        <input type="text" class="form-control" id="postalCode" name="postalCode" value="">
    </div>
    <div class="form-group">
        <label for="surface">Stock</label>
        <input type="number" class="form-control" id="surface" name="surface" value="">
    </div>
        <button type="submit" class="btn btn-primary">Enregistrer</button>
    </form>
</div>