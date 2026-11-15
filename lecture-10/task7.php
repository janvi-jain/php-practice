
<!DOCTYPE html>
<html>
<body>

<h2>Find Highest Number in Array</h2>

<form method="post">
    <input type="submit" name="submit" value="Find Highest">
    <br>
</form>

<?php
if(isset($_POST['submit'])){
    $numbers = array(25, 80, 45, 95, 60);

    $highest = $numbers[0];
    for($i = 1; $i < count($numbers); $i++){
        if($numbers[$i] > $highest){
            $highest = $numbers[$i];
        }
    }

    echo "Highest Number = " . $highest;
}
?>

</body>
</html>
