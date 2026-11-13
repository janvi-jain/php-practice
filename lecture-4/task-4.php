
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task-4</title>
</head>
<body>
    <form method="post">
        <table border="1">
            <tr>
                <td>Enter your Age : </td>
                <td><input type="text" name="age"></td>
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

        $age = !empty($_POST['age']) ? $_POST['age'] : 0;

        if($age >= 18) {
            echo "You are Eligible for Voting";
        }
        else {
            echo "You are Not Eligible for Voting";
        }
    }
?>
