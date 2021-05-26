<?php
if(!isset($_SESSION)) {
    session_start();
};
?>
<header class="header bg-white text-dark ">

<!--    <div class="container bg-secondary">-->
<!--    <header>-->
    <br/><br/>
        <h1 class="text-center ">My Cinema</h1>

<!--    </header>-->
    <nav class="nav justify-content-center ">
    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link active text-dark" aria-current="page" href="homePage.php">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link dropdown-toggle text-dark" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Έργα</a>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="rightnow.php">Παίζονται ΤΩΡΑ</a></li>
                <li><a class="dropdown-item" href="upcomming.php">Προσεχώς</a></li>
            </ul>
        </li>
        <li class="nav-item">
            <a class="nav-link text-dark" href="locations.php">Τοποθεσίες</a>
        </li>
        <?php
        if (!isset($_SESSION['loggedIn'])){
            echo "<li class=\"nav-item\">
            <a class=\"nav-link text-dark\" href=\"signInsignUp.php\">Sign In/Sign Up</a>
        </li>";
        }
        else{
            if ($_SESSION['sessionRole'] == "admin"){
                echo "<li class=\"nav-item\">
                <a class=\"nav-link text-dark\" href=\"istoriko.php\">Καρτέλα Admin</a>
            </li>
                <li class=\"nav-item\">
                <a class=\"nav-link text-dark\" href=\"signout.php\">Sign Out</a>
            </li>";
            }
            else {
//      **** DES:    ΣΤΟ ΚΑΡΤΕΛΑ ΧΡΗΣΤΗ βαλε αυτο:  $_SESSION['sessionFName']   ****
                echo "<li class=\"nav-item\">
                <a class=\"nav-link text-dark\" href=\"istorikocustomer.php\">Καρτέλα Χρήστη</a>
            </li>
                <li class=\"nav-item\">
                <a class=\"nav-link text-dark\" href=\"signout.php\">Sign Out</a>
            </li>";
            }
        }
        ?>

    </ul>
    </nav>
</header>
<!--<div>-->
<!--    <nav class="nav justify-content-center ">-->
<!--<a class="alert alert-danger text-center" role="alert" href="#">Κλείσε θέση ΕΔΩ!</a>-->
<!--    </nav>-->
<!--</div>-->
<div class="alert alert-danger text-center" role="alert">
    Κλείσε θέση <a href="thebooking.php" class="alert-link"> ΕΔΩ</a> !
</div>

<nav1>

</nav1>
<nav2>

</nav2>