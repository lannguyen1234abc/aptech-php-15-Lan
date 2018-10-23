<?php
echo "<a href=\"./\">BACK</a>";
/* 9. --- LOOPS ---
 *
 *
 * Some common loops in PHP :
 * while
 * do ... while
 * for
 * foreach
 *
 */
echo "<h1>9. LOOPS</h1>";
/*
 * EXERCISE 1 : Assigning $a = 0, while $a < 5 then display $a to html.     Carefull with loops infinity, using while
 *
 */
/*
 * SUGGESTION :
 *
 * $a = 0;
 * while ($a < 5) {
 * echo "$a";
 * $a++;
 * }
 *
 */
/*
 * EXERCISE 2 : Using do while to echo $a while $a < 5;
 */
/*
 * SUGGESTION :
 * $a = 0;
 * do {
 * echo $a;
 * $a++;
 * } while ($a < 5);
 *
 */
/*
 * EXERCISE 3 : $a = 5, Using for loops to echo from 0 to $a;
 */
/*
 * SUGGESTION :
 * $a = 5;
 * for ($i = 0; $i <= $a; $i++) {
 * echo $i;
 * }
 *
 */
/*
 * EXERCISE 4 : Using foreach to echo key and value of array;
 */
/*
 * SUGGESTION :
 * $arr = ["name" => "Name", "class" => "PHP", "age" => 18];
 * foreach ($arr as $key => $value) {
 * echo $key . ' - ' . $value . '<br>';
 * }
 *
 */
echo "<br><br>DO EXERCISE INSIDE COMMENT CODE BELOW THIS LINE<hr>";
$a = 0;
//kiểm tra điều kiện rồi mới thực hiện câu lệnh
while ($a < 5){
    echo $a ."<br>";
    $a++;
}
echo "<br>";
$b = 0;
//thực hiện câu lệnh, sau đó kiểm tra điều kiện nếu TM chạy còn k dừng.
do{
    echo $b ."<br>";
    $b++;
}while ($b < 6);
echo "<br>";
$c = 5;
for ( $i = 0; $i < $c; $i++){
    echo $i;
}
echo "<br>";
$arr = ["name" => "Lan", "age" => 21, "address" => "QB"];
foreach($arr as $key => $value){
    echo $key. " - " .$value . "<br>";
}