<html>
<meta charset="UTF-8">
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
</script>
<body>
<div class="head">
    <img src="https://static1.squarespace.com/static/515707b8e4b05239ba84f07b/t/59d64cae6f4ca3a1fbd37946/1507216562760/Bugs.png" style="width: 250px; height: 120px;">
</div>
<div class="bar">
    <div id="link" onclick="window.location='sommaire.php';">Sommaire</div>
    <div id="tink">Test</div>
    <?php if (isset($login_session)) {
   <?php if (isset($login_session )) {
    if ($login_session == "pepe" || "admin") {
     echo '<div id="link" onclick="Ecrire()">Nouvel article</div>';
     echo '<div id="link" onclick="Liste()">Liste des articles</div>';
     echo '<div id="link-gauche" onclick="Logout()">Se déconnecter</div>';
     }
    else {
     echo '<div id="link-gauche" onclick="Signup()">Inscription</div>';
     echo '<div id="link-gauche" onclick="Login()">Se Connecter</div>';
    }
 }
    ?>
</div>
<div class="autour">
    <form action="new-article.php" method="POST">
    Titre : 
    <input type="text" name="titre"><br><br><br>
    Contenu article :<br>
    <textarea rows="10" cols="100" name="contenu" id="MyTA"></textarea>
    <input type="submit">
    </form>
    <button onclick="rouge()">Rouge</button>
<script>
function rouge() {
    document.getElementById("MyTA").style.color = "red";
}
</script>
</div>
</body>
</html>