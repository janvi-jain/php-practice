
<!DOCTYPE html>
<html>
<body>

<h2>Pyramid Star Pattern</h2>

<form method="get">
    <input type="submit" name="submit" value="Print Pattern">
</form>

<?php
if(isset($_GET['submit']))
{
    for($i = 1; $i <= 4; $i++)
    {
        for($j = 1; $j <= 4 - $i; $j++){
            echo "&nbsp;&nbsp;";
        }

        for($k = 1; $k <= (2 * $i - 1); $k++)
        {
            echo "* ";
        }

        echo "<br>";
    }
}
?>

</body>
</html>
