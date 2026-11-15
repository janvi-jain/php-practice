<!DOCTYPE html>
<html>
<body>

<h2>Product List</h2>

<form method="get">
    <input type="submit" name="submit" value="Show Products">
</form>

<?php
if(isset($_GET['submit'])){
    $products = array(
        array("name" => "Laptop", "price" => 50000, "quantity" => 5),
        array("name" => "Mobile", "price" => 20000, "quantity" => 10),
        array("name" => "Mouse", "price" => 500, "quantity" => 20)
    );

    foreach($products as $product){
        echo "Name: " . $product['name'] . "<br>";
        echo "Price: " . $product['price'] . "<br>";
        echo "Quantity: " . $product['quantity'] . "<br><br>";
    }
}
?>

</body>
</html>
