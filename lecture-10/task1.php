
<!DOCTYPE html>
<html>
<body>

<h2>Student Names Array</h2>

<form method="get">
    <input type="submit" name="submit" value="Print Names">
</form>

<?php
if(isset($_GET['submit'])){
    $students = array("Janvi", "Priya", "Riya", "Neha", "Pooja");

    for($i = 0; $i < 5; $i++){
        echo $students[$i] . "<br>";
    }
}
?>

</body>
</html>
