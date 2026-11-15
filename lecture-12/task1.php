<!DOCTYPE html>
<html>
<body>

<h2>Student Records</h2>

<form method="get">
    <input type="submit" name="submit" value="Show Records">
</form>

<?php
if(isset($_GET['submit'])){
    $students = array(
        array("name" => "Janvi", "age" => 19, "city" => "Surat"),
        array("name" => "Priya", "age" => 20, "city" => "Mumbai"),
        array("name" => "Riya", "age" => 19, "city" => "Ahmedabad")
    );

    foreach($students as $student){
        echo "Name: " . $student['name'] . "<br>";
        echo "Age: " . $student['age'] . "<br>";
        echo "City: " . $student['city'] . "<br><br>";
    }
}
?>

</body>
</html>
