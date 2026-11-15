<!DOCTYPE html>
<html>
<body>

<h2>Mathematics Marks</h2>

<form method="get">
    <input type="submit" name="submit" value="Print Marks">
</form>

<?php
if(isset($_GET['submit']))
{
    $marks = array(
        "English" => 75,
        "Mathematics" => 90,
        "Science" => 85,
        "Computer" => 95
    );

    echo "Mathematics Marks = " . $marks['Mathematics'];
}
?>

</body>
</html>
