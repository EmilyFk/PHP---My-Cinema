<!doctype html>
<html lang="en">
<?php
require "./head.php";
?>
<body>
<?php
require "./header.php";
?>
<main class="container mb-3 mt-3">
    <br/><button type="button" class="btn btn-outline-warning"><a href="makingrooms.php">Δημιουργία Αίθουσας</a></button>
    <button type="button" class="btn btn-outline-warning"><a href="makingScreenings.php">Δημιουργία Προβολής</a></button>
    <button type="button" class="btn btn-outline-light"><a href="#">Διόρθωση Αίθουσας</a></button>
    <button type="button" class="btn btn-outline-light"><a href="#">Διόρθωση Προβολής</a></button><br/><br/>
    <br/><h4><mark>Ιστορικό κρατήσεων: </mark></h4><br/>

        <br/>
        <table class="table table-striped table-bordered mydatatable" style="width: 100%">
            <thead>
            <tr>
                <th>Ημέρα & Ώρα Προβολής</th>
                <th>Ταινία</th>
                <th>Τοποθεσία</th>
                <th>Όνομα</th>
                <th>Επώνυμο</th>
                <th>e-mail</th>
                <th>Αριθμός Εισητηρίων</th>
            </tr>
            </thead>
        </table>
        <tbody>
        <tr>
            <td>Ημέρα & Ώρα Προβολής</td>
<!--            <td>Ταινία</td>-->
<!--            <td>Τοποθεσία</td>-->
<!--            <td>Όνομα</td>-->
<!--            <td>Επώνυμο</td>-->
<!--            <td>e-mail</td>-->
<!--            <td>Αριθμός Εισητηρίων</td>-->
        </tr>
        <tr>
            <td>Ημέρα & Ώρα Προβολής</td>
<!--            <td>Ταινία</td>-->
<!--            <td>Τοποθεσία</td>-->
<!--            <td>Όνομα</td>-->
<!--            <td>Επώνυμο</td>-->
<!--            <td>e-mail</td>-->
<!--            <td>Αριθμός Εισητηρίων</td>-->
        </tr>
        <tr>
            <td>Ημέρα & Ώρα Προβολής</td>
<!--            <td>Ταινία</td>-->
<!--            <td>Τοποθεσία</td>-->
<!--            <td>Όνομα</td>-->
<!--            <td>Επώνυμο</td>-->
<!--            <td>e-mail</td>-->
<!--            <td>Αριθμός Εισητηρίων</td>-->
        </tr>

        <br/>
        <br/>
        </tbody>
    <tfoot>
    <tr>
        <th>Ημέρα & Ώρα Προβολής</th>
        <th>Ταινία</th>
        <th>Τοποθεσία</th>
        <th>Όνομα</th>
        <th>Επώνυμο</th>
        <th>e-mail</th>
        <th>Αριθμός Εισητηρίων</th>
    </tr>
   <t/foot>

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
        <br/><br/> Επέλεξε το επόμενο βήμα σου:

        <button type="button" class="btn btn-outline-info"><a href="makingrooms.php">Συνέχεια..</a></button>



</main>
<?php
require "./footer.php";
?>
</body>
</html>
