
<!DOCTYPE html>
<html>
<body>

<h2>Matrix of Row and Column Numbers</h2>

<form method="get">
    <input type="submit" name="submit" value="Print Matrix">
</form>

<?php
if(isset($_GET['submit']))
{
    for($i = 1; $i <= 3; $i++)
    {
        for($j = 1; $j <= 3; $j++)
        {
            echo $i . "&nbsp;&nbsp;&nbsp;";
        }

        echo "<br><br>";
    }
}
?>

</body>
</html>
