<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form</title>
</head>
<body>
    <form method="get" action="">
        Username:<input type="text" name="username"><br>
        password:<input type="password" name="pass"><br>
        <input type="submit" name="submir" value="submit">
</form>
<?php 
if(isset($_GET['submit'])){
echo $_GET['username'];
echo $_GET['pass'];
}
?>
</body>
</html>