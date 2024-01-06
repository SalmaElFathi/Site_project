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
                <tr><td>le nom du produit: </td><td><input type="text" name="nom_pr"></td></tr>
            </table>
            <br>
            <input type="submit" vlaue="rechercher" name="rechercher">&nbsp;&nbsp;
            <input type="reset" value="annuler">
        </form>
</center>
<?php
	if(isset($_POST['rechercher'])) 
	{
		if(!empty($_POST['nom_pr'])) 
		{
			
			$query="select * from produit where nom='".$_POST['nom_pr']."'";
			$reponse =mysqli_query($conn,$query);
			$nbrDeLigne = mysqli_num_rows($reponse);
			echo "<center> <b>Il y a ".$nbrDeLigne." Produit(s)</b></center>";
?>
			<center><table border="1">
			    <tr bgcolor="#FF9966"><th>Catégorie</th><th>nom</th><th>marque</th><th>prix</th>
			<?php
				if($nbDeLigne>0)
				{foreach($reponse as $row)
				{echo "<tr><td>".$row['categorie']."</td>";
				echo "<td>".$row['name']."</td>";
				echo "<td>".$row['marque']."</td>";
				echo "<td>".$row['prix']."</td>";
				
				echo "</tr>";
				} 
			echo "</table>";
		}  }
				else 
				echo"<script>alert('Taper le nom du produit')</script>";
	} 
			?>
</body>
</html>
