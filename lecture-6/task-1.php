
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
                <td>Choose Operation : </td>
                <td>
                    1. Addition<br>
                    2. Subtraction<br>
                    3. Multiplication<br>
                    4. Division
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

        $a = !empty($_POST['a']) ? $_POST['a'] : 0;
        $b = !empty($_POST['b']) ? $_POST['b'] : 0;
        $choice = $_POST['choice'];

        if($choice == 1) {
            $ans = $a + $b;
            echo "Addition : $ans";
        }
        else if($choice == 2) {
            $ans = $a - $b;
            echo "Subtraction : $ans";
        }
        else if($choice == 3) {
            $ans = $a * $b;
            echo "Multiplication : $ans";
        }
        else if($choice == 4) {

            if($b != 0) {
                $ans = $a / $b;
                echo "Division : $ans";
            }
            else {
                echo "Cannot Divide by Zero";
            }
        }
        else {
            echo "Invalid Choice";
        }
    }
?>
