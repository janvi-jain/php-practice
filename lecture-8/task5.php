
<!DOCTYPE html>
<html>
<body>

<h2>Multiplication Table of 5</h2>

<form method="get">
    <input type="submit" name="submit" value="Print Table">
</form>

<?php
if(isset($_GET['submit']))
{
    for($i = 1; $i <= 10; $i++)
    {
        echo "5 * " . $i . " = " . (5 * $i) . "<br>";
    }
}
?>

</body>
</html>
