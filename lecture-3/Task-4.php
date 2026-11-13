<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task-4</title>
</head>
<body>
    <form method="post">
        <table border = "1">
            <tr>
                <td>Enter Total Bill Amount: &nbsp&nbsp</td>
                <td><input type="text" name="bill"></td>
            </tr>
            <tr>
                <td>Enter Tax Amount: &nbsp&nbsp</td>
                <td><input type="text" name="tax"></td>
            </tr>
            <tr>
                <td>Enter Total Number of Persons: &nbsp&nbsp</td>
                <td><input type="text" name="persons"></td>
            </tr>
            <tr>
                <td><input type="submit" name="submit" value="Calculate Tip"></td>
            </tr>
        </table>
    </form>
</body>
</html>

<?php
    if(isset($_POST['submit'])){
        $bill = !empty($_POST['bill']) ? $_POST['bill'] : 0;
        $tax = !empty($_POST['tax']) ? $_POST['tax'] : 0;
        $persons = !empty($_POST['persons']) ? $_POST['persons'] : 0;
        $total = $bill + $tax;
        $tip = ($total * 5) / 100;
        $perPerson = ($total + $tip) / $persons;
        $tipPerPerson = $tip / $persons;
    }
    echo "<br><br>";
    echo "Total Bill Amount : $bill";
    echo "<br>";
    echo "Tax Amount : $tax";
    echo "<br>";
    echo "Total Number of Persons : $persons";
    echo "<br>";
    echo "Total tip...: $tip";
    echo "<br>";
    echo "Per person: $perPerson";
    echo "<br>";
    echo "Tip per person: $tipPerPerson";
?>