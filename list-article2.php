<?php
   include('session.php');
   $query = "SELECT titre, contenu, categorie, created_at FROM articles WHERE id = '3' ";
if ($result = $db->query($query)) {
 
    /* fetch associative array */
    while ($row = $result->fetch_assoc()) {
        $titre = $row["titre"];
        $contenu = $row["contenu"];
        $created_at = $row["created_at"];
        $categorie = $row["categorie"];
    }
}
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
    <div id="link" onclick="window.location='sommaire.php';">Sommaire</div>
    <?php if ($login_session == "pepe") {
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
	<h1><?php  echo $titre;  ?><br><br></h1>
	<p style="font-size: larger; color: #878787;"><?php echo "Publié le ". $created_at . " dans " . $categorie; ?></p>
    <p style="font-size: larger;"><?php echo $contenu; ?></p>
</div>
</div>
<?php $db->close(); ?>
</body>
</html>