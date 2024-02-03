<?php
$srcfile ='file.txt';
$destfile ='file1.txt';
if(!copy($srcfile,$destfile)) {
    echo"File cannot be copied!";
}
else{
    echo "File has been copied!";
}
?>
