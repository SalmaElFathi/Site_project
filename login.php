<?php include('connect.php');
include('header_nav.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>authentification</title>
</head>
<body>
<center>
<h1>login</h1>
<div class="formulaire">

    <form action="" method="post" >
        
    <table>
        <tr><td>email:  </td><td><input type="text" id="email" name="email" 
        placeholder="entrer votre email"
        autocomplete="off" size="30px" required="required"></td></tr>
        <tr><td>mot de pass:</td><td><input type="password" id="passwd"  name="passwd" 
        placeholder="entrer votre mot de pass"
        autocomplete="off" size="30px" required="required"></td></tr>
        
    
</table>

    <p>vous n'avez pas un compte ? <a href="http://localhost/site_php/inscription.php">créer un compte</a> </p>
   
        <button type="submit" name="user_login">se connecter</button>
        <button type="reset">annuler</button>

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
if(isset($_POST['user_login'])){
    $email=$_POST['email'];
    $password=$_POST['passwd'];
    $select_query="select * from `user` where email='$email'";
    $result=mysqli_query($con,$select_query);
    $_rowcount=mysqli_num_rows($result);
    $row_data=mysqli_fetch_assoc($result);
    if($_rowcount>0){
        if(password_verify($password,$row_data['password'])){
            echo "<script>alert('login successful')</script>";
            echo"<script>window.open('profile.php')</script>";
        }
        else {echo"<script>alert('invalid')</script>";}
    }
else {echo "<script>alert ('invalid')</script>";}}
?>