<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="calculatrice.php">
    <title>Notre page</title>
</head>
<body>
              <div align=center>
           <h1>Saisir votre login et votre mot de pass</h1>
    <form method="POST" action="login.php">
    <label for="username"></label>
    <input type="text" name="login"><br>
    <label for="password"></label>
    <input type="password" name="password"><br>
    <input type="submit" name="submit" value="conexion"><br>
    <a href="accueil.php">Deconexion</a>
    </form>
    </div>
    <?php
    extract($_POST);
    if(isset($submit)){
        if ($login==admin && $password==admin){
            header ('location: calculatrice.php');
        }
        
    }

    ?>
</body>
</html>