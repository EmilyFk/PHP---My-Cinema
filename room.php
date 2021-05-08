<?php
session_start();
//$servername = "localhost";
//@username = "root";
//@password = "";
//@dbname = "mycinema";
//@conn = new mysqli($servername, $username, $password, $dbname);

?>

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
    <h4><mark>Επέλεξε Θέσεις:</mark></h4><br/><br/>

    Για καταχώρηση και πληρωμή πάτησε:

    <button type="button" class="btn btn-outline-info"><a href="homePage.php">Συνέχεια..</a></button>
    <button type="button" class="btn btn-outline-secondary"><a href="buytickets.php">πίσω</a></button>


</main>
<?php
require "./footer.php";
?>
</body>
</html>