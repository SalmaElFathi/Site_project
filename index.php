<?php  include('connect.php') ;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin</title>
</head>
<body>
<div class="formulaire">
    <center>
    <form action="index.php" method="post" >
        
        <h3>BACK OFFICE </h3>
    <table>
        <tr><td>login </td><td><input type="text" id="login" name="login" 
        
        autocomplete="off" size="30px" required="required"></td></tr>
        <tr><td>password</td><td><input type="password" id="pwd"  name="pwd" 
        
        autocomplete="off" size="30px" required="required"></td></tr>
        
    


    </table>
    
   
    
        <button type="submit" name="submit">se connecter</button>
        <button type="reset">effacer</button>

        </div>
       
    </form>
    </center>
    <style>
        .formulaire{margin:50px;
        width:50%;
        background-color: palevioletred;
        color:white;}
    
    
    </style>
</body>
</html>
<?php  
if (isset ($_POST['submit'])){
if (isset($_POST['login']) and isset($_POST['pwd']))
{
    if(($_POST['login']=='admin') and  ($_POST['pwd']=='salma'))
    header("location:gestion.php");
else echo 'login ou password incorrect';
}}
?>