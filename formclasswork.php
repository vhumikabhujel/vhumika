<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>airthmetic operation</title>
</head>
<body>
    <form method="get" action="">
        Num1:<input type="number" name="num1"><br>
        Num2:<input type="number" name="num2"><br>
        <input type="submit" name="submit" vlaue="submit">
        <input type="radio" name="calcu" value="add">add<br>
        <input type="radio" name="calcu" value="subtract">subtract<br>
        <input type="radio" name="calcu" value="multiple">multiple<br>
        <input type="radio" name="calcu"value="divide">divide<br>
        <input type="radio" name="calcu"value="divide">modulus<br>
        

</form>
    
</body>
<?php
if(isset($_GET['submit'])){

    echo $_GET['num1']+$_GET['num2'] ."<br>";
    echo $_GET['num1']-$_GET['num2'] ."<br>";
    echo $_GET['num1']*$_GET['num2'] ."<br>";
    echo $_GET['num1']/$_GET['num2'] ."<br>";
    echo $_GET['num1']%$_GET['num2'] ."<br>";
}
?>
</html>