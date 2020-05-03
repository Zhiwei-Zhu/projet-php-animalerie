<div class="container mt-5">
<form action="index.php?page=paiement" method="POST">
    <div class="form-group">
        <label for="Nom">Nom complet</label>
        <input type="text" class="form-control">
    </div>
    <div class="form-group">
        <label for="Nom">Numéro de carte</label>
        <input type="number" class="form-control">
    </div>
    <div class="form-group">
        <label for="Prix">Date d'expiration</label>
        <input type="number" class="form-control">
    </div>
    <div class="form-group">
        <label for="Stock">Code de sécurité (CVV)</label>
        <input type="number" class="form-control">
    </div>
        <button type="button" class="btn btn-success"><a href="#">Payer</a></button>
        <button type="button" class="btn btn-danger"><a href="index.php">Annuler</a></button>
</form>
</div>