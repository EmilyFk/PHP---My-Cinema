<?php
/* 4
TO DO: H krathsh, you have to do the forms of many weeks kane mia miksi pu se ekfrazei */
?>
<html>
<head>
    <title> TODO </title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<div>
    <h2>Grading</h2>
    <form action="color.php" method="GET">
        <label for="colors">Choose a Color: </label>
        <select name="colors" id="colors">
            <option value="red"> RED</option>
            <option value="green">GREEN</option>
            <option value="blue">BLUE</option>
            <option value="other">OTEHR</option>
        </select>
        <input type="submit">
    </form>
</div>
</body>
</html>

        <?php
        $favcolor = $_GET[‘colors’];
        switch ($favcolor) {
            case "red":
                echo "Το αγαπημένο σου χρώμα είναι red!";
                break;
            case "blue":
                echo "Το αγαπημένο σου χρώμα είναι blue!";
                break;
            case "green":
                echo "Το αγαπημένο σου χρώμα είναι green!";
                break;
            default:
                echo "Το αγαπημένο σου χρώμα είναι δεν είναι red, blue, ή green!";
        }
        ?>

