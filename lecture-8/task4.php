<!DOCTYPE html>
<html>
<body>

<h2>Print Odd Numbers</h2>

<form method="get">
    <input type="submit" name="submit" value="Print">
</form>

<?php
if(isset($_GET['submit']))
{
    for($i = 1; $i <= 20; $i++)
    {
        if($i % 2 != 0)
        {
            echo $i . " ";
        }
    }
}
?>

</body>
</html>
