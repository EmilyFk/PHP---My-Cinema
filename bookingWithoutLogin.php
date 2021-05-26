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
<!--    <div class="card ">-->
<!--        <div class="form text-center card-signInUp"  >-->
<!--                <br/>-->
<!--                <h1 class="h3 mb-3 fw-normal">Εγγεγραμμένοι Πελάτες</h1>-->
<!--                <span>Χρειαζόμαστε τις απαραίτητες πληροφορίες για να διευκολύνουμε τη διαδικασία αγορών σας.<br/>-->
<!--                    Αν δεν έχετε λογαριασμό μαζί μας ή έχετε ήδη λογαριασμό και δεν έχετε συνδεθεί πατήστε εδώ:</span>-->
<!--            <button type="button" class="btn btn-outline-info"><a href="makingrooms.php">Συνέχεια..</a></button>-->
<br/><br/>
            <div class="card text-center card-signInUp">
                <div class="card-header">
                    <h4 class="text-danger">ΠΡΟΣΟΧΗ</h4>
                </div>
                <div class="card-body"><br/>
                    <h5 class="card-title">Πραγματοποιήστε εγγραφή ή απλώς συνδεθείτε!</h5><br/>
                    <p class="card-text">Χρειαζόμαστε τις απαραίτητες πληροφορίες για να διευκολύνουμε τη διαδικασία αγορών σας.<br/>
                                       Αν δεν έχετε λογαριασμό μαζί μας ή έχετε ήδη λογαριασμό και απλώς δεν έχετε συνδεθεί, πατήστε εδώ:</p>
                    <br/>
                    <br/>
                    <button type="button" class="btn btn-outline-info"><a href="signInsignUp.php">Συνέχεια..</a></button><br/>
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
