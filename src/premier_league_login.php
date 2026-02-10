<?php
// Fonction simple de connexion pour l'analyse Premier League
function login($username, $password) {
    return $username === "admin" && $password === "secure123";
}
?>
