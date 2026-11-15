
<!DOCTYPE html>
<html>
<body>

<h2>Factorial of a Number</h2>

<form method="post">
    Enter Number:
    <input type="number" name="num" min="0" required>

    <input type="submit" name="submit" value="Find Factorial">
</form>

<?php

function factorial($n){
    if($n == 0 || $n == 1){
        return 1;
    }else{
        return $n * factorial($n - 1);
    }
}

if(isset($_POST['submit'])){
    $num = $_POST['num'];
    echo "Factorial = " . factorial($num);
}
?>

</body>
</html>
