
<!DOCTYPE html>
<html>
<body>

<h2>Reverse a String</h2>

<form method="post">
    Enter String:
    <input type="text" name="str" required>

    <input type="submit" name="submit" value="Reverse String">
</form>

<?php

function reverseString($str){
    if(strlen($str) <= 1){
        return $str;
    }else{
        return reverseString(substr($str, 1)) . $str[0];
    }
}

if(isset($_POST['submit'])){
    $str = $_POST['str'];
    echo "Reversed String = " . reverseString($str);
}
?>

</body>
</html>
