<?php
session_start();
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
<?php

//add database connection
require 'db.php';

//<select name="rooms">

$sql = "SELECT * FROM rooms";
$sql1 = "SELECT * FROM movies";
$result = $conn->query($sql);
$result1 = $conn->query($sql1);
//while($rows = $result->fetch_assoc()) {
// $roomname = $rows['roomname'];
//    $room_id = $rows['room_id'];
//  echo "<option value=\"$room_id\">$roomname</option>";
//    }




//if ( $result -> num_rows > 0 ) {
//      $sql = "INSERT INTO screening (firstname, lastname, telephone, email, password) VALUES (?, ?, ?, ?, ?)";
//    }
//    echo "</table>";
//}
//else {
//    echo "0 results";
//}
//$conn->close();
//?>
<main class="container">
    <br/>
    <h4>
        <mark>Δημιουργία Προβολών</mark>
    </h4>
    <br/><br/>
    <div class="col-md-8">
    <form action="verifymakedScreenings.php" method="POST">
    <div class="form-group mb-3 card-signInUp" >
    <label>Επιλέξτε αίθουσα(τοποθεσία):</label>
    <select name="rooms" class="form-select form-select-sm " aria-label=".form-select-sm example" >
        <option selected>Open this select menu</option>
        <?php
        while($rows = $result->fetch_assoc()) {
        $roomname = $rows['roomname'];
        $room_id = $rows['room_id'];
        echo "<option value=\"$room_id\">$roomname</option>";
        }
        ?>
    </select><br/><br/>
    <label>Επιλέξτε ταινία:</label>
    <select name="movies" class="form-select form-select-sm " aria-label=".form-select-sm example" >
        <option selected>Open this select menu</option>
        <?php
        while($rows = $result1->fetch_assoc()) {
            $moviename = $rows['moviename'];
            $movie_id = $rows['movie_id'];
            echo "<option value=\"$movie_id\">$moviename</option>";
        }
        ?>
    </select><br/><br/>
    <label>Επιλέξτε ημερομηνία και ώρα προβολής:</label>
    <input type="datetime-local" name="event_dt" class="form-control" >

    <br/>
    <br/>
    <p><span class="error">*All these fields are required.</span></p><br/>
    </div><button type="submit" name="save_screening" class="btn btn-outline-info">Αποθήκευση Προβολής</a></button>
<!--        <a href="makingrooms.php">-->
    </form>
    </div>
</main>
<?php
require "./footer.php";
?>
    </body>
</html>
