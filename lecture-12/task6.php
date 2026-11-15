
<!DOCTYPE html>
<html>
<body>

<h2>Matrix Addition</h2>

<form method="post">
    <input type="submit" name="submit" value="Add Matrix">
</form>

<?php
if(isset($_POST['submit'])){
    $a = array(
        array(1, 2),
        array(3, 4)
    );

    $b = array(
        array(5, 6),
        array(7, 8)
    );

    echo "Addition Result:<br>";

    for($i = 0; $i < 2; $i++){
        for($j = 0; $j < 2; $j++){
            echo ($a[$i][$j] + $b[$i][$j]) . " ";
        }

        echo "<br>";
    }
}
?>

</body>
</html>
