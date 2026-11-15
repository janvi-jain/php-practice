
<!DOCTYPE html>
<html>
<body>

<h2>Print Array in Reverse Order</h2>

<form method="post">
    <input type="submit" name="submit" value="Print Reverse">
</form>

<?php
if(isset($_POST['submit'])){
    $numbers = array(10, 20, 30, 40, 50);

    for($i = count($numbers) - 1; $i >= 0; $i--){
        echo $numbers[$i] . " ";
    }
}
?>

</body>
</html>
