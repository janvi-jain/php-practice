<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task-1</title>
</head>
<body>
    <form method="post">
        <table border = "1">
            <tr>
                <td>Enter Marks of Maths (out of 100): &nbsp&nbsp</td>
                <td><input type="text" name="maths"></td>
            </tr>
            <tr>
                <td>Enter Marks of Science (out of 100): &nbsp&nbsp</td>
                <td><input type="text" name="science"></td>
            </tr>
            <tr>
                <td>Enter Marks of English (out of 100): &nbsp&nbsp</td>
                <td><input type="text" name="english"></td>
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
        $maths = !empty($_POST['maths']) ? $_POST['maths'] : 0;
        $science = !empty($_POST['science']) ? $_POST['science'] : 0;
        $english = !empty($_POST['english']) ? $_POST['english'] : 0;
        $sum = $maths + $science + $english;
        $avg = $sum / 3 ;
    }
    echo "<br><br>";
    echo "Maths : $maths &nbsp|&nbsp";
    echo "Science : $science &nbsp|&nbsp";
    echo "english : $english";
    echo "<br>";
    echo "Sum of three Subjects : $sum";
    echo "<br>";
    echo "Average of three Subjects : $avg";
?>