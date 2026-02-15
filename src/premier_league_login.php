
<?php
function login($username, $password) {
    if ($username === "admin" && $password === "1234") {
        return "Connexion réussie";
    } else {
        return "Échec de connexion";
    }
}
?>
