<!DOCTYPE html>
<html>
    <head>
    
        <title>fallou sonatel</title>
    </head>

    <body>
        <div align="center">
        <h1>calculatrice</h1>
        <form  method="POST" action="">

        <p>nombr1:<input name="nbr1" type="text"></p>
        <p>nombr2:<input name="nbr2" type="text"</p>
        <select name="op">;
    
            <option value="+">Addition</option>
            <option value="-">Soustraction</option>
            <option value="*">Multiplication</option>
            <option value="/">Division</option>
        </select><br>
            <input type="submit" name="calculer" value="calculer"/>
            <input type="reset" value="effacer"/><br>
            <a href="login.php">Deconexion</a><br>
                 <h3>Donnez-moi l'heure stp</h3>
            <a href="heure.php">Tape ici</a>

</form>
<?php
if(isset($_POST['calculer']))
{
    extract($_POST);
    if($op=='+'){
        echo ("$nbr1 + $nbr2 =".$nbr1 + $nbr2);
}
elseif($op=='-'){
    echo ("$nbr1 - $nbr2 =".$nbr1 - $nbr2);
    }
    elseif($op=="/"){
        echo ("$nbr1 / $nbr2 =".$nbr1 / $nbr2);
        }
        elseif($op=="*"){
            echo ("$nbr1 * $nbr2 =".$nbr1 * $nbr2);
            }
        /*if($nbr2!==0){
            echo ("$nbr1 modulo $nbr2 =".$nbr1 modulo $nbr2);
        }
        else {}*/
    
}
/*extract($_POST);
echo "choix  $choix";
if (isset($submit)){
switch ($choix){
case 1:
$a + $b =$rest;
echo "la somme de $a et $b = $rest";
break;
case 2:
$a - $b =$rest;
echo "la difference de $a et $b = $rest";
break;
case 3:
$a * $b =$rest;
echo "la multiplication de $a et $b = $rest";
break;
case 4:
$a / $b =$rest;
echo "la division de $a et $b = $rest";
}
}*/
?>
</div>


    
        
    </body>
</html>