
<!DOCTYPE html>
<html>
<body>

<h2>Highest Marks</h2>

<form method="post">
    <input type="submit" name="submit" value="Find Highest Marks">
</form>

<?php
if(isset($_POST['submit'])){
    $marks = array(
        array("Janvi", 80),
        array("Priya", 95),
        array("Riya", 85)
    );

    $highest = $marks[0][1];
    $name = $marks[0][0];

    foreach($marks as $student){
        if($student[1] > $highest){
            $highest = $student[1];
            $name = $student[0];
        }
    }

    echo "Student Name: " . $name . "<br>";
    echo "Highest Marks: " . $highest;
}
?>

</body>
</html>
