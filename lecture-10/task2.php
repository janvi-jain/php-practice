
<!DOCTYPE html>
<html>
<body>

<h2>First and Last Elements of Array</h2>

<form method="get">
    <input type="submit" name="submit" value="Print Elements">
</form>

<?php
if(isset($_GET['submit'])){
    $numbers = array(10, 20, 30, 40, 50);

    echo "First Element = " . $numbers[0] . "<br>";
    echo "Last Element = " . $numbers[4];
}
?>

</body>
</html>
