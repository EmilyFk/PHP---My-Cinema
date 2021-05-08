<!--signIn or signUp page
Table of contents:
     A. Login (sign in)
     B. Registration (sign up)-->
<?php
require_once 'db.php';
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

<div class="container">
    <br/>
    <h4><mark>Sign In / Sign Up:</mark></h4><br/>
    <div class="row">
<!-- A. Login (sign in)-->
        <div class="col  ">

            <div class="card ">
                <div class="form-signin text-center card-signInUp"  >   <!--vriskei tus xaraktires pu den tha prepe na boun sti vasi k tus metatrepei-->
                    <form action="checkLogin.php" method="post">
                    <br/>
                    <h1 class="h3 mb-3 fw-normal">Sign In</h1>
                    <span>Αν έχεις ήδη λογαριασμό, συνδέσου εδώ:</span>
                        <br/>  <br/>
                        <hr class="mb-3">

                    <label for="inputEmail1" class="form-label">Email*</label>
                    <input type="email" class="form-control" placeholder="Insert your email" id="inputEmail1" name="email" value="<?php echo (isset($_SESSION["email"])) ? $_SESSION["email"] : ""; ?>" required>
                        <span class="error"><?php echo (isset($_SESSION["loginErr"])) ? $_SESSION["loginErr"] : ""; ?></span>
                    <br/>
                    <label for="inputPassword1" class="form-label">Password*</label>
                    <input type="password" class="form-control" placeholder="Insert your password" id="inputPassword1" name="password"
                           class="<?php echo $_SESSION["false"];?>" required>
                    <span class="error"><?php echo (isset($_SESSION["loginErr"])) ? $_SESSION["loginErr"] : ""; ?></span>
                    <br/><br/>
                        <p><span class="error">*These fields are required.</span></p><br/>
                        <hr class="mb-3">
                    <button class="btn btn-outline-secondary" role="submit">Submit</button>
<!--                    <a class="btn btn-outline-secondary" href="submit.php" role="button">Submit</a>-->
                    <br/><br/>
                    <br/><br/>
                    </form>
                </div>
            </div>
            <?php
            echo "<h4>Your Input:</h4>";
            echo "<br>";
            echo (isset($_SESSION["email"])) ? $_SESSION["email"] : "";
            echo "<br>";
            echo (isset($_SESSION["password"])) ? $_SESSION["password"] : "";
            echo "<br>";

            ?>
        </div>


<!-- B. Registration (sign up)-->
        <div class="col ">


            <div class="card ">

<!--                --><?php
//                $sql = "SELECT * FROM users";
//                $result = mysqli_query($conn, $sql);
//                $rowCount = mysqli_num_rows($result);
//
//                if($rowCount > 0){
//                    while ($row = mysqli_fetch_assoc($result)){
//                        echo $row['email']."<br>";
//                    }
//                }
//                    else {
//                        echo "No results found.";
//                    }
//
//                ?>
                <div class="form-signin card-signInUp text-center" >  <!--vriskei tus xaraktires pu den tha prepe na boun sti vasi k tus metatrepei-->
                    <form action="checkRegistration.php" method="post" >
                    <br/>
                    <h1 class="h3 mb-3 fw-normal">Sign Up</h1>
                    <span>Αν δεν έχεις λογαριασμό, συμπλήρωσε τα στοιχεία σου:</span>
<!--                    <br/>  <br/>-->
                    <hr class="mb-3">
                    <label for="firstname" class="form-label">First Name*</label>
                    <input id="firstname" type="text" class="form-control " placeholder="Insert your first name" aria-label="First name" name="firstname" value="<?php echo (isset($_SESSION["firstname"])) ? $_SESSION["firstname"] : ""; ?>" class="<?php echo $_SESSION["false"];?>" required>
                    <span class="error"> <?php echo (isset($_SESSION["firstnameErr"])) ? $_SESSION["firstnameErr"] : ""; ?></span>
                    <br/>
                    <label for="lastname" class="form-label">Last Name*</label>
                    <input id="lastname" type="text" class="form-control " placeholder="Insert your last name" aria-label="Last name"  name="lastname" value="<?php echo (isset($_SESSION["lastname"])) ? $_SESSION["lastname"] : ""; ?>" class="<?php echo $_SESSION["false"];?>" required>
                    <span class="error"> <?php echo (isset($_SESSION["lastnameErr"])) ? $_SESSION["lastnameErr"] : ""; ?></span>
                    <br/>
                    <label for="tel" class="form-label">Telephone*</label>
                    <input id="tel" type="tel" class="form-control" placeholder="Insert your telephone" aria-label="Telephone" name="telephone" value="<?php echo (isset($_SESSION["telephone"])) ? $_SESSION["telephone"] : ""; ?>" class="<?php echo $_SESSION["false"];?>" required>
                    <span class="error"> <?php echo (isset($_SESSION["telephoneErr"])) ? $_SESSION["telephoneErr"] : ""; ?></span>
                    <br/>
                    <label for="inputEmail" class="form-label">Email*</label>
                    <input type="email" class="form-control" placeholder="Insert your email" id="inputEmail" name="email" value="<?php echo (isset($_SESSION["email"])) ? $_SESSION["email"] : ""; ?>" class="<?php echo $_SESSION["false"];?>"required>
                    <span class="error"> <?php echo (isset($_SESSION["emailErr"])) ? $_SESSION["emailErr"] : ""; ?></span>
                    <br/>
                    <label for="inputPassword4" class="form-label">Password*</label>
                    <input type="password" class="form-control" placeholder="Insert your password" id="inputPassword" name="password" class="<?php echo $_SESSION["false"];?>" required>
                    <span class="error"><?php echo (isset($_SESSION["passwordErr"])) ? $_SESSION["passwordErr"] : ""; ?></span>
                    <br/>
<!--                    <p>I'm not a robot recaptcha</p>-->
<!--                    <a class="btn btn-outline-secondary" href="submit.php" type="button">Submit</a>-->

                        <p class="text-danger"><?php echo (isset($_GET["error"])) ? $_GET["error"] : ""; ?></p>

                        <p><span class="error">*These fields are required.</span></p><br/>

                        <hr class="mb-3">
                    <button class="btn btn-outline-secondary" type="submit" name="submit">Register</button><br/><br/>
                    </form>
                </div>
            </div>
            <?php
            var_dump($_POST);
            echo "<h2>Your Input:</h2>";
            echo (isset($_SESSION["firstname"])) ? $_SESSION["firstname"] : "";
            echo "<br>";
            echo (isset($_SESSION["lastname"])) ? $_SESSION["lastname"] : "";
            echo "<br>";
            echo (isset($_SESSION["telephone"])) ? $_SESSION["telephone"] : "";
            echo "<br>";
            echo (isset($_SESSION["email"])) ? $_SESSION["email"] : "";
            echo "<br>";
            echo (isset($_SESSION["pass"])) ? $_SESSION["pass"] : "";
            echo "<br>";
            ?>
        </div>
    </div>
</div>
<?php
require "./footer.php";
?>
</body>
</html>
