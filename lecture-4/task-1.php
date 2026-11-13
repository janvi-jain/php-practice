
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task-1</title>
</head>
<body>
    <form method="post">
        <table border="1">
            <tr>
                <td>Enter Value of A : </td>
                <td><input type="text" name="a"></td>
            </tr>
            <tr>
                <td>Enter Value of B : </td>
                <td><input type="text" name="b"></td>
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

        $a = !empty($_POST['a']) ? $_POST['a'] : 0;
        $b = !empty($_POST['b']) ? $_POST['b'] : 0;

        if($a > $b) {
            echo "A is Maximum : $a";
        }
        else if($b > $a) {
            echo "B is Maximum : $b";
        }
        else {
            echo "Both are Equal";
        }
    }
?>
