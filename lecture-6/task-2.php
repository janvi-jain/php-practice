
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task-2</title>
</head>
<body>
    <form method="post">
        <table border="1">
            <tr>
                <td>Enter Length : </td>
                <td><input type="text" name="length"></td>
            </tr>
            <tr>
                <td>Enter Width : </td>
                <td><input type="text" name="width"></td>
            </tr>
            <tr>
                <td>Enter Base : </td>
                <td><input type="text" name="base"></td>
            </tr>
            <tr>
                <td>Enter Height : </td>
                <td><input type="text" name="height"></td>
            </tr>
            <tr>
                <td>Enter Radius : </td>
                <td><input type="text" name="radius"></td>
            </tr>
            <tr>
                <td>Choose Shape : </td>
                <td>
                    1. Rectangle Area<br>
                    2. Triangle Area<br>
                    3. Circle Area
                </td>
            </tr>
            <tr>
                <td>Enter Choice : </td>
                <td><input type="text" name="choice"></td>
            </tr>
            <tr>
                <td><input type="submit" name="submit"></td>
            </tr>
        </table>
    </form>
</body>
</html>

<?php
    if(isset($_POST['submit'])) {

        $length = !empty($_POST['length']) ? $_POST['length'] : 0;
        $width = !empty($_POST['width']) ? $_POST['width'] : 0;
        $base = !empty($_POST['base']) ? $_POST['base'] : 0;
        $height = !empty($_POST['height']) ? $_POST['height'] : 0;
        $radius = !empty($_POST['radius']) ? $_POST['radius'] : 0;

        $choice = $_POST['choice'];

        if($choice == 1) {
            $ans = $length * $width;
            echo "Area of Rectangle : $ans";
        }
        else if($choice == 2) {
            $ans = ($base * $height) / 2;
            echo "Area of Triangle : $ans";
        }
        else if($choice == 3) {
            $ans = 3.14 * $radius * $radius;
            echo "Area of Circle : $ans";
        }
        else {
            echo "Invalid Choice";
        }
    }
?>
