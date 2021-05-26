<!doctype html>
<html lang="en">
<?php
require "./head.php";
?>
<body>
<?php
require "./header.php";
?>
// elegxos login:
<?php
if (!isset($_SESSION['loggedIn'])){
    header("Location: bookingWithoutLogin.php");
}
else{
//add database connection
    require 'db.php';


//    $sql = "SELECT * FROM users";
//    $sql1 = "SELECT * FROM screening";
//    $sql2 = "SELECT * FROM booking_seat";
//    $result = $conn->query($sql);
//    $result1 = $conn->query($sql1);
//    $result2 = $conn->query($sql2);
}
?>
<main class="container">
    <br/>
    <h4><mark>Ιστορικό κρατήσεων: </mark></h4><br/><br/>
    <main class="container md-3 mt-3">
        <br/>
        <table class="table table-striped table-hover">
            <thead>
            <tr>
                <th>Ημέρα & Ώρα Προβολής</th>
                <th>Ταινία</th>
                <th>Τοποθεσία</th>
                <th>Εισητήρια(Θέσεις)</th>
            </tr>
            </thead>
        </table>
        <tbody>
        <tr>
            <td>Ημέρα & Ώρα Προβολής</td>
            <td>Ταινία</td>
            <td>Τοποθεσία</td>
            <td>Εισητήρια(Θέσεις)</td>
        </tr>
        </tbody>

        <!--    <h4><mark>Κράτηση Εισητηρίων</mark></h4><br/><br/>-->
        <!--    <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">-->
        <!--        <option selected>Open this select menu</option>-->
        <!--        <option value="1">One</option>-->
        <!--        <option value="2">Two</option>-->
        <!--        <option value="3">Three</option>-->
        <!--    </select>-->
        <!---->
        <!--    <select class="form-select form-select-sm" aria-label=".form-select-sm example">-->
        <!--        <option selected>Open this select menu</option>-->
        <!--        <option value="1">One</option>-->
        <!--        <option value="2">Two</option>-->
        <!--        <option value="3">Three</option>-->
        <!--    </select>-->
        Επέλεξε το επόμενο βήμα σου:

        <button type="button" class="btn btn-outline-info"><a href="makingrooms.php">Συνέχεια..</a></button>



    </main>
    <?php
    require "./footer.php";
    ?>
</body>
</html>
