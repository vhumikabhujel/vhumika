<?php
$arr=array(
    array(1,2,3),
    array(4,5,6),
    array(7,8,9)
);
$s=0;
$s1=0;
for($i=0;$i<3;$i++){
    for($j=0;$j<3;$j++){
        echo $arr[$i][$j]." ";
        $s=$s+$arr[$i][$j]; 
    }
    echo "<BR>";
}
echo "Sum of array = ".$s
?>