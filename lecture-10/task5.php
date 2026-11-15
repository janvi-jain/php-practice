

<!DOCTYPE html>
<html>
<body>

<h2>Count City Names</h2>

<form method="post">
    <input type="submit" name="submit" value="Count Cities">
</form>

<?php
if(isset($_POST['submit'])){
    $cities = array("Surat", "Mumbai", "Delhi", "Ahmedabad", "Pune");
    echo "Total Cities = " . count($cities);
}
?>

</body>
</html>
