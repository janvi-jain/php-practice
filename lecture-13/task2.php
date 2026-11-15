
<!DOCTYPE html>
<html>
<body>

<h2>String Built-in Functions</h2>

<form method="get">
    <button name="program" value="11">11. Reverse String</button><br><br>
    <button name="program" value="12">12. Check Palindrome</button><br><br>
    <button name="program" value="13">13. Count String Length</button><br><br>
    <button name="program" value="14">14. Count Words</button><br><br>
    <button name="program" value="15">15. Uppercase String</button><br><br>
    <button name="program" value="16">16. Lowercase String</button><br><br>
    <button name="program" value="17">17. Replace Word</button><br><br>
    <button name="program" value="18">18. Find Position</button><br><br>
    <button name="program" value="19">19. Trim String</button><br><br>
    <button name="program" value="20">20. Split String</button>
</form>

<hr>

<?php
if(isset($_GET['program']))
{
    $p = $_GET['program'];

    $str = "Hello World";

    echo "<h3>Output:</h3>";

    switch($p)
    {
        case 11:
            echo strrev("Hello");
            break;

        case 12:
            $word = "madam";

            if($word == strrev($word))
            {
                echo $word . " is Palindrome";
            }
            else
            {
                echo $word . " is Not Palindrome";
            }
            break;

        case 13:
            echo "Length = " . strlen($str);
            break;

        case 14:
            echo "Total Words = " . str_word_count($str);
            break;

        case 15:
            echo strtoupper($str);
            break;

        case 16:
            echo strtolower($str);
            break;

        case 17:
            echo str_replace("World", "PHP", $str);
            break;

        case 18:
            echo "Position = " . strpos($str, "World");
            break;

        case 19:
            $text = "   Hello PHP   ";
            echo trim($text);
            break;

        case 20:
            $text = "PHP is easy";

            print_r(explode(" ", $text));
            break;
    }
}
?>

</body>
</html>
