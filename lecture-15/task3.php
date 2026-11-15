<!DOCTYPE html>
<html>
<body>

<h2>Sum of Natural Numbers</h2>

<form method="post">
    Enter Number:
    <input type="number" name="num" min="0" required>
    <input type="submit" name="submit" value="Find Sum">
</form>

<?php

function sum($n){
    if($n == 0){
        return 0;
    }else{
        return $n + sum($n - 1);
    }
}

if(isset($_POST['submit'])){
    $num = $_POST['num'];
    echo "Sum = " . sum($num);
}

?>

</body>
</html>
