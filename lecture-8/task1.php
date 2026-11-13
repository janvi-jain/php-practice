
<!DOCTYPE html>
<html>
<head>
    <title>Print Numbers</title>
</head>
<body>

<h2>Print Numbers from 1 to 10</h2>

<form method="get">
    <input type="submit" name="submit" value="Print Numbers">
</form>

<?php

if(isset($_GET['submit']))
{
    for($i = 1; $i <= 10; $i++)
    {
        echo $i . " ";
    }
}

?>

</body>
</html>
