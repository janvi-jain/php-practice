<!DOCTYPE html>
<html>
<body>

<h2>Product Names</h2>

<form method="post">
    <input type="submit" name="submit" value="Print Products">
</form>

<?php
if(isset($_POST['submit'])){
    $products = array(
        "Laptop" => 50000,
        "Mobile" => 20000,
        "Keyboard" => 1000,
        "Mouse" => 500
    );

    foreach($products as $name => $price){
        echo $name . "<br>";
    }
}
?>

</body>
</html>
