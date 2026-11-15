<!DOCTYPE html>
<html>
<body>

<h2>Find Highest Grade</h2>

<form method="post">
    <input type="submit" name="submit" value="Find Highest Grade">
</form>

<?php
if(isset($_POST['submit'])){
    $students = array(
        "Janvi" => 85,
        "Priya" => 90,
        "Riya" => 75,
        "Neha" => 95
    );

    $highest = 0;
    $name = "";

    foreach($students as $student => $grade){
        if($grade > $highest){
            $highest = $grade;
            $name = $student;
        }
    }

    echo "Highest Grade = " . $highest . "<br>";
    echo "Student Name = " . $name;
}
?>

</body>
</html>
