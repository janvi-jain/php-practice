
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task-7</title>
</head>
<body>
    <form method="get">
        <table border="1">
            <tr>
                <td>Enter Purchase Price : </td>
                <td><input type="text" name="purchase"></td>
            </tr>
            <tr>
                <td>Enter Selling Price : </td>
                <td><input type="text" name="selling"></td>
            </tr>
            <tr>
                <td><input type="submit" name="submit"></td>
            </tr>
        </table>
    </form>
</body>
</html>

<?php
    if(isset($_GET['submit'])) {

        $purchase = !empty($_GET['purchase']) ? $_GET['purchase'] : 0;
        $selling = !empty($_GET['selling']) ? $_GET['selling'] : 0;

        if($selling > $purchase) {

            $profit = $selling - $purchase;
            echo "Profit : $profit";

        }
        else if($purchase > $selling) {

            $loss = $purchase - $selling;
            echo "Loss : $loss";

        }
        else {
            echo "No Profit No Loss";
        }
    }
?>
