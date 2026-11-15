<!DOCTYPE html>
<html>
<body>

<h2>Employee Salaries</h2>

<form method="get">
    <input type="submit" name="submit" value="Print Salaries">
</form>

<?php
if(isset($_GET['submit'])){
    $employees = array(
        "Rahul" => 25000,
        "Priya" => 30000,
        "Amit" => 28000,
        "Neha" => 35000
    );

    foreach($employees as $name => $salary){
        echo $name . " = " . $salary . "<br>";
    }
}
?>

</body>
</html>
