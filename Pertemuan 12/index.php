<!-- 1 -->
<?php //echo "Hello World" ?>



<!-- 2 -->
<!-- <!DOCTYPE html>
<html>

<body>

    <?php // echo "Hello World" ?>

</body>

</html> -->




<!-- 3 -->
<!-- <!DOCTYPE html>
<html>

<body>

    <?php
    // This is a single-line comment

    # This is also a single-line comment

    /*
    This is a multiple-lines comment block
    that spans over multiple
    lines
    */

    // You can also use comment to leave out parts of a code line
    // $x = 5 /* + 15 */ + 5;
    // echo $x;
    // ?>

</body>

</html> -->





<!-- 4 -->
<!DOCTYPE html>
<html>

<body>

    <?php
    // $color = "red";
    // echo "My car is " . $color . "<br>";
    // echo "My house is " . $COLOR . "<br>";
    // echo "My boat is " . $coLOR . "<br>";
    ?>

</body>

</html>



<!-- 5 -->
<?php
// $txt = "Hello world!";
// $x = 5;
// $y = 10.5;
?>



<!-- 6 -->
<?php
// $txt = "PPW1";
// echo "I love $txt!";
?>



<!-- 7 -->
<?php
// $txt = "PPW1";
// echo "I love" . $txt . "!";
?>



<!-- 8 -->
<?php
//$x = 5;
//$y = 4;
//echo $x + $y;
?>


<!-- 9 -->
<?php
//echo strlen("Hello world!"); // outputs 12 
?>


<!-- 10 -->
<?php
//echo str_word_count("Hello world!"); // outputs 2 
?>


<!-- 11 -->
<?php
//echo strrev("Hello world!"); // outputs !dlrow olleH 
?>

<!-- 12 -->
<?php
//echo strpos("Hello world!", "Hello"); // outputs 6 
?>

<!-- 13 -->
<?php
//echo str_replace("world", "Dolly", "Hello world!"); // outputs Hello Dolly!
?>




<!-- 14 -->
<?php
// function writeMsg() {
//     echo "Hello world!";
// }

// writeMsg(); // call the function
?>



<!-- 15 -->
<?php
// function familyName($fname) {
//     echo "$fname Jaeger.<br>";
// }
// familyName("Jani");
// familyName("Hege");
// familyName("Stale");
// familyName("Kai Jim");
// familyName("Borge");
?>


<!-- 16 -->
<?php
// function FamilyNames($name, $Year) {
//     echo "$name Jaeger. Born in $Year <br>";
// }
// FamilyNames("Hege", "1975");
// FamilyNames("Stale", "1978");
// FamilyNames("Kai Jim", "1983");
?>


<!-- 17 -->
<?php
// function setHeight($minheight = 50) {
//     echo "The height is : $minheight <br>";
// }
// setHeight(350);
// setHeight(); // will use the default value of 50
// setHeight(135);
// setHeight(80);
?>



<!-- 18 -->
<?php
function sum($x, $y) {
    $z = $x + $y;
    return $z;
}
echo "5 + 10 =" . sum(5, 10) . "<br>";
echo "7 + 13 =" . sum(7, 13) . "<br>";
echo "2 + 4 =" . sum(2, 4) . "<br>";
?>