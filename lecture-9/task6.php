
<!DOCTYPE html>
<html>
<body>

<h2>Multiplication Table from 1 to 5</h2>

<form method="get">
    <input type="submit" name="submit" value="Print Table">
</form>

<?php
if(isset($_GET['submit']))
{
    for($i = 1; $i <= 5; $i++)
    {
        for($j = 1; $j <= 5; $j++)
        {
            echo ($i * $j) . "&nbsp;&nbsp;&nbsp;";
        }

        echo "<br><br>";
    }
}
?>

</body>
</html>
