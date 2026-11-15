<!DOCTYPE html>
<html>
<body>

<h2>3 x 3 Matrix</h2>

<form method="post">
    <input type="submit" name="submit" value="Print Matrix">
</form>

<?php
if(isset($_POST['submit'])){
    $matrix = array(
        array(1, 2, 3),
        array(4, 5, 6),
        array(7, 8, 9)
    );

    for($i = 0; $i < 3; $i++){
        for($j = 0; $j < 3; $j++){
            echo $matrix[$i][$j] . "&nbsp;&nbsp;&nbsp;";
        }
        echo "<br>";
    }
}
?>

</body>
</html>
