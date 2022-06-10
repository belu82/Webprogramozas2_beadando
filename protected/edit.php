<?php

    require_once 'header.php';
    require_once 'db_helper.php';

    $result = $crud -> getSpecialities();

    if(!isset($_GET['id'])){
        echo "Hiba";
    }else{
        $id = $_GET['id'];
        $attendee = $crud->getAttendeeViews($id);
    }

    ?>

<h1 class="text-center">Szerkesztés</h1>

<form method="post" action="editpost.php">
    <input type="hidden" name="id" value="<?php echo $attendee['id'] ?>" />

    <div class="form-group">
        <label for="vezeteknev" class="form-label">Vezetéknév</label>
        <input type="text" class="form-control"  value="<?php echo $attendee['vezeteknev']?>" id="vezeteknev" name="vezeteknev">
    </div>

    <div class="form-group">
        <label for="keresztnev" class="form-label">Keresztnév</label>
        <input type="text" class="form-control"  value="<?php echo $attendee['keresztnev']?>" id="keresztnev"  name="keresztnev">
    </div>

    <div class="form-group">
        <label for="szulido">Születési idő</label>
        <input type="text" class="form-control"  value="<?php echo $attendee['szulev']?>" id="szulido" name="szulido">
    </div>
    <div class="form-group">
        <label for="speciality">Area of Expertise</label>
        <select class="form-control" id="speciality" name="speciality" >
            <?php while($r = $result->fetch(PDO::FETCH_ASSOC)) {?>
                <option value="<?php echo $r['id'] ?>"><?php echo $r['specialities']; ?></option>
            <?php }?>        </select>
    </div>
    <div class="form-groupform-group">
        <label for="telszam">Telefonszám</label>
        <input type="text" class="form-control" id="telszam" name="telszam" aria-describedby="phoneHelp" value="<?php echo $attendee['telszam']?>" >
    </div>

    <div class="form-group">
        <label for="email">Email cím</label>
        <input required type="email" class="form-control" id="email"  name="email" aria-describedby="emailHelp" value="<?php echo $attendee['email']?>">
    </div>

    <button type="submit" class="btn btn-primary" name="submit">Mentés</button>
</form>

