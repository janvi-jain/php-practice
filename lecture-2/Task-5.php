<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task-5</title>
</head>
<body>
    <form method="post">
        <table border = "1">
            <tr>
                <td>Enter Length of Triangle: &nbsp</td>
                <td><input type="text" name="length"></td>
            </tr>
            <tr>
                <td>Enter Breadth of Triangle : &nbsp</td>
                <td><input type="text" name="breadth"></td>
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
        $length = !empty($_POST['length']) ? $_POST['length'] : 0;
        $breadth = !empty($_POST['breadth']) ? $_POST['breadth'] : 0;
        $ans = 2 * $length * $breadth ;
    }
    echo "<br><br>";
    echo "Length : $length";
    echo "<br>";
    echo "Breadth : $breadth";
    echo "<br>";
    echo "Area of Triangle : $ans";
?>