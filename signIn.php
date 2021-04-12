
<?php
// καθορισμός μεταβλητών και άδεισμα τιμών
$false=$passErr = $emailErr = "";
$pass = $email = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["email"])) {
        $emailErr = "Email is required";
    }
    else {
        $email = test_input($_POST["email"]);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) { // check if e-mail address is well-formed
            $emailErr = "Invalid email format";
        }
    }

    if (empty($_POST["pass"])) {
        $passErr = "Password is required";
    }
    else {
        $pass = test_input($_POST["pass"]);
    }
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>
<div>
<h2>Sign In</h2>
<p><span class="error">* required field.</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

    E-mail: <input type="text" placeholder="Enter your Email" name="email" value="<?php echo $email;?>">
    <span class="error">* <?php echo $emailErr;?></span>
    <br><br>

    Password: <input type="password" placeholder="Enter your Password" name="pass" value="<?php echo $pass;?>" class="<?php echo $false;?>">
    <span class="error">* <?php echo $passErr;?></span>
    <br><br>

    <button type="submit" name="submit" value="Submit">Login</button>

</form>

<?php
echo "<h4>Your Input:</h4>";
echo "<br>";
echo $email;
echo "<br>";
echo $pass;
echo "<br>";

?>



