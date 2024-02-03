<?php
$arr=array(7,2,4,5,6);
sort($arr);
echo "In ascending <BR>";
foreach($arr as $v){
    echo $v;
}
echo "<BR>";
//In decending
rsort($arr);
echo "In decending <BR>";
foreach ($arr as $v){
    echo $v;
}
?>