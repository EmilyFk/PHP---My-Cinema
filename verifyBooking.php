<!doctype html>
<html lang="en">
<?php
require "./head.php";
?>
<body>
<?php
require "./header.php";
?>

<main>
    <br/><br/>
    <div class="card text-center card-signInUp">
        <div class="card-header">
            <h4 class="text-danger">ΕΠΙΒΕΒΑΙΩΣΗ</h4>
        </div>
        <div class="card-body"><br/>
            <h5 class="card-title">Η καταχώρηση της κράτησής σας ολοκληρώθηκε επιτυχώς!</h5><br/>
            <p class="card-text">Ευχαριστούμε που χρησιμοποιήσατε τις υπηρεσίες μας!<br/>
                Καλή διασκέδαση!</p>
            <br/>
            <br/>
            <button type="button" class="btn btn-outline-info"><a href="homePage.php">Ολοκλήρωση</a></button><br/>
        </div>
    </div>

    <!--                <hr class="mb-3">-->
    <!---->
    <!--                <label for="inputEmail1" class="form-label">Email*</label>-->
    <!--                <input type="email" class="form-control" placeholder="Insert your email" id="inputEmail1" name="email" value="--><?php //echo (isset($_SESSION["email"])) ? $_SESSION["email"] : ""; ?><!--" required>-->
    <!--                <span class="error">--><?php //echo (isset($_SESSION["loginErr"])) ? $_SESSION["loginErr"] : ""; ?><!--</span>-->
    <!--                <br/>-->
    <!--                <label for="inputPassword1" class="form-label">Password*</label>-->
    <!--                <input type="password" class="form-control" placeholder="Insert your password" id="inputPassword1" name="password"-->
    <!--                       class="--><?php //echo $_SESSION["false"];?><!--" required>-->
    <!--                <span class="error">--><?php //echo (isset($_SESSION["loginErr"])) ? $_SESSION["loginErr"] : ""; ?><!--</span>-->
    <!--                <br/><br/>-->
    <!--                <p><span class="error">*These fields are required.</span></p><br/>-->
    <!--                <hr class="mb-3">-->
    <!--                    <button class="btn btn-outline-secondary" role="submit">Submit</button>-->
    <!--                <button class="btn btn-outline-secondary" type="submit" name="submit">Login</button><br/><br/>-->
    <!--                    <a class="btn btn-outline-secondary" href="submit.php" role="button">Submit</a>-->
    <br/><br/>
    <br/><br/>
    </form>

    </div>


</main>
<?php
require "./footer.php";
?>
</body>
</html>
