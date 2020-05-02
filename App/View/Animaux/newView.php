

<div class="container mt-5">
    <form action="index.php?page=newProperty" method="POST">
        <div class="form-group">
            <label for="title">Nom</label>
            <input type="text" class="form-control" id="title" name="title">
        </div>
        <div class="form-group">
            <label for="address">Type</label>
            <input type="text" class="form-control" id="address" name="address">
        </div>
        <div class="form-group">
            <label for="postalCode">Race</label>
            <input type="text" class="form-control" id="postalCode" name="postalCode">
        </div>
        <div class="form-group">
            <label for="surface">Taille</label>
            <input type="number" class="form-control" id="surface" name="surface">
        </div>
        <div class="form-group">
        <label for="surface">Poids</label>
        <input type="number" class="form-control" id="surface" name="surface" value="">
    </div>
    <div class="form-group">
        <label for="surface">Age</label>
        <input type="number" class="form-control" id="surface" name="surface" value="">
    </div>
        <button type="submit" class="btn btn-primary">Enregistrer</button>
    </form>
</div>

