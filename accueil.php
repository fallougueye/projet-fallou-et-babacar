<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Notre page php</title>
</head>
<body>
          <div align=center>
    <h1>Welcomme to fallou and Babacar page</h1>
                <h3>voila</h3>
           <h2>Saisir votre login et votre mot de pass</h2>
    <form method="POST" action="accueil.php">
    <label for="username"></label>
    <input type="text" name="login"><br>
    <label for="password"></label>
    <input type="password" name="password"><br>
    <input type="submit" name="submit" value="conexion"><br>
    </form>
    </div>
    <?php
    extract($_POST);
    if(isset($submit)){
        if ($login==admin && $password==admin){
            header ('location: accueil1.php');
        }
        else{
            echo "le mot de passe n'est pas reconnu";
        }
    }
?>
</body>
</html>