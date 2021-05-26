<!--meta to registration h to login kalwsorisma xristi-->
<!doctype html>
<html lang="en">
<?php
require "./head.php";
?>
<body>
<?php
require "./header.php";
?>

<main class="container">
    <br/>

    <h4><mark>Καλωσόρισες !</mark></h4><br/><br/>
<p class="card-text">Είσαι <?php echo $_SESSION['sessionRole']; ?> . Με όνομα: <?php echo $_SESSION['sessionFName']; ?> </p>

    Πλοηγήσου στη σελίδα επιλέγοντας το επόμενο βήμα σου:<br/><br/>

    <button type="button" class="btn btn-outline-info"><a href="homePage.php">Αρχική Σελίδα</a></button>
    <button type="button" class="btn btn-outline-secondary"><a href="thebooking.php">Κλείσε θέσεις</a> </button>


</main>
<?php
require "./footer.php";
?>
</body>
</html>