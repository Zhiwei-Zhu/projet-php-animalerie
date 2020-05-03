    <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">User</th>
            <th scope="col">Nom animal</th>
            <th scope="col">Date RDV</th>
          </tr>
        </thead>
        <tbody>
            <?php foreach ($reservations as $reservation) : ?>
                <tr>
                    <td><?php $reservation->user_id->nom ?></td>
                    <td><?php $reservation->animal_id->nom ?></td>
                    <td><?php $reservation->daterdv ?></td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
