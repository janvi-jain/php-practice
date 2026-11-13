<!DOCTYPE html>
<html>
<body>

<h2>4 x 4 Star Square Pattern</h2>
<form method="post">
    <input type="submit" name="submit" value="Print Pattern">
</form>

<?php
if(isset($_POST['submit'])){
    for($i = 1; $i <= 4; $i++){
        for($j = 1; $j <= 4; $j++){
            echo "* ";
        }
        echo "<br>";
    }
}
?>

</body>
</html>
