<?php
echo "<a href=\"./\">BACK</a>";
/* 8. --- CONDITIONS ---
 *
 * Conditional statements are used to perform different actions based on different conditions.
 *
 * Some common conditions in PHP :
 * if ... else ...
 * switch
 *
 */
echo "<h1>8. CONDITIONS</h1>";
/*
 * EXERCISE 1 : Checking $a = 9 is smaller or larger $b = 15 and display your result, using if else.
 *
 */
/*
 * SUGGESTION :
 * $a = 9;
 * $b = 15;
 * if ($a > $b) {
 * echo "$a larger than $b";
 * } else {
 * echo "$a smaller than $b";
 * }
 *
 */
/*
 * EXERCISE 2 : Display the meaning of acronym of some programming language  , using switch
 */
/*
 * SUGGESTION :
 * $language = 'PHP';
 * switch ($languge) {
 * case 'PHP':
 * echo "PHP: Hypertext Preprocessor";
 * break;
 * case 'JS':
 * echo "JavaScript";
 * break;
 * default:
 * echo "can not find meaning your language";
 * }
 */
$a = 5;
$b = 8;
if( $a < $b){
    echo "a nhỏ hơn b";
}elseif( $a > $b ){
    echo "a lớn hơn b";
}else{
    echo "a bằng b";
}
echo "<br>";
$language = "JS";
switch($language){
    case "PHP":
        echo "PHP: HyperText Preprocessor";
        break;
    case "JS":
        echo "JS: Java Script";
        break;
    default:
        echo "Not find";
}

