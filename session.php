<?php
session_start()
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="session.php" method="post">
        <label for="">Username:</label>
        <input type="text" name="username">
        <label for="">Password:</label>
        <input type="password" name="password">
        <input type="submit" name="login" value="login">
    </form>
</body>
</html>

<?php
$_SESSION["username"]="Yehudah";
$_SESSION["password"]=" Yehudah23";

if(isset($_POST["login"])){
    if(!empty($_POST["username"]) && !empty($_POST["password"])){
    $_SESSION["username"]=$_POST['username'];
    $_SESSION["password"]=$_POST['password'];  
    header("location: login.php");
     }
     else{
        echo "Missing username/password <br>";
     }}