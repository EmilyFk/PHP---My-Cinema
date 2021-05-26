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
//session_start();
//add database connection
require 'db.php';

if(isset($_POST['save_screening'])) {
    $rooms = $_POST['rooms'];
    $movies = $_POST['movies'];
    $event_dt = $_POST['event_dt'];
    $sql = "INSERT INTO screening (movie_id, room_id, datetime) VALUES('$movies', '$rooms', '$event_dt')";

    if ($conn->query($sql) === TRUE) {
        echo "<br/><br/>
<div class=\"card text-center card-signInUp\">
                <div class=\"card-header\">
                    <h4 class=\"text-danger\">ΕΠΙΒΕΒΑΙΩΣΗ</h4>
                </div>
                <div class=\"card-body\"><br/>
                    <h5 class=\"card-title\">Η νέα κράτηση δημιουργήθηκε!</h5><br/><br/>
                    <button type=\"button\" class=\"btn btn-outline-info\"><a href=\"istoriko.php\">Συνέχεια...</a></button><br/>
                </div>
            </div>";
    } else {
        echo "Error: Η κράτηση δεν δημιουργήθηκε: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();
}
?>
<?php
require "./footer.php";
?>
</body>
</html>
