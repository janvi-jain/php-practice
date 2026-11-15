<!DOCTYPE html>
<html>
<body>

<h2>City Temperature</h2>

<form method="get">
    <input type="submit" name="submit" value="Show Temperature">
</form>

<?php
if(isset($_GET['submit'])){
    $cities = array(
        array("city" => "Surat", "day_temp" => 35, "night_temp" => 25),
        array("city" => "Mumbai", "day_temp" => 32, "night_temp" => 24),
        array("city" => "Delhi", "day_temp" => 38, "night_temp" => 28)
    );

    foreach($cities as $city){
        echo "City: " . $city['city'] . "<br>";
        echo "Day Temperature: " . $city['day_temp'] . "<br>";
        echo "Night Temperature: " . $city['night_temp'] . "<br><br>";
    }
}
?>

</body>
</html>
