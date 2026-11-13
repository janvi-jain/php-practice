<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task-2</title>
</head>
<body>
    <form method="get">
        <table border = "1">
            <tr>
                <td>Enter Value of A : &nbsp</td>
                <td><input type="text" name="firstvalue"></td>
            </tr>
            <tr>
                <td>Enter Value of B : &nbsp</td>
                <td><input type="text" name="secondValue"></td>
            </tr>
            <tr>
                <td><input type="submit" name="submit"></td>
            </tr>
        </table>
    </form>
</body>
</html>

<?php
    if(isset($_GET['submit'])){
        $a = !empty($_GET['firstvalue']) ? $_GET['firstvalue'] : 0;
        $b = !empty($_GET['secondValue']) ? $_GET['secondValue'] : 0;
        $ans = ($a * $a)+ (2 * $a * $b) + ($b * $b) ;
    }
    echo "<br><br>";
    echo "Sum : $ans";
?>