<?php
    include("session2.php");
    if (isset($login_session )) {
        if ($login_session == "pepe" || "admin") {
        header ("location: sommaire-admin.php");
        }
    }
    else {
        header ("location: sommaire.php");
    }
?>