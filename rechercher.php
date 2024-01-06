<?php
include('connect.php');
include('gestion.php');
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>rechercher un produit </title>
</head>
<body>
<center>
        <form  class="formulaire" action="rechercher.php" method="POST">
            <h1>chercher un produit </h1>
            <table >
                <tr><td>le nom du produit: </td><td><input type="text" name="mc"></td></tr>
            </table>
            <br>
            <input type="submit" vlaue="rechercher">&nbsp;&nbsp;
            <input type="reset" value="annuler">
        </form>
</center>
<?php 
    if(isset($_POST['']))
        if(!empty($_Post['']))
        {$sql="select*from produit where name='".$_POST['name']."'";
            $reponse=$bdd->query($sql);}
        ?>
            <center>
                
            </center>

        
    
 
</body>
</html>