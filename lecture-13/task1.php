<!DOCTYPE html>
<html>
<body>

<h2>Array Built-in Functions</h2>

<form method="get">
    <button name="program" value="1">1. Sum of Array</button><br><br>
    <button name="program" value="2">2. Minimum and Maximum</button><br><br>
    <button name="program" value="3">3. Reverse Array</button><br><br>
    <button name="program" value="4">4. Sort Ascending</button><br><br>
    <button name="program" value="5">5. Sort Descending</button><br><br>
    <button name="program" value="6">6. Remove Duplicates</button><br><br>
    <button name="program" value="7">7. Merge Two Arrays</button><br><br>
    <button name="program" value="8">8. Search Element</button><br><br>
    <button name="program" value="9">9. Count Frequency</button><br><br>
    <button name="program" value="10">10. Array Keys and Values</button>
</form>

<hr>
<?php
if(isset($_GET['program'])){
    $p = $_GET['program'];
    $arr = array(10, 20, 30, 40, 50, 20, 30);
    echo "<h3>Output:</h3>";
    switch($p){
        case 1:
            echo "Sum = " . array_sum($arr);
            break;

        case 2:
            echo "Minimum = " . min($arr) . "<br>";
            echo "Maximum = " . max($arr);
            break;

        case 3:
            print_r(array_reverse($arr));
            break;

        case 4:
            $a = $arr;
            sort($a);
            print_r($a);
            break;

        case 5:
            $a = $arr;
            rsort($a);
            print_r($a);
            break;

        case 6:
            print_r(array_unique($arr));
            break;

        case 7:
            $a = array(1, 2, 3);
            $b = array(4, 5, 6);

            print_r(array_merge($a, $b));
            break;

        case 8:
            $search = 30;
            $result = array_search($search, $arr);

            if($result !== false){
                echo $search . " Found at Index " . $result;
            }
            else{
                echo "Element Not Found";
            }
            break;

        case 9:
            $a = array(10, 20, 10, 30, 20, 10);

            print_r(array_count_values($a));
            break;

        case 10:
            $a = array(
                "name" => "Janvi",
                "age" => 19,
                "city" => "Surat"
            );

            echo "Keys:<br>";
            print_r(array_keys($a));

            echo "<br><br>Values:<br>";
            print_r(array_values($a));
            break;
    }
}
?>

</body>
</html>
