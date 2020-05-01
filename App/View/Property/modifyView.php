<div class="container mt-5">
<form action="index.php?page=saveModifyProperty&id=" method="POST">
    <div class="form-group">
        <label for="title">Titre</label>
        <input type="text" class="form-control" id="title" name="title" value="">
    </div>
    <div class="form-group">
        <label for="address">Adresse</label>
        <input type="text" class="form-control" id="address" name="address" value="">
    </div>
    <div class="form-group">
        <label for="postalCode">Code postal</label>
        <input type="text" class="form-control" id="postalCode" name="postalCode" value="">
    </div>
    <div class="form-group">
        <label for="surface">Surface</label>
        <input type="number" class="form-control" id="surface" name="surface" value="">
    </div>
    <div class="form-group">
        <label for="type">Type</label>
        <select name="type" id="type"  value="">
            <option value="1">Appartement</option>
            <option value="2">Maison</option>
        </select>
    </div>
    <div class="form-group">
        <label for="floor">Etage</label>
        <input type="number" class="form-control" id="floor" name="floor" value="">
    </div>
    <button type="submit" class="btn btn-primary">Enregistrer</button>
</form>
</div>