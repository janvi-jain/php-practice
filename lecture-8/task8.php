<!DOCTYPE html>
<html>
<body>

<h2>Numbers Divisible by 3</h2>

<form method="post">
    <input type="submit" name="submit" value="Print Numbers">
</form>

<?php
if(isset($_POST['submit'])){
    for($i = 1; $i <= 30; $i++){
        if($i % 3 == 0){
            echo $i . " ";
        }
    }
}
?>

</body>
</html>
