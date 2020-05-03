<table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">Produit</th>
              <th scope="col">quantité</th>
            <th scope="col">Montant</th>
          </tr>
        </thead>
        <tbody>
            <?php foreach ($commandes as $commande) : ?>
                <tr>
                    <td><?= $commande->produit_id ?></td>
                    <td><?= $commande->quantite ?></td>
                    <td><?= $commande->montant ?></td>
                </tr>
            <?php endforeach ?>
        </tbody>

    </table>
<a href="index.php?page=paiement" class="btn btn-primary">payer</a>