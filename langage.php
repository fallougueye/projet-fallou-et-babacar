<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>fonction</title>
</head>
<body>
    <?php 
    $max="";
    $identite = array ('nom1'=>'fallou','nom2'=>'anta','nom3'=>'gallaye');
    foreach($identite as $nom){
        if(strlen($nom)>strlen($max)){
            $max=$nom;
        }
    }
    
    
    echo "le nom le plus long est $max";

    echo"<br>";

    $somme=0;
    $age = array ('age1'=>'9','age2'=>'7','age3'=>'8');
    foreach($age as $anita){
        $somme=$somme+$anita;
    }

    $moy=$somme/3;

    echo "la moyenne des ages est $moy";

    
    
    ?>
</body>
</html>