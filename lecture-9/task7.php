
<!DOCTYPE html>
<html>
<body>

<h2>Hollow Square Star Pattern</h2>

<form method="get">
    <input type="submit" name="submit" value="Print Pattern">
</form>

<?php
if(isset($_GET['submit']))
{
    for($i = 1; $i <= 5; $i++)
    {
        for($j = 1; $j <= 5; $j++)
        {
            if($i == 1 || $i == 5 || $j == 1 || $j == 5){
                echo "* ";
            }
            else{
                echo "&nbsp;&nbsp;&nbsp;";
            }
        }

        echo "<br>";
    }
}
?>

</body>
</html>
