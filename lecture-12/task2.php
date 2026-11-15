<!DOCTYPE html>
<html>
<body>

<h2>Subject Marks Table</h2>

<form method="get">
    <input type="submit" name="submit" value="Show Marks">
</form>

<?php
if(isset($_GET['submit'])){
    $students = array(
        array("Janvi", 80, 85, 90),
        array("Priya", 75, 80, 85),
        array("Riya", 90, 95, 88)
    );

    foreach($students as $student){
        echo "Name: " . $student[0] . "<br>";
        echo "PHP: " . $student[1] . "<br>";
        echo "C++: " . $student[2] . "<br>";
        echo "Java: " . $student[3] . "<br><br>";
    }
}
?>

</body>
</html>
