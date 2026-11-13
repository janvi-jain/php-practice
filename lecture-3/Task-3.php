
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
                <td>Enter Principle Amount: &nbsp&nbsp</td>
                <td><input type="text" name="p"></td>
            </tr>
            <tr>
                <td>Enter number of years: &nbsp&nbsp</td>
                <td><input type="text" name="n"></td>
            </tr>
            <tr>
                <td>Enter rate of interest: &nbsp&nbsp</td>
                <td><input type="text" name="r"></td>
            </tr>
            <tr>
                <td><input type="submit" name="submit" value="calculate"></td>
            </tr>
        </table>
    </form>

</body>
</html>

<?php
    if(isset($_GET['submit'])) {
        $p = !empty($_GET['p']) ? $_GET['p'] : 0;
        $n = !empty($_GET['n']) ? $_GET['n'] : 0;
        $r = !empty($_GET['r']) ? $_GET['r'] : 0;
        $i = $p * $n * $r;
    }

    echo "<br><br>";
    echo "Principle Amount : $p";
    echo "<br>";
    echo "number of years : $n";
    echo "<br>";
    echo "rate of interest : $r";
    echo "<br>";
    echo "Interest Amount : $i";
?>
