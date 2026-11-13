
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task-5</title>
</head>
<body>
    <form method="get">
        <table border="1">
            <tr>
                <td>Enter Your Weight (in kg) : </td>
                <td><input type="text" name="weight"></td>
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

        $weight = !empty($_GET['weight']) ? $_GET['weight'] : 0;

        if($weight >= 50) {
            echo "You are Healthy";
        }
        else {
            echo "You are Not Healthy";
        }
    }
?>
