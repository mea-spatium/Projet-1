<?php
   include('session.php');
?>
<script>
var width = screen.availWidth;
var height = screen.availHeight;
if (width == "1920" && height == 1040) {
    document.write('<link rel="stylesheet" type="text/css" href="XY.css">');
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
<html>
<meta charset="UTF-8">
<body>
<div class="head">
    <img src="https://static1.squarespace.com/static/515707b8e4b05239ba84f07b/t/59d64cae6f4ca3a1fbd37946/1507216562760/Bugs.png" style="width: 250px; height: 120px;">
</div>
<div class="bar">
    <div id="link" onclick="window.location='accueil.php';">Sommaire</div>
    <?php if ($login_session == "pepe" || "admin") {
   echo '<div id="link" onclick="Ecrire()">Nouvel article</div>';
   echo '<div id="link" onclick="Liste()">Liste des articles</div>';
   echo '<div id="link-gauche" onclick="Logout()">Se déconnecter</div>';
    }
   else {
    echo '<div id="link-gauche" onclick="Signup()">Inscription</div>';
    echo '<div id="link-gauche" onclick="Login()">Se Connecter</div>';
   }
   ?>
</div>
<div class="autour">
    <div class="article">
<?php $sql = "SELECT titre, contenu FROM articles";
$result = $db->query($sql);

$a = "1";
$b = "1";
if ($a == $b) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo '<h1>' . $row["titre"] . '</h1><p class="para-article">' . $row["contenu"] . '</p>';
    }
}
$db->close(); 
?>
<br><br>
    
    </div>
</div>
</body>
</html>