
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
                <td>Enter Student Marks : </td>
                <td><input type="text" name="marks"></td>
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

        $marks = !empty($_POST['marks']) ? $_POST['marks'] : 0;

        if($marks >= 90 && $marks <= 100) {
            echo "Grade : A+";
        }
        else if($marks >= 80 && $marks < 90) {
            echo "Grade : A";
        }
        else if($marks >= 70 && $marks < 80) {
            echo "Grade : B";
        }
        else if($marks >= 60 && $marks < 70) {
            echo "Grade : C";
        }
        else if($marks >= 50 && $marks < 60) {
            echo "Grade : D";
        }
        else if($marks >= 35 && $marks < 50) {
            echo "Pass";
        }
        else {
            echo "Fail";
        }
    }
?>
