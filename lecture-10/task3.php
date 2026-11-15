
<!DOCTYPE html>
<html>
<body>

<h2>Subject Names Array</h2>

<form method="get">
    <input type="submit" name="submit" value="Print Subjects">
</form>

<?php
if(isset($_GET['submit'])){
    $subjects = array("PHP", "C++", "Java", "HTML", "CSS");

    for($i = 0; $i < 5; $i++){
        echo $subjects[$i] . "<br>";
    }
}
?>

</body>
</html>
