
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task-4</title>
</head>
<body>
    <form method="get">
        <table border="1">
            <tr>
                <td>Enter Units : </td>
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

        if($unit > 0) {

            $amount = $unit * 5;

            $interest = ($amount * 20) / 100;

            $total = $amount + $interest;

            echo "<br><br>";
            echo "Total Units : $unit";
            echo "<br>";
            echo "Total Amount : $amount";
            echo "<br>";
            echo "Government Interest (20%) : $interest";
            echo "<br>";
            echo "Final Electricity Bill : $total";

        }
        else {
            echo "Please Enter Valid Units";
        }
    }
?>
