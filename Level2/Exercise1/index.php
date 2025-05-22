<?php
session_start();
require_once 'PokerDice.php';

if (!isset($_SESSION["TotalThrows"])) {
    $_SESSION["TotalThrows"] = 0;
}

$dice = array_fill(0, 5, new PokerDice());
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dice roller!!! WOHOOOOOOO!!!</title>


</head>

<body>
    <form method="post" action="">
        <button type="submit" name="run_script">Throw 5 Dice</button>
    </form>

    <?php

    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['run_script'])) {
        foreach ($dice as $die) {
            $die->throw();
            $die->showShape();
            $_SESSION["TotalThrows"]++;
        }
        echo "<p>Total throws: " . getTotalThrows() . "</p>";
    }


    function getTotalThrows(): int
    {
        return $_SESSION["TotalThrows"];
    }

    ?>



</body>

</html>