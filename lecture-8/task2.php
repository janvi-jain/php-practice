
<!DOCTYPE html>
<html>
<body>

<h2>Print Numbers in Reverse Order</h2>

<form method="get">
    <input type="submit" name="submit" value="Print">
</form>

<?php
if(isset($_GET['submit']))
{
    for($i = 10; $i >= 1; $i--)
    {
        echo $i . " ";
    }
}
?>

</body>
</html>
