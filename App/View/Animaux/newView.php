<div class="container mt-5">
    <form action="index.php?page=newAnimal" method="POST">
    <div class="form-group">
        <label for="nom">Nom</label>
        <input type="text" class="form-control" id="nom" name="nom" value="">
    </div>
    <div class="form-group">
        <label for="type">Type</label>
        <input type="text" class="form-control" id="type" name="type" value="">
    </div>
    <div class="form-group">
        <label for="race">Race</label>
        <input type="text" class="form-control" id="race" name="race" value="">
    </div>
    <div class="form-group">
        <label for="taille">Taille en cm</label>
        <input type="number" class="form-control" id="taille" name="taille" value="">
    </div>
    <div class="form-group">
        <label for="poids">Poidsen kg</label>
        <input type="number" class="form-control" id="poids" name="poids" value="">
    </div>
    <div class="form-group">
        <label for="age">Age</label>
        <input type="number" class="form-control" id="age" name="age" value="">
    </div>
        <button type="submit" class="btn btn-primary">Enregistrer</button>
    </form>
</div>

