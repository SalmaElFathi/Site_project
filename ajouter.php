<?php 
include('gestion.php');
include('connect.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ajouter produit</title>
</head>
<body>
    <center>
        <form  class="formulaire" action="ajouter.php" method="POST">
            <h1>ajouter un nouveau produit </h1>
            <table>
           
            <tr><td>catégorie:</td><td><select name="cat" id="cat">
                <option value="robe">robe</option>
                <option value="manteaux">manteaux</option>
                <option value="sweat-shirt">sweat-shirt</option>
                <option value="jeans">jeans</option>
            </select></td></tr>

         <tr><td>nom du produit:</td><td><input type="text" id="name" name="name" 
        size="30px"
        required="required"></td></tr>

        <tr><td>marque : </td><td><input type="text" id="marque" name="marque" 
        size="30px"
        required="required"></td></tr>
        
        <tr><td>prix</td><td><input type="text" id="prix" name="prix" 
        size="30px"
        required="required"></td></tr>

        <tr><td>image</td><td><input type="file" id="image" name="image" 
        required="required"></td></tr>

    </table>
   
        <button type="submit" name="ajouter">ajouter le produit</button>
        <button type="reset" name="annuler">annuler</button>

        </div>
        <style>
        .formulaire{margin:50px;
        width:50%;
        background-color: palevioletred;
        color:white;
        border-radius:15px;}
        button{
            border-radius: 5px;
        
        }
        button:hover{
            background-color: purple;
            color:white;
        }
        </style>
   
        </form>
    </center>


  <?php 
if (isset($_POST['ajouter'])){
    $name=$_POST['name'];
    $categorie=$_POST['cat'];
    $marque=$_POST['marque'];
    $prix=$_POST['prix'];
    $image=$_POST['image'];
    
/* insertion*/
move_uploaded_file($image,"./$image");
    $insert_query="insert into `produit` (categorie,nom,marque,prix,image)
    values
('$categorie','$name','$marque','$prix','$image')";
$_sql_execute=mysqli_query($con,$insert_query);
if($_sql_execute){echo"<script>alert('registred successfully')</script>";}
else {die(mysqli_error($con));
}}


?> 
</body>
</html>