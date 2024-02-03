
<?php
$numbers = array(1, 2, 3, 4, 5);
echo $numbers[2], "<br>";

$marks = array(70, 80, 90); // or $marks = [70, 80, 90];
echo $marks[2] . "<br>";

for ($i = 0; $i < sizeof($marks); $i++) {
    echo $marks[$i] . " ";
}
?>