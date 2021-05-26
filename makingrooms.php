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
<main class="container "><br/>
    <h4><u><mark>Δημιουργήστε Αίθουσες!</mark></u></h4><br/>
    <h6>   Ακολουθήστε τα βήματα που αναφέρονται:</h6><br/>
    <div class="row gx-5">
        <div class="col">
            <div class="card card-cinema border-secondary mb-3">
                <div class="card-header text-center"><h4> Δημιουργία Αίθουσας</h4></div>
                <div class="card-body text-secondary text-center">
                    <!--                    <h5 class="card-title">Secondary card title</h5>-->
                    <p class="card-text"> <em>Επιλογές διαμόρφωσης:</em>  <br/>

                    <form action="verifymakedrooms.php" method="post">
                        <u> Τοποθεσία:</u>  <input type="text" name="roomname"><br/><br/>
                        <em>Καθίσματα Αίθουσας:</em>  <br/><br/>

                        <u> Γραμμές:</u> <input type="number" name="r_rows"><br/><br/>
                        <u> Στήλες:</u> <input type="number" name="r_cols"><br/><br/><br/>
                        <input type="submit" ><br/>
                    </form>
                    </p>
               </div>
            </div>
        </div>


    </div>
    <br/>

</main>
<!--        --><?php
//        //session_start();
//        //add database connection
//        require 'db.php';
//        $sql = "INSERT INTO rooms (roomname, r_rows, r_cols) VALUES('".$_POST['roomname']."', '".$_POST['r_rows']."', '".$_POST['r_cols']."')";
//
//
//        if ($conn->query($sql) === TRUE){
//            echo "<h4>Η νέα αίθουσα δημιουργήθηκε!</h4>";
//        }else{
//            echo "Error: " .$sql . "<br>" . $conn->error;
//        }
//        $conn->close();
//
//        ?>
<?php
//if (isset($_POST['submit'])) {
//echo (isset($_GET["success"])) && ($_GET["success"]=="registered") ? "<div class=\"alert alert-success\" role=\"alert\">
//                          Registration successful. Please LogIn now!</div>" : "";
//?>






<!--    --><?php

//    ?>
<!--    Για καταχώρηση και πληρωμή πάτησε:-->
<!---->
<!--    <button type="button" class="btn btn-outline-info"><a href="homePage.php">Συνέχεια..</a></button>-->



</main>
<?php
require "./footer.php";
?>
</body>
</html>