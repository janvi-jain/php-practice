
<!DOCTYPE html>
<html>
<body>

<h2>Reverse Star Triangle Pattern</h2>

<form method="post">
    <input type="submit" name="submit" value="Print Pattern">
</form>

<?php
if(isset($_POST['submit']))
{
    for($i = 4; $i >= 1; $i--)
    {
        for($j = 1; $j <= $i; $j++)
        {
            echo "* ";
        }

        echo "<br>";
    }
}
?>

</body>
</html>
