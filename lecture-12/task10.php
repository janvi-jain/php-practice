<!DOCTYPE html>
<html>
<body>

<h2>Restaurant Menu</h2>

<form method="post">
    <input type="submit" name="submit" value="Show Menu">
</form>

<?php
if(isset($_POST['submit'])){
    $menu = array(
        array("item_name" => "Pizza", "price" => 250),
        array("item_name" => "Burger", "price" => 120),
        array("item_name" => "Pasta", "price" => 180),
        array("item_name" => "Sandwich", "price" => 100)
    );

    foreach($menu as $item){
        echo "Item: " . $item['item_name'] . "<br>";
        echo "Price: " . $item['price'] . "<br><br>";
    }
}
?>

</body>
</html>
