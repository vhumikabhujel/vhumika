<?php
$arr=array(
    array(1,2,3,4),
array("Red","Orange","Blue","Green"));
echo $arr[1][3];
echo "<table border=1>";
foreach($arr as $v){
    echo "<tr>";
    foreach($v as $a){
        echo "<td> $a </td>";
    }
    echo "</tr>";
}
echo "</table>";
?>
