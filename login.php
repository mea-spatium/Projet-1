<?php
   include('config.php');
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($db,$_POST['username']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']); 
      
      $sql = "SELECT id FROM admin WHERE username = '$myusername' and passcode = '$mypassword'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      /*$active = $row['active'];*/
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      
   }
?>
<html>
<meta charset="UTF-8">
<script>
var width = screen.availWidth;
var height = screen.availHeight;
if (width == "1920" && height == 1040) {
    document.write('<link rel="stylesheet" type="text/css" href="XY3.css">');
}
else if (width == "1366" && height == "728") {
    document.write('<link rel="stylesheet" type="text/css" href="XY-1366x768.css">');
}
else {
    window.location='https://www.google.com';
}
function Ecrire() {
   window.location = "ecrire.php";
}
function Liste() {
   window.location = "list-article.php";
}
function Signup() {
   window.location = "signup.php";
}
function Logout() {
   window.location = "logout.php";
}
function Login() {
   window.location = "login.php";
}
</script>
<body>
<div class="head">
    <img src="https://static1.squarespace.com/static/515707b8e4b05239ba84f07b/t/59d64cae6f4ca3a1fbd37946/1507216562760/Bugs.png" style="width: 250px; height: 120px;">
</div>
<div class="bar">
    <div id="link" onclick="window.location='accueil.php';">Sommaire</div>
    <?php if (isset($login_session)) {
   if ($login_session == "pepe" || "admin") {
   echo '<div id="link" onclick="Ecrire()">Nouvel article</div>';
   echo '<div id="link" onclick="Liste()">Liste des articles</div>';
   echo '<div id="link-gauche" onclick="Logout()">Se déconnecter</div>';
    }
}
else {
   echo '<div id="link-gauche" onclick="Signup()">Inscription</div>';
   echo '<div id="link-gauche" onclick="Login()">Se Connecter</div>';
   }
   ?>
</div>
<div class="autour2">
<h2>Se connecter</h2>
<form action = "" method = "post">
    Username <br><input type = "text" name = "username" class = "box"/><br /><br />
    Password <br><input type = "password" name = "password" class = "box" /><br/><br />
   <input type = "submit" value = " Submit "/><br />
</form>
<p>   
<?php
if (isset($_POST['username'])) {
if($count == 1) {
         /*session_register("myusername");*/
         $_SESSION['login_user'] = $myusername;
         
         header("location: welcome.php");
      }else {
         $error = "Your Login Name or Password is invalid";
         echo $error;
      }
   }
?>
</p>
</div>
</div>
</body>
</html>