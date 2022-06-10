<?php

    require_once 'header.php';
    require_once 'db_helper.php';
    $result = $crud->getAttendees();
    ?>

<table class="table">
    <tr>
        <th>id</th>
        <th>Vezetéknéve</th>
        <th>Keresztnév</th>
        <th>Születési idő</th>
        <th>Telefonszám</th>
        <th>E-mail cím</th>
    </tr>
    <?php
        while ($r = $result->fetch(PDO::FETCH_ASSOC)){ ?>
        <tr>
            <td><?php echo $r['id']?></td>
            <td><?php echo $r['vezeteknev']?></td>
            <td><?php echo $r['keresztnev']?></td>
            <td><?php echo $r['szulev']?></td>
            <td><?php echo $r['telszam']?></td>
            <td><?php echo $r['email']?></td>
            <td>
                <a href="view.php?id=<?php echo $r['id']?>" class="btn btn-primary">Megtekint</a>
                <a href="edit.php?id=<?php echo $r['id']?>" class="btn btn-warning">Szerkeszt</a>
                <a href="delete.php?id=<?php echo $r['id']?>" class="btn btn-danger">Töröl</a>

            </td>

        </tr>
      <?php } ?>
</table>

