<?php include('Header.php') ?>

<div class="container mt-5">
    <form action="index.php?page=newProperty" method="POST">
        <div class="form-group">
            <label for="title">Titre</label>
            <input type="text" class="form-control" id="title" name="title">
        </div>
        <div class="form-group">
            <label for="address">Adresse</label>
            <input type="text" class="form-control" id="address" name="address">
        </div>
        <div class="form-group">
            <label for="postalCode">Code postal</label>
            <input type="text" class="form-control" id="postalCode" name="postalCode">
        </div>
        <div class="form-group">
            <label for="surface">Surface</label>
            <input type="number" class="form-control" id="surface" name="surface">
        </div>
        <div class="form-group">
            <label for="type">Type</label>
            <select name="type" id="">
                <option value="1">Appartement</option>
                <option value="2">Maison</option>
            </select>
        </div>
        <div class="form-group">
            <label for="floor">Etage</label>
            <input type="number" class="form-control" id="floor" name="floor">
        </div>
        <div class="form-group">
            <input type="checkbox" name="options['']" id="" value="">
            <label for=""></label>
        </div>
        <button type="submit" class="btn btn-primary">Enregistrer</button>
    </form>
</div>

<?php include('Footer.php') ?>