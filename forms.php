<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="forms.php" method="get">
        <label for="">Username:</label>
        <input type="text" name="username" placeholder="username">
        <label for="">password:</label>
        <input type="password" name="password" placeholder="password">

        <input type="submit" placeholder="submit">
    </form>
</body>
</html> -->


<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="forms.php" method="post">
        <label for="">Username:</label>
        <input type="text" name="username" placeholder="username">
        <label for="">password:</label>
        <input type="password" name="password" placeholder="password">

        <input type="submit" placeholder="submit">
    </form>
    
</body>
</html> -->
 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
    <label for="">Username:</label>
        <input type="text" name="username" placeholder="username">
        <label for="">password:</label>
        <input type="password" name="password" placeholder="password">

        <input type="submit" name="submit" value="submit" >
</form>
</body>
</html>
<?php
// echo $_GET['username']. "<br>" ;
// echo $_GET['password'];


// echo $_POST['username']. "<br>" ;
// echo $_POST['password'];

// $username=false;
// if(isset($username)){
//     echo "the username is set";
// }else{
//     echo "the username isn't set";
// }


// foreach($_POST as $key=>$value){
//     echo "($key) = ($value)";
// //  echo $_POST['$username'];
// //  echo $_POST['$password'];
// }


if(isset($_POST["submit"])){
    $username=$_POST['username'];
    $password=$_POST['password'];

    if(empty($username)){
        echo "username is missing .<br>";
    }elseif(empty($password)){
        echo "password is missing";
    }
    else{
        echo "username is not missing and password can be found";
    }

}

// if(isset($_POST["submit"])){
//     $username=$_POST['username'];
//     $password=$_POST['password'];

//     if(empty($username)){
//         echo "username is missing";
//     }elseif(empty($password)){
//     echo "password is missing";
//     }
//      else{
//         echo "Hello ($username)";
//     }
// }



// $username='';
// if(empty($username)){
//     echo "the username isn't set";
// }else{
//     echo "the username is set";
// }