<?php

    require_once 'protected/header.php';
    require_once 'protected/db_helper.php';

    $result = $crud -> getSpecialities();
    ?>

<form method="post" action="protected/succes.php">
    <div class="form-group">
        <label for="vezeteknev" class="form-label">Vezetéknév</label>
        <input type="text" class="form-control" id="vezeteknev" name="vezeteknev">
    </div>

    <div class="form-group">
        <label for="keresztnev" class="form-label">Keresztnév</label>
        <input type="text" class="form-control" id="keresztnev" aria-describedby="emailHelp" name="keresztnev">
    </div>

    <div class="form-group">
        <label for="szulido">Születési idő</label>
        <input type="text" class="form-control" id="szulido" name="szulido">
    </div>
    <div class="form-group">
        <label for="speciality">Area of Expertise</label>
        <select class="form-control" id="speciality" name="speciality">
            <?php while($r = $result->fetch(PDO::FETCH_ASSOC)) {?>
                <option value="<?php echo $r['id'] ?>"><?php echo $r['name']; ?></option>
            <?php }?>
        </select>
    </div>
    <div class="form-groupform-group">
        <label for="telszam">Telefonszám</label>
        <input type="text" class="form-control" id="telszam" name="telszam" aria-describedby="phoneHelp" >
    </div>

    <div class="form-group">
        <label for="email">Email cím</label>
        <input required type="email" class="form-control" id="email"  name="email" aria-describedby="emailHelp" >
    </div>



    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>
<?php require_once 'protected/footer.php'; ?>