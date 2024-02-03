<?php
$path="/form/basename.php";
//show filename with file extension
echo basename($path) ."<br/>";
//show filename without file extension
echo basename($path,".php");
?>
<?php
print_r(pathinfo("/testweb/test.txt"));
?>