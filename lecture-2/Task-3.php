<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task-3</title>
</head>
<body>
    <form method="post">
        <table border = "1">
            <tr>
                <td>Enter Radius : &nbsp</td>
                <td><input type="text" name="radius"></td>
            </tr>
            <tr>
                <td><input type="submit" name="submit"></td>
            </tr>
        </table>
    </form>
</body>
</html>

<?php
    if(isset($_POST['submit'])){
        $radius = !empty($_POST['radius']) ? $_POST['radius'] : 0;
        $ans = 2 * 3.14 * $radius * $radius ;
    }
    echo "<br><br>";
    echo "Radius : $radius";
    echo "<br>";
    echo "Area of circle : $ans";
?>