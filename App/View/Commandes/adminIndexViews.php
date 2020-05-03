<table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">User</th>
            <th scope="col">Montant</th>
              <th scope="col">Etat</th>
              <th scope="col"> </th>
          </tr>
        </thead>
        <tbody>
            <?php foreach ($commandes as $commande) : ?>
                <tr>
                    <td><?= $commande->user_id->nom ?></td>
                    <td><?= $reservation->animal_id->nom ?></td>
                    <td><?= $reservation->daterdv ?></td>
                    <td><?= $commande->user ?></td>
                    <td><?= $commande->montanttotal ?></td>
                    <td><form action="index.php?page=adminCommande&id=<?= $commande->id ?>" method="POST">
                            <select id="etat" name="etat">
                                <option><?= $commande->etat ?></option>
                                <option>erreur paiement</option>
                                <option>attente confirmation</option>
                                <option> en livraison </option>
                                <option>livré</option>
                            </select>
<<<<<<< Updated upstream
                        </td>
                        <td><button type="submit" class="btn btn-primary"></button></td>
                    </form>
=======
                        <button type="submit" class="btn btn-primary">update</button>
                    </form></td>

>>>>>>> Stashed changes
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>