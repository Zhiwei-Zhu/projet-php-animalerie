<div class="container mt-5">
<form action="index.php?page=paiement" method="POST">
<?= "Votre montant :", $montanttotal ?>
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
        <input type="date" class="form-control">
    </div>
    <div class="form-group">
        <label for="Stock">Code de sécurité (CVV)</label>
        <input type="number" class="form-control">
    </div>
    <br>
    <a href="index.php?page=merci"  class="btn btn-primary">Payer</a>
       <a href="index.php?page=home"  class="btn btn-danger">Annuler</a>
</form>
</div>