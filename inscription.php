<?php include('connect.php');
include('header_nav.php')
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sign up</title>
    <!--<script language="JavaScript">
        function verif(){
            if(document.getElementById('nom').value="")
            {alert("veillez taper votre nom ");return false;}
            if(document.getElementById('email').value="")
            {alert("veillez taper votre email ");return false;}
            if(document.getElementById('psw').value="")
            {alert("veillez taper votre nom ");return false;}
        }
    </script>-->
</head>
<body>
    <div class="formulaire">
        <center>
    
    <form action="inscription.php" method="post" >
    <table>
        <tr><td>nom:</td><td><input type="text" id="name" name="name" 
        placeholder="entrer votre nom"
        autocomplete="off"
        size="30px"
        required="required"></td></tr>
        <tr><td>email:  </td><td><input type="text" id="email" name="email" 
        placeholder="entrer votre email"
        autocomplete="off" size="30px"
        required="required"></td></tr>
        <tr><td>adresse: </td><td><input type="text" id="adress"  name="adress" 
        placeholder="entrer votre adresse"
        autocomplete="off" size="30px"
        required="required"></td></tr>
        <tr><td>contact: </td><td><input type="text" id="contact"  name="contact" 
        placeholder="entrer votre contact"
        autocomplete="off" size="30px"
        required="required"></td></tr>
        <tr><td>mot de pass:</td><td><input type="password" id="psswd"  name="psswd" 
        placeholder="entrer votre mot de pass"
        autocomplete="off" size="30px"
        required="required"></td></tr>
        <tr><td>mot de pass:</td><td><input type="password" id="pwd_confirm"  name="pwd_confirm" 
        placeholder="confirmer votre mot de pass"
        autocomplete="off" size="30px"
        required="required"></td></tr>
        

    </table>
    <p>vous avez déja un compte ? <a href="http://localhost/site_php/login.php">se connecter</a></p>
   
        <button type="submit" name="envoyer">envoyer</button>
        <button type="reset" name="annuler">annuler</button>

        </div>
        <style>
        .formulaire{margin:50px;
        width:50%;
        background-color: palevioletred;
        color:white;}
        </style>
    </form>
    </center>
</body>
</html>
<?php
if (isset($_POST['envoyer'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $adress=$_POST['adress'];
    $contact=$_POST['contact'];
    $pwd=$_POST['psswd'];
    $hash_password=password_hash($pwd,PASSWORD_DEFAULT);
    $pwdconfirm=$_POST['pwd_confirm'];

/*user exists */

$_select_query ="select * from `user` where nom='$name' and email='$email'";
$_result=mysqli_query($con,$_select_query);
$rows=mysqli_num_rows($_result);
if ($rows>0){
echo"<script>alert('username and email alredy exist')</script>"; }
elseif($pwd!=$pwdconfirm){echo"<script>alert('password do not match ')</script>";}
else {

/* insertion*/
//move_uploaded_file($user_image_tmp,"./user_images/$user_image");
    $insert_query="insert into `user` (nom,email,password,adress,contact)
    values
('$name','$email','$hash_password','$adress','$contact')";
$_sql_execute=mysqli_query($con,$insert_query);
if($_sql_execute){echo"<script>alert('registred successfully')</script>";}
else {die(mysqli_error($con));
}}

}
?>