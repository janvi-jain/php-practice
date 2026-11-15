<!DOCTYPE html>
<html>
<body>

<h2>Employee Details</h2>

<form method="get">
    <input type="submit" name="submit" value="Show Details">
</form>

<?php
if(isset($_GET['submit'])){
    $employees = array(
        array("id" => 1, "name" => "Rahul", "salary" => 25000),
        array("id" => 2, "name" => "Priya", "salary" => 30000),
        array("id" => 3, "name" => "Amit", "salary" => 28000)
    );

    foreach($employees as $employee){
        echo "ID: " . $employee['id'] . "<br>";
        echo "Name: " . $employee['name'] . "<br>";
        echo "Salary: " . $employee['salary'] . "<br><br>";
    }
}
?>

</body>
</html>
