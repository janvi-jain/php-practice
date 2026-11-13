
<!DOCTYPE html>
<html>
<body>

<h2>Alphabet Triangle Pattern</h2>

<form method="post">
    <input type="submit" name="submit" value="Print Pattern">
</form>

<?php
if(isset($_POST['submit']))
{
    for($i = 1; $i <= 4; $i++)
    {
        for($j = 1; $j <= $i; $j++)
        {
            echo chr(64 + $j) . " ";
        }

        echo "<br>";
    }
}
?>

</body>
</html>
