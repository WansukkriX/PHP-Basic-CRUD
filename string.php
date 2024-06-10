<?php

$str = "hello php";
echo strlen($str);
echo "<br>";

echo strpos($str, "php");

echo substr($str, 6, 2);
echo "<br>";
$arr = explode(" ", $str);
var_dump($arr);


$arr = ["hello", "world"];
$st = implode('', $arr);
echo $st;