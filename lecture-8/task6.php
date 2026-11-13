
<!DOCTYPE html>
<html>
<body>

<h2>Sum of Numbers from 1 to 10</h2>

<form method="post">
    <input type="submit" name="submit" value="Calculate Sum">
</form>

<?php
if(isset($_POST['submit'])){
    $sum = 0;
    for($i = 1; $i <= 10; $i++) {
        $sum = $sum + $i;
    }

    echo "Sum = " . $sum;
}
?>

</body>
</html>
