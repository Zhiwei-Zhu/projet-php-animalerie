<table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">User</th>
            <th scope="col">Nom Du prouduit</th>
            <th scope="col">Prix</th>
            <th scope="col">Quantité</th>
          </tr>
        </thead>
        <tbody>
            <?php foreach ($reservations as $reservation) : ?>
                <tr>
                    <td><?= $reservation->user_id->nom ?></td>
                    <td><?= $reservation->animal_id->nom ?></td>
                    <td><?= $reservation->daterdv ?></td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>