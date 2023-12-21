<?php
// Hier sollte die Überprüfung der Benutzerdaten erfolgen.
// Dies ist nur ein einfaches Beispiel und unsicher für den Einsatz in der Produktion.

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usernameOrEmail = $_POST["login-username-email"];
    $password = $_POST["login-password"];

    // Hier sollte die Überprüfung der Anmeldeinformationen erfolgen.
    // Beispiel: Überprüfung der Datenbank, ob Benutzer existiert und das Passwort korrekt ist.
    // Hier werden nur die eingegebenen Daten überprüft.

    // Weiterleitung nach erfolgreichem Login
    header("Location: ./dashboard.php");
    exit();
}
?>
