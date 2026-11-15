
<!DOCTYPE html>
<html>
<body>

<h2>Fibonacci Series</h2>

<form method="post">
    Enter Number:
    <input type="number" name="num" min="1" max="30" required>

    <input type="submit" name="submit" value="Print Series">
</form>

<?php

function fibonacci($n, $a = 0, $b = 1){
    if($n <= 0){
        return;
    }

    echo $a . " ";

    fibonacci($n - 1, $b, $a + $b);
}

if(isset($_POST['submit'])){
    $num = $_POST['num'];
    fibonacci($num);
}
?>

</body>
</html>
