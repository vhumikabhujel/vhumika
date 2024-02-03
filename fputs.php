<?php
$list=array
(
    "peter,griffin,oslo,norway",
    "glenn,quagimure,oslo,norway",
);
$file=fopen("enclosure.csv","w");
foreach($list as $line)
{
    fputcsv($file,explode(',',$line));
}
fclose($file);


?>