<!DOCTYPE html>
<html>
<body>

<h2>Student Details</h2>

<form method="get">
    <input type="submit" name="submit" value="Print Details">
</form>

<?php
if(isset($_GET['submit']))
{
    $student = array(
        "name" => "Janvi",
        "age" => 19,
        "city" => "Surat"
    );

    foreach($student as $key => $value)
    {
        echo $key . " = " . $value . "<br>";
    }
}
?>

</body>
</html>
