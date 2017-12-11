<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="admin1.php">
    <title>hello class</title>
</head>
<body>
<h1>Welcome to my house</h1>
<form method="POST" action="admin.php">
    <label>login</label>
<input type="text" name="login"><br>
<label>password</label>
<input type="password" name="password"><br>
<input type="submit" name="submit" value="conexion">

</form>
<?php
extract($_POST);
if(isset($submit)){
    if($login=="fallou" && $password=="gueye"){
        header('location: admin1.php');
    }
    else{
        echo ("le mot de pass est incorrecte");
    }


}

?>
</body>
</html>