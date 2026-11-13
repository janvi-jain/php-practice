<!DOCTYPE html>
<html>
<body>

<h2>First 10 Natural Numbers using While Loop</h2>

<form method="post">
    <input type="submit" name="submit" value="Print Numbers">
</form>

<?php
if(isset($_POST['submit'])){
    $i = 1;
    while($i <= 10){
        echo $i . " ";
        $i++;
    }
}
?>

</body>
</html>
