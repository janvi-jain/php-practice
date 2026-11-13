
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task-3</title>
</head>
<body>
    <form method="get">
        <table border="1">
            <tr>
                <td>Enter Principal Amount : </td>
                <td><input type="text" name="p"></td>
            </tr>
            <tr>
                <td>Enter Rate of Interest : </td>
                <td><input type="text" name="r"></td>
            </tr>
            <tr>
                <td>Enter Number of Years : </td>
                <td><input type="text" name="n"></td>
            </tr>
            <tr>
                <td><input type="submit" name="submit"></td>
            </tr>
        </table>
    </form>
</body>
</html>

<?php
    if(isset($_GET['submit'])) {

        $p = !empty($_GET['p']) ? $_GET['p'] : 0;
        $r = !empty($_GET['r']) ? $_GET['r'] : 0;
        $n = !empty($_GET['n']) ? $_GET['n'] : 0;

        $i = ($p * $r * $n) / 100;

        echo "<br><br>";
        echo "Principal Amount : $p";
        echo "<br>";
        echo "Rate of Interest : $r";
        echo "<br>";
        echo "Number of Years : $n";
        echo "<br>";
        echo "Interest Amount : $i";
    }
?>
