<html>
<meta charset="UTF-8">
<link href="XY.css" rel="stylesheet">
<?php
date_default_timezone_set("Europe/Paris");
if (isset($_POST['titre']) && isset($_POST['contenu'])) {
$titre = $_POST['titre'];
$contenu = $_POST['contenu'];
$categorie = $_POST['categorie'];
$img = $_POST['img'];
include('session.php');
$query = "SELECT * FROM articles";
if ($result = $db->query($query)) {
 
    /* fetch associative array */
    while ($row = $result->fetch_assoc()) {
        $titre1 = $row["titre"];
        $contenu1 = $row["contenu"];
        $created_at1 = $row["created_at"];
    }
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
<?php
function showBBcodes($text) {
	// BBcode array
	$find = array(
		'~\[b\](.*?)\[/b\]~s',
		'~\[i\](.*?)\[/i\]~s',
		'~\[u\](.*?)\[/u\]~s',
		'~\[quote\](.*?)\[/quote\]~s',
		'~\[size=(.*?)\](.*?)\[/size\]~s',
		'~\[color=(.*?)\](.*?)\[/color\]~s',
		'~\[url\]((?:ftp|https?)://.*?)\[/url\]~s',
		'~\[img\](https?://.*?\.(?:jpg|jpeg|gif|png|bmp))\[/img\]~s'
	);
	// HTML tags to replace BBcode
	$replace = array(
		'<b>$1</b>',
		'<i>$1</i>',
		'<span style="text-decoration:underline;">$1</span>',
		'<pre>$1</'.'pre>',
		'<span style="font-size:$1px;">$2</span>',
		'<span style="color:$1;">$2</span>',
		'<a href="$1">$1</a>',
		'<img src="$1" alt="" />'
	);
	// Replacing the BBcodes with corresponding HTML tags
	return preg_replace($find,$replace,$text);
}
?>
<div class="autour">
    <div class="article">
    <h1><?php if (isset($_POST['titre'])) { echo $_POST['titre']; }  ?><br><br></h1>
    <?php echo '<img src="'.$img.'" width="220" height="220">';?>
	<p class="para-description"><?php if (isset($_POST['categorie'])) { echo "Publié le ". $created_at1 . " dans " . $categorie; }?></p>
    <p class="para-article"><?php if (isset($_POST['contenu'])) { $htmltext = showBBcodes($contenu); echo $htmltext; } ?></p>
    </div>
</div>
<?php 
$sql = "INSERT INTO `articles` (titre, contenu, categorie, img) VALUES ('$titre', '$contenu', '$categorie', '$img')";
if (mysqli_query($db, $sql)) {
      echo "New record created successfully";
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($db);
}
mysqli_close($db);
?>
</body>
</html>