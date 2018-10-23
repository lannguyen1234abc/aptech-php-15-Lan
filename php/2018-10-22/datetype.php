<?php
echo "<a href=\"./\">BACK</a>";
/* 6. --- DATA TYPES ---
 *
 * Variables can store data of different types.
 *
 * No need to declare type of variable.
 *
 * Data Types common in PHP :
 * String
 * Integer
 * Float
 * Boolean
 * Array
 * Object
 *
 *
 */
echo "<h1>6. DATA TYPES</h1>";
/*
 * EXERCISE 1 : List all data types in variables and display it.
 */
/*
 * SUGGESTION :
 * $arr = [1,'2','Nam'];
 * print_r($arr);
 */
echo "<br><br>DO EXERCISE INSIDE COMMENT CODE BELOW THIS LINE<hr>";
$string = 'Hello Lan';
$int = 21;
$var = null;
$float = 9.5;
$boo = true;
$arr = array("abc","b", 100);
var_dump($int);
var_dump($string);
echo "<br>";
var_dump($int);
echo "<br>";
var_dump($var);
echo "<br>";
var_dump($float);
echo "<br>";
var_dump($boo);
echo "<br>";
var_dump($arr[2]);
echo "<br>";
class Color{
    function Color(){
        $this->type = 'red';
    }
}
$color = new Color();
echo $color->type;


