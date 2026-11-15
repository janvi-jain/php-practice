<!DOCTYPE html>
<html>
<body>

<h2>Count Mobile Brands</h2>

<form method="post">
    <input type="submit" name="submit" value="Count Brands">
</form>

<?php
if(isset($_POST['submit'])){
    $mobiles = array(
        "Samsung" => 25000,
        "Apple" => 60000,
        "Vivo" => 18000,
        "Oppo" => 20000,
        "Realme" => 15000
    );

    echo "Total Mobile Brands = " . count($mobiles);
}
?>

</body>
</html>
