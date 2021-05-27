<!doctype html>
<html lang="en">
<?php
require "./head.php";
?>
<body>
<?php
require "./header.php";
//add database connection
require 'db.php';

if ($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM rooms where room_id=" . $_GET['room_id'];
$result = $conn->query($sql);
if ( $result -> num_rows > 0 ) {
    while($rows = $result->fetch_assoc()) {
        $_SESSION['r_rows']=$rows["r_rows"];
        $_SESSION['r_cols']=$rows["r_cols"];
        $_SESSION['room']=$rows["roomname"];
    }
    echo "</table>";
}
else {
    echo "0 results";
}
$conn->close();
?>
    <form method="POST" action="reserveSeats.php">
        <input type="hidden" name="room_id" value="<?php echo $_GET["room_id"];?>">
        <input type="hidden" name="movie_id" value="<?php echo $_GET["movie_id"];?>">
        <input type="hidden" name="screening_id" value="<?php echo $_GET["screening_id"];?>">

        <main class="container">
            <br/>
        <div>
        <table class="table table-striped table-hover">
            <thead>
            <tr>
                <!-- ta kanw dropdown apo th vasi-->
                <h4>
                    <mark>Κράτηση Εισητηρίων</mark>
                </h4>
                <td>Επέλεξε τις θέσεις που θες στην αίθουσα: " <?php echo $_SESSION['room']; ?> "!</td> <br/>

    <!--            <th>Αριθμός Εισητηρίων</th>-->
            </tr>
            </thead>
        </table>
    </div>

<div class="card text-center text-dark bg-light mb-3 card-signInUp">
    <table align="center" border="3" cellpadding="5" cellspacing="0" ><br/><br/>
    <?php
//    var_dump($_GET);
    for ($i=1;$i<=$_SESSION['r_cols'];$i++) {
        echo "<tr>";
        for ($j=1; $j<=$_SESSION['r_rows']; $j++) {
            echo "<td> <span class=\"border border-3 border-secondary\">Seat: ".$i. "/" .$j."<img src='photos/redd.png' width='19px'><input type='checkbox' name='seat[]' value='".$i. "/" .$j."'></span></td>";
        }
        echo "</tr>";
    }
    ?>
    </table> <br/><br/>
        <div class="p-1 mb-1 bg-secondary text-white  card-room">Οθόνη</div>
    <br/>
</div>

        <div class="row justify-content-end"><div class="col-4">
                <em>Για καταχώρηση και πληρωμή πατήστε : </em>
             <button type="submit" class="btn btn-outline-success">Check Out</a></button>
<!--            <br/>   <button type="button" class="btn btn-outline-info"><a href="makingrooms.php">Συνέχεια..</a></button>    -->
        </div></div>

</form>
</main>
<!--an o pelaths pathsei epilogh thesewn k submit na energopoihthei auto gia na diavasei tis theseis tu pelath-->
<?php
if (isset($_GET["seat"])){
    for($i=0; $i<count($_GET['seat']); $i++){
//       edw tha valw insert
echo $_GET['seat'] [$i]. "<br>";
    }
}
?>
<?php
require "./footer.php";
?>
</body>
</html>