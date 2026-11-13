
<!DOCTYPE html>
<html>
<body>

<h2>Floyd's Triangle</h2>

<form method="get">
    <input type="submit" name="submit" value="Print Pattern">
</form>

<?php
if(isset($_GET['submit'])){
    $num = 1;
    for($i = 1; $i <= 4; $i++){
        for($j = 1; $j <= $i; $j++){
            echo $num . " ";
            $num++;
        }

        echo "<br>";
    }
}
?>

</body>
</html>
