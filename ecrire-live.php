<html>
<head>
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
<script src="ckeditor/ckeditor.js"></script>
</head>
<body>
<div class="head">
    <img src="https://static1.squarespace.com/static/515707b8e4b05239ba84f07b/t/59d64cae6f4ca3a1fbd37946/1507216562760/Bugs.png" style="width: 250px; height: 120px;">
</div>
<div class="bar">
    <div id="link" onclick="window.location='sommaire.php';">Sommaire</div>
    <?php if (isset($login_session)) {
   if ($login_session == "pepe") {
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
<div class="autour">
    <form action="new-article.php" method="POST">
    Titre : 
    <input type="text" name="titre"><br><br><br>
    Publié le <?php echo date('d-m-Y H:i',time()); ?> dans
    <select name="categorie">
    <option>Politique</option>
    <option>Monde</option>
    <option>Sport</option>
    </select><br><br>
    Contenu article :<br>
    <textarea rows="10" cols="100" name="contenu" id="editor1"></textarea>
    <script>
        // Replace the <textarea id="editor1"> with a CKEditor
        // instance, using default configuration.
        CKEDITOR.replace( 'editor1' );
    </script>
    <input type="submit">
    </form>
</div>
</body>
</html>