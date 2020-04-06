<?php

$Array = array(5, 7, 2, 33, 6, 11, 8, 77, 56);


function findMIN($arr)
{
    $index = 0;
    $min = $arr[0];
    for ($i = 0; $i < count($arr); $i++) {
        if ($min > $arr[$i]) {
            $min = $arr[$i];
            $index = $i;
        }
    }
    return "Giá trị nhỏ nhất là: ". $min . " ở vị trí " . "[" . $index . "]";
}

echo "<h1>" . findMIN($Array) . "</h1>";
