
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task-6</title>
</head>
<body>
    <form method="get">
        <table border="1">
            <tr>
                <td>Enter Your Height (in cm) : </td>
                <td><input type="text" name="height"></td>
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

        $height = !empty($_GET['height']) ? $_GET['height'] : 0;

        if($height >= 160) {
            echo "You are Tall";
        }
        else {
            echo "You are Short";
        }
    }
?>
