
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
                <td>Enter Number : </td>
                <td><input type="text" name="num"></td>
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

        $num = !empty($_POST['num']) ? $_POST['num'] : 0;

        if($num > 0) {
            echo "Number is Positive";
        }
        else if($num < 0) {
            echo "Number is Negative";
        }
        else {
            echo "Number is Zero";
        }
    }
?>
