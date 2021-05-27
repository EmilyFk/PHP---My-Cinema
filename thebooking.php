<!doctype html>
<html lang="en">
<?php
require "./head.php";
?>
<body>
<?php
require "./header.php";
?>
<!--booking mono gia logged in users:-->
<?php
if (!isset($_SESSION['loggedIn'])){
    header("Location: bookingWithoutLogin.php");
}
else{
//add database connection
require 'db.php';


    $sql = "SELECT * FROM rooms";
    //arxikopoiw metavlites
    $sql1 = "";
    $sql2 = "";
    $sql3 = "";
    $room_seats = 0;
    $room_cols = 0;


    //kanw select stus pinakes pu xreiazomai kai dinw tis times tus stis metavlites
    if (isset($_GET['room_id'])){
        $sql1 ="SELECT * FROM screening
                INNER JOIN movies ON movies.movie_id=screening.movie_id
                WHERE screening_id = " . $_GET['room_id'];
    }
    if (isset($_GET['movie_id'])){
        $sql2 ="SELECT * FROM screening WHERE movie_id = " . $_GET['movie_id'];
    }
    if (isset($_GET['screening_id'])){
       $sql3 ="SELECT * FROM rooms WHERE room_id =  " . $_GET['room_id'];
    }
    //
    $result = $conn->query($sql);
    $result1 = $sql1 !== "" ? $conn->query($sql1) : "";
    $result2 = $sql2 !== "" ?$conn->query($sql2) : "";
    $result3 = $sql3 !== "" ?$conn->query($sql3) : ""; // edw fernei 1 room me ta cols k rows tu


}
?>



<main class="container">
    <br/>
    <h4>
        <mark>Κράτηση Εισητηρίων</mark>
    </h4>
    <br/><br/>
    <form action="<?php
    if (isset($_GET['room_id']) && isset($_GET['movie_id']) && isset($_GET['screening_id'])){
        echo "takeseats.php";
    }
    else {
        echo "thebooking.php";
    }
    ?>" method="GET">
        <div class="form-group mb-3 card-signInUp">

<!--an o user einai admin eisagei to email tu customer gia na kanei booking gia ekeinon-->

<!--dropdown menu epiloghs room-->
            <label>Επιλέξτε αίθουσα(τοποθεσία):</label>
            <select name="room_id" class="form-select form-select-sm " aria-label=".form-select-sm example">
                <option value="" disabled>Select Location</option>
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
                     <option value='' disabled>Select Movie</option> ";
                    while($rows = $result1->fetch_assoc()) {
                        $movie_name = $rows['moviename'];
                        $movie_id = $rows['movie_id'];

                        $is_selected = (isset($_GET['movie_id']) && $_GET['movie_id'] == $movie_id) ? "selected" : "";
                        echo "<option value=\"$movie_id\" $is_selected>$movie_name</option>";
                     }
                     echo "</select>";
            }
            ?>
            <br/><br/>
<!--dropdown menu epiloghs provolis:hmera k wra-->
            <?php
            if (isset($_GET['movie_id'])){
                echo "<label>Επιλέξτε προβολή:</label>
                     <select name=\"screening_id\" class=\"form-select form-select-sm \" aria-label=\".form-select-sm example\" >
                     <option value='' disabled>Select Screening</option> ";
                while($rows = $result2->fetch_assoc()) {
                    $datetime = $rows['datetime'];
                    $screening_id = $rows['screening_id'];

                    $is_selected = (isset($_GET['screening_id']) && $_GET['screening_id'] == $screening_id) ? "selected" : "";
                    echo "<option value=\"$screening_id\" $is_selected>$datetime</option>";

                }
                echo "</select><br/><br/>";
            }
//            echo (isset($_SESSION["email"])) ? $_SESSION["email"] : "";
            ?>

            <a class="btn btn-outline-secondary" href="thebooking.php">Reset</a>
            <?php
            if (isset($_GET['room_id']) && isset($_GET['movie_id']) && isset($_GET['screening_id'])){
                echo "<button type=\"submit\" class=\"btn btn-success\">Επιλογή θέσεων..</a></button>";
            }
            else {
                echo "<button type=\"submit\" class=\"btn btn-outline-info\">Συνέχεια..</a></button>";
            }
            ?>



            <!--        <table align="center" border="3" cellpadding="5" cellspacing="0" >-->
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