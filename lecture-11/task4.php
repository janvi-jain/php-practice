<!DOCTYPE html>
<html>
<body>

<h2>Countries and Capitals</h2>

<form method="get">
    <input type="submit" name="submit" value="Print Countries">
</form>

<?php
if(isset($_GET['submit'])){
    $countries = array(
        "India" => "New Delhi",
        "USA" => "Washington",
        "Japan" => "Tokyo",
        "France" => "Paris",
        "Australia" => "Canberra"
    );

    foreach($countries as $country => $capital){
        echo $country . " = " . $capital . "<br>";
    }
}
?>

</body>
</html>
