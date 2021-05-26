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
    <div>Διαμόρφωση Αίθουσας</div>
    <br/>
    <form>
        Τοποθεσία:<input type="text" name="roomname"<br/>
        Καθίσματα Αίθουσας:
        Γραμμές:<input type="number" name="r_rows"<br/>
        Στήλες:<input type="number" name="r_cols"<br/>
        <input type="submit" <br/>
    </form>
    <h4><mark>Επέλεξε Θέσεις:</mark></h4><br/><br/>
    <?php
    $sql = "INSERT INTO rooms (roomname, r_rows, r_cols) VALUES('".$_POST['roomname']."', '".$_POST['r_rows']."', '".$_POST['r_cols']."')";
if ($conn->query($sql) === TRUE){
    echo "<h4>Η νέα αίθουσα δημιουργήθηκε!</h4>";
}else{
    echo "Error: " .$sql . "<br>" . $conn->error;
}
$conn->close();

    ?>
    Για καταχώρηση και πληρωμή πάτησε:

    <button type="button" class="btn btn-outline-info"><a href="homePage.php">Συνέχεια..</a></button>
    <button type="button" class="btn btn-outline-secondary"><a href="buytickets.php">πίσω</a></button>


</main>
<?php
require "./footer.php";
?>
</body>
</html>