<?php
// Hier sollte die Überprüfung und Speicherung der Benutzerdaten erfolgen.
// Dies ist nur ein einfaches Beispiel und unsicher für den Einsatz in der Produktion.

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstName = $_POST["register-firstname"];
    $lastName = $_POST["register-lastname"];
    $username = $_POST["register-username"];
    $email = $_POST["register-email"];
    $gender = $_POST["register-gender"];
    $birthdate = $_POST["register-birthdate"];

    // Hier sollte die Überprüfung und Speicherung der Daten erfolgen.
    // Beispiel: Überprüfung auf gültige Eingaben und Speicherung in der Datenbank.
    // Hier werden nur die eingegebenen Daten verarbeitet.

    // Weiterleitung nach erfolgreicher Registrierung
    header("Location: ../forms/login.html");
    exit();
}
?>
