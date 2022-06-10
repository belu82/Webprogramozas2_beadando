<?php
    $title = 'Succes';
    require_once 'header.php';
    require_once 'db_helper.php';


    if(isset($_POST['submit'])){
        $vezeteknev = $_POST['vezeteknev'];
        $keresztnev = $_POST['keresztnev'];
        $szulido = $_POST['szulido'];
        $email = $_POST['email'];
        $telszam = $_POST['telszam'];
        $speciality = $_POST['speciality'];
        //meghívja az insert és megjelöli ha sikeres vagy nem

        $isSucces = $crud->insert($vezeteknev, $keresztnev, $szulido, $email, $telszam, $speciality);

        if($isSucces){
            echo '<h1 class = "text-center text-succes">Regisztrálva vagy!</h1>';
        }
        else{
            echo '<h1 class = "text-center text-danger">Hiba.</h1>';
        }

    }else{
        echo '<h1 class = "text-center text-danger">Hiba regisztrációban</h1>';
    }
?>

        <!--<h1 class="text-center text-success">Sikeres regisztráció</h1>

    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title"><?php echo $_GET['vezeteknev'] . ' ' .  $_GET['keresztnev']; ?></h5>
            <h6 class="card-subtitle mb-2 text-muted"><?php echo $_GET['szulido'] . ' ' .  $_GET['email']; ?></h6>
            <p class="card-text">Születési idő: <?php echo $_GET['szulido'];?></p>
            <p class="card-text">Telefonszám: <?php echo $_GET['telszam'];?></p>

        </div>
    </div>-->

    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">
                <?php echo $_POST['vezeteknev'] . ' ' . $_POST['keresztnev'];  ?>
            </h5>
            <h6 class="card-subtitle mb-2 text-muted">
                <?php echo $_POST['speciality'];  ?>
            </h6>
            <p class="card-text">
                Születési idő: <?php echo $_POST['szulido'];  ?>
            </p>
            <p class="card-text">
                Email cím: <?php echo $_POST['email'];  ?>
            </p>
            <p class="card-text">
                Telefonszám: <?php echo $_POST['telszam'];  ?>
            </p>

        </div>
    </div>

<?php
/*
    $_GET['vezeteknev'];
    $_GET['keresztnev'];
    $_GET['szulido'];
    $_GET['email'];
*/
?>
<br>
<br>
<br>
<br>

<?php require_once 'footer.php'; ?>