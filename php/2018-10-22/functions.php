<?php
echo "<a href=\"./\">BACK</a>";
/* 10. --- FUNCTIONS ---
 *
 * A function name can start with a letter or underscore (not a number).
 *
 * function myFunction($argument = 'default'){
 *      code to be executed;
 * }
 *
 * NOTE :
 * Should be using action for function name like : displayResult(), showImage() ...
 * Should be naming by camelCase
 *
 */
echo "<h1>10. FUNCTIONS</h1>";
/*
 * EXERCISE 1 : Using function to show your name and the project which you wanna do, default is Name and News Website
 *
 */
/*
 * SUGGESTION :
 *
 * function displayInformation($name = 'Nam', $project = 'News Website')
 * {
 * echo "Your name is $name and your project is $project";
 * }
 * $myName = 'Nguyen Hai Nam';
 * $myProject = 'E-commerce Website';
 * displayInformation($myName, $myProject);
 * echo "<br>";
 * displayInformation();
 *
 */
echo "<br><br>DO EXERCISE INSIDE COMMENT CODE BELOW THIS LINE<hr>";
function Information($name, $project){
    echo "My name is $name and my project is $project";
}
Information("Bee", "Cosmetics Web");
echo "<br>";
$myName = "Lan";
$myProject = "News Web";
Information($myName,$myProject);
echo "<br>";

function setNumber($number = 10){
    echo "The number : $number <br>";
}
setNumber(234);
setNumber();
setNumber(22);
echo "<br>";

function sum($x, $y){
    $z = $x + $y;
    return $z;
}
echo " 1 + 1 =" .sum(1,1). "<br>";
echo " 2 + 2 =" .sum(2,2). "<br>";
echo "<br>";

//In ra mảng và sắp xếp theo tăng dần
$arr = array(30, 21, 1, 5, 8, 22, 18);
$arrlength = count($arr);
/*print_r($arr);
echo "<br>";
sort($arr);
print_r($arr);*/
for( $i=0; $i < $arrlength; $i++){
    echo $arr[$i] . ",";
}
echo "<br>";
for( $i=0; $i < $arrlength; $i++){
    //sort($arr);
    rsort($arr);
    echo $arr[$i] . ",";
}
