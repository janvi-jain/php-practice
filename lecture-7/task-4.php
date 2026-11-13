
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task-4</title>
</head>
<body>
    <form method="get">
        <table border="1">
            <tr>
                <td>Choose Month : </td>
                <td>
                    1. January<br>
                    2. February<br>
                    3. March<br>
                    4. April<br>
                    5. May<br>
                    6. June<br>
                    7. July<br>
                    8. August<br>
                    9. September<br>
                    10. October<br>
                    11. November<br>
                    12. December
                </td>
            </tr>
            <tr>
                <td>Enter Choice : </td>
                <td><input type="text" name="month"></td>
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

        $month = $_GET['month'];

        switch($month) {

            case 1:
                echo "January";
                break;

            case 2:
                echo "February";
                break;

            case 3:
                echo "March";
                break;

            case 4:
                echo "April";
                break;

            case 5:
                echo "May";
                break;

            case 6:
                echo "June";
                break;

            case 7:
                echo "July";
                break;

            case 8:
                echo "August";
                break;

            case 9:
                echo "September";
                break;

            case 10:
                echo "October";
                break;

            case 11:
                echo "November";
                break;

            case 12:
                echo "December";
                break;

            default:
                echo "Invalid Choice";
        }
    }
?>
