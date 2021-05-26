<!doctype html>
<html lang="en">
<?php
require "./head.php";
?>
<body>
<?php
require "./header.php";
?>
<!--booking only for logged in people and check it:-->
<?php
if (!isset($_SESSION['loggedIn'])){
    header("Location: bookingWithoutLogin.php");
}
else{
//add database connection
require 'db.php';


    $sql = "SELECT * FROM rooms";
    //arxikopoiw meatvlites
    $sql1 = "";
    $sql2 = "";
    $sql3 = "";
    $room_seats = 0;
    $room_cols = 0;

    if (isset($_GET['room_id'])){
        $sql1 ="SELECT * FROM screening
                INNER JOIN movies ON movies.movie_id=screening.movie_id
                WHERE screening_id = " . $_GET['room_id'];
    }
    if (isset($_GET['movie_id'])){
        $sql2 ="SELECT datetime FROM screening WHERE movie_id =  " . $_GET['movie_id'];
    }
    if (isset($_GET['screening_id'])){
       $sql3 ="SELECT * FROM rooms WHERE room_id =  " . $_GET['room_id'];
    }
    $result = $conn->query($sql);
    $result1 = $sql1 !== "" ? $conn->query($sql1) : "";
    $result2 = $sql2 !== "" ?$conn->query($sql2) : "";
    $result3 = $sql3 !== "" ?$conn->query($sql3) : ""; //fernei 1 room me ta cl k rows
}
?>



<main class="container">
    <br/>
    <h4>
        <mark>Κράτηση Εισητηρίων</mark>
    </h4>
    <br/><br/>
    <form action="thebooking.php" method="GET">
        <div class="form-group mb-3 card-signInUp">

<!--dropdown menu epiloghs room-->
            <label>Επιλέξτε αίθουσα(τοποθεσία):</label>
            <select name="room_id" class="form-select form-select-sm " aria-label=".form-select-sm example">
                <option selected>Open this select menu</option>
                <?php
                while($rows = $result->fetch_assoc()) {
                    $room_name = $rows['roomname'];
                    $room_id = $rows['room_id'];
                    $is_selected = (isset($_GET['room_id']) && $_GET['room_id'] == $room_id) ? "selected" : "";
                    echo "<option value=\"$room_id\" $is_selected>$room_name</option>";
                }
                ?>
            </select>
            <br/><br/>

<!--dropdown menu epiloghs movie-->
            <?php
            if (isset($_GET['room_id'])){
                echo "<label>Επιλέξτε ταινία:</label>
                     <select name=\"movie_id\" class=\"form-select form-select-sm \" aria-label=\".form-select-sm example\" >
                     <option selected>Open this select menu</option> ";
                    while($rows = $result1->fetch_assoc()) {
                        $movie_name = $rows['moviename'];
                        $movie_id = $rows['movie_id'];
                        $is_selected = (isset($_GET['movie_id']) && $_GET['movie_id'] == $movie_id) ? "selected" : "";
                        echo "<option value=\"$movie_id\" $is_selected>$movie_name</option>";
                     }
                     echo "</select><br/><br/>";
            }
            ?>
            <br/><br/>
<!--dropdown menu epiloghs provolis:hmera k wra-->
            <?php
            if (isset($_GET['movie_id'])){
                echo "<label>Επιλέξτε προβολή:</label>
                     <select name=\"movies\" class=\"form-select form-select-sm \" aria-label=\".form-select-sm example\" >
                     <option selected>Open this select menu</option> ";
                while($rows = $result2->fetch_assoc()) {
                    $datetime = $rows['datetime'];
                    $screening_id = $rows['screening_id'];
                    echo "<option value=\"$screening_id\">$datetime</option>";
                }
                echo "</select><br/><br/>";
            }
//            echo (isset($_SESSION["email"])) ? $_SESSION["email"] : "";
            ?>

            <a class="btn btn-outline-secondary" href="thebooking.php">Reset</a>
            <button type="submit" class="btn btn-outline-info">Συνέχεια..</a></button>


            <!--        <table align="center" border="3" cellpadding="5" cellspacing="0" >-->
<!--            --><?php
//            $sql = "SELECT * FROM movies";
//            $result = $conn->query($sql);
//            if ($result->num_rows > 0) {
//                echo "Select movie:<select name=movies>";
//                while ($row = $result->fetch_assoc()) {
//                    echo "<option value=" . $row["movie_id"] . ">" . $row["moviename"] . "</option>";
//                }
//                echo "</select>";
//                echo "<br>Select No:<select name=persons><option value=1>1</option><option value=2>2</option><option value=3>3</option><option value=4>4</option></select>";
//                echo "<div class=\"row justify-content-end\"><div class=\"col-4\">
//            <br/>   <button type=\"submit\" class=\"btn btn-outline-info\">Συνέχεια..</a></button>
//
//        </div></div>";
//                "<input type=submit>";
//            } else {
//                echo "O results";
//            }
//            $conn->close();
//
//            ?>
            <!--        </table> -->
            <br/><br/>

        </div>


        <!--            <br/>   <button type="button" class="btn btn-outline-info"><a href="makingrooms.php">Συνέχεια..</a></button>    -->
    </form>
</main>

<?php
require "./footer.php";
?>
</body>
</html>