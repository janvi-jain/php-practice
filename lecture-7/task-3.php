
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task-3</title>
</head>
<body>
    <form method="get">
        <table border="1">
            <tr>
                <td>Choose Day : </td>
                <td>
                    1. Monday<br>
                    2. Tuesday<br>
                    3. Wednesday<br>
                    4. Thursday<br>
                    5. Friday<br>
                    6. Saturday<br>
                    7. Sunday
                </td>
            </tr>
            <tr>
                <td>Enter Choice : </td>
                <td><input type="text" name="day"></td>
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

        $day = $_GET['day'];

        switch($day) {

            case 1:
                echo "Monday";
                break;

            case 2:
                echo "Tuesday";
                break;

            case 3:
                echo "Wednesday";
                break;

            case 4:
                echo "Thursday";
                break;

            case 5:
                echo "Friday";
                break;

            case 6:
                echo "Saturday";
                break;

            case 7:
                echo "Sunday";
                break;

            default:
                echo "Invalid Choice";
        }
    }
?>
