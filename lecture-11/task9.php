<!DOCTYPE html>
<html>
<body>

<h2>Check Specific Key Exists</h2>

<form method="post">
    <input type="submit" name="submit" value="Check Key">
</form>

<?php
if(isset($_POST['submit'])){
    $users = array(
        "Janvi" => "Admin",
        "Priya" => "User",
        "Rahul" => "Manager",
        "Neha" => "User"
    );

    $key = "Janvi";

    if(array_key_exists($key, $users)){
        echo $key . " Key Exists";
    }else{
        echo $key . " Key Does Not Exist";
    }
}
?>

</body>
</html>


