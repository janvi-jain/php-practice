
<!DOCTYPE html>
<html>
<body>

<h2>Student Attendance</h2>

<form method="post">
    <input type="submit" name="submit" value="Show Attendance">
</form>

<?php
if(isset($_POST['submit']))
{
    $attendance = array(
        array("Janvi", "P", "P", "A", "P", "P"),
        array("Priya", "P", "A", "P", "P", "P"),
        array("Riya", "A", "P", "P", "P", "A")
    );

    echo "Name &nbsp; Mon &nbsp; Tue &nbsp; Wed &nbsp; Thu &nbsp; Fri<br>";

    foreach($attendance as $student){
        foreach($student as $value){
            echo $value . "&nbsp;&nbsp;&nbsp;";
        }

        echo "<br>";
    }
}
?>

</body>
</html>
