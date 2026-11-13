
<!DOCTYPE html>
<html>
<body>

<h2>First 10 Numbers using Do-While Loop</h2>

<form method="post">
    <input type="submit" name="submit" value="Print Numbers">
</form>

<?php
if(isset($_POST['submit'])){
    $i = 1;
    do{
        echo $i . " ";
        $i++;
    }while($i <= 10);
}
?>

</body>
</html>
