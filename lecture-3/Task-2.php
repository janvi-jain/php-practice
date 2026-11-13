
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task-2</title>
</head>
<body>

    <form method="get">
        <table border="1">
            <tr>
                <td>Enter Units : &nbsp&nbsp</td>
                <td><input type="text" name="unit"></td>
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
        $unit = !empty($_GET['unit']) ? $_GET['unit'] : 0;
        $amount = $unit * 5;
        $facility = ($amount * 20) / 100;
        $total = $amount + $facility;
    }

    echo "<br><br>";
    echo "Units : $unit";
    echo "<br>";
    echo "Amount : $amount";
    echo "<br>";
    echo "Facility Amount : $facility";
    echo "<br>";
    echo "Total Amount : $total";
?>
