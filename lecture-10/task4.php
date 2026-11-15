
<!DOCTYPE html>
<html>
<body>

<h2>Print Even Marks</h2>

<form method="post">
    <input type="submit" name="submit" value="Print Even Marks">
</form>

<?php
if(isset($_POST['submit'])){
    $marks = array(45, 60, 75, 80, 90, 55);

    for($i = 0; $i < count($marks); $i++){
        if($marks[$i] % 2 == 0){
            echo $marks[$i] . "<br>";
        }
    }
}
?>

</body>
</html>
