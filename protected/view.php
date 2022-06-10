<?php
    require_once "header.php";
    require_once "db_helper.php";


    //résztvevők id-ja
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $result = $crud->getAttendeeViews($id);
    }else{
        echo "<h1 class='text-danger'>Próbáld újra</h1>h1>";
    }

    ?>

<div class="card" style="width: 18rem;">
    <div class="card-body">
        <h5 class="card-title">
            <?php echo  $result['vezeteknev'] . ' ' .  $result['keresztnev'];  ?>
        </h5>
        <h6 class="card-subtitle mb-2 text-muted">
            <?php echo  $result['specialities'];  ?>
        </h6>
        <p class="card-text">
            Születési idő: <?php echo  $result['szulev'];  ?>
        </p>
        <p class="card-text">
            Email cím: <?php echo  $result['email'];  ?>
        </p>
        <p class="card-text">
            Telefonszám: <?php echo  $result['telszam'];  ?>
        </p>

    </div>
</div>
