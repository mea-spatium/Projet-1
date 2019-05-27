<?php
   include('config.php');
   $query = "SELECT titre, contenu, categorie, created_at, img FROM articles WHERE id = '3' ";
if ($result = $db->query($query)) {
 
    /* fetch associative array */
    while ($row = $result->fetch_assoc()) {
        $titre = $row["titre"];
        $contenu = $row["contenu"];
        $created_at = $row["created_at"];
        $categorie = $row["categorie"];
        $img = $row["img"];
    }
}
?>
<?php
   $query = "SELECT titre, contenu, categorie, created_at, img FROM articles WHERE id = '12' ";
if ($result = $db->query($query)) {
 
    /* fetch associative array */
    while ($row = $result->fetch_assoc()) {
        $titre1 = $row["titre"];
        $contenu1 = $row["contenu"];
        $created_at1 = $row["created_at"];
        $categorie1 = $row["categorie"];
        $img1 = $row["img"];
    }
}
?>
<?php
   $query = "SELECT titre, contenu, categorie, created_at, img FROM articles WHERE id = '13' ";
if ($result = $db->query($query)) {
 
    /* fetch associative array */
    while ($row = $result->fetch_assoc()) {
        $titre2 = $row["titre"];
        $contenu2 = $row["contenu"];
        $created_at2 = $row["created_at"];
        $categorie2 = $row["categorie"];
        $img2 = $row["img"];
    }
}
?>
<script>
var width = screen.availWidth;
var height = screen.availHeight;
if (width == "1920" && height == 1040) {
    document.write('<link rel="stylesheet" type="text/css" href="XY5.css">');
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
//************************************************************ */
function Defile() {
    document.getElementById("link-bas").style.display = "block";
    document.getElementById("link-bas2").style.display = "block";
}
function Retour() {
    document.getElementById("link-bas").style.display = "none";
    document.getElementById("link-bas2").style.display = "none";
}
</script>
<html>
<meta charset="UTF-8">
<body>
<div class="head">
    <img class="logo" src="https://static1.squarespace.com/static/515707b8e4b05239ba84f07b/t/59d64cae6f4ca3a1fbd37946/1507216562760/Bugs.png" style="width: 250px; height: 120px;">
</div>
<div class="bar">
    <div id="link" onmouseover="Defile()" onmouseout="Retour()" onclick="window.location='accueil.php';">Sommaire
    <div id="link-bas" onclick="window.location='accueil.php';">Sommaire</div>
    <div id="link-bas2" onclick="window.location='accueil.php';">Sommaire</div>
</div>
    <div id="link-gauche" onclick="Signup()">Inscription</div>
    <div id="link-gauche" onclick="Login()">Se Connecter</div>
</div>
<div class="autour">
<div class="article">
    <h1><?php  echo $titre;  ?><br><br></h1>
    <?php echo '<img class="img" src="'.$img.'" width="100%" height="480">'?>
    <p style="font-size: larger; color: #878787;"><?php echo "Publié le ". $created_at . " dans "?>
    <?php if ($categorie == "Politique") {
    echo '<a href="https://www.google.com">' . $categorie . '</a>'; }
        else if ($categorie == "Monde") {
    echo '<a href="https://www.google.com">' . $categorie . '</a>'; }
        else if ($categorie == "Sport") {
        echo '<a href="https://www.google.com">' . $categorie . '</a>'; } ?></p>
    <p style="font-size: larger;"><?php echo $contenu; ?></p>
</div>
<div class="article1">
    <h1><?php  echo $titre1;  ?><br><br></h1>
    <?php echo '<img class="img1" src="'.$img1.'" width="80%" height="220">'?>
    <p style="font-size: larger; color: #878787;"><?php echo "Publié le ". $created_at1 . " dans "?>
    <?php if ($categorie1 == "Politique") {
    echo '<a href="https://www.google.com">' . $categorie1 . '</a>'; }
        else if ($categorie1 == "Monde") {
    echo '<a href="https://www.google.com">' . $categorie1 . '</a>'; }
        else if ($categorie1 == "Sport") {
        echo '<a href="https://www.google.com">' . $categorie1 . '</a>'; } ?></p>
    <p style="font-size: larger;"><?php echo $contenu1; ?></p>
</div>
<div class="article2">
    <h1><?php  echo $titre2;  ?><br><br></h1>
    <?php echo '<img class="img1" src="'.$img2.'" width="80%" height="220">'?>
    <p style="font-size: larger; color: #878787;"><?php echo "Publié le ". $created_at2 . " dans "?>
    <?php if ($categorie2 == "Politique") {
    echo '<a href="https://www.google.com">' . $categorie2 . '</a>'; }
        else if ($categorie2 == "Monde") {
    echo '<a href="https://www.google.com">' . $categorie2 . '</a>'; }
        else if ($categorie2 == "Sport") {
        echo '<a href="https://www.google.com">' . $categorie2 . '</a>'; } ?></p>
    <p style="font-size: larger;"><?php echo $contenu2; ?></p>
</div>
</div>
<?php $db->close(); ?>
</body>
</html>