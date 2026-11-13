<!DOCTYPE html>
<html>
<body>

<h2>Square of Numbers from 1 to 10</h2>

<form method="post">
    <input type="submit" name="submit" value="Print Square">
</form>

<?php
if(isset($_POST['submit'])){
    for($i = 1; $i <= 10; $i++){
        echo $i . " Square = " . ($i * $i) . "<br>";
    }
}
?>

</body>
</html>
