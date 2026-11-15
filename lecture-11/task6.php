<!DOCTYPE html>
<html>
<body>

<h2>Update Fruit Quantity</h2>

<form method="post">
    <input type="submit" name="submit" value="Update Quantity">
</form>

<?php
if(isset($_POST['submit'])){
    $fruits = array(
        "Apple" => 10,
        "Mango" => 15,
        "Banana" => 20,
        "Orange" => 12
    );

    echo "<h3>Before Update:</h3>";

    foreach($fruits as $name => $quantity){
        echo $name . " = " . $quantity . "<br>";
    }
 
    $fruits['Mango'] = 25; 
    $fruits['Banana'] = 50;

    echo "<h3>After Update:</h3>";
    foreach($fruits as $name => $quantity){
        echo $name . " = " . $quantity . "<br>";
    }
}
?>

</body>
</html>
