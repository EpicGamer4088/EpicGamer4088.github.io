<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validierung
    $name = trim($_POST["name"]);
    $lastname = trim($_POST["lastname"]);
    $email = trim($_POST["email"]);
    $message = trim($_POST["message"]);

    if (empty($name) || empty($email) || empty($message)) {
        // Mindestens eines der Pflichtfelder ist leer
        header("Location: ../forms/error_page.html"); // Oder eine Fehlerseite
        exit();
    }

    // Überprüfen, ob die E-Mail-Adresse das @-Symbol enthält
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        // Die E-Mail-Adresse ist ungültig
        header("Location: ../forms/error_page.html"); // Oder eine Fehlerseite für ungültige E-Mail-Adresse
        exit();
    }

    // Hier könntest du weitere Validierungen hinzufügen.

    // Weiter mit dem Versand der E-Mail
    $to = "tim.platzer@gmx.at"; // Ändere dies zu deiner E-Mail-Adresse
    $subject = "Neue Kontaktanfrage von $name $lastname";
    $headers = "From: $email";

    $email_content = "First Name: $name\n";
    $email_content .= "Last Name: $lastname\n";
    $email_content .= "E-Mail: $email\n\n";
    $email_content .= "Nachricht:\n$message";

    mail($to, $subject, $email_content, $headers);

    // Weitere Aktionen können hier hinzugefügt werden.

    header("Location: ../forms/thank_you.html"); // Oder eine andere Weiterleitung
} else {
    header("Location: ../forms/error_page.html"); // Oder eine Fehlerseite
}

?>
