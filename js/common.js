// Funktion zur Anpassung der Footer-Position basierend auf der Inhaltsgröße
function adjustFooterPosition() {
    var contentHeight = document.body.clientHeight;
    var windowHeight = window.innerHeight;
    var footer = document.querySelector('footer');

    if (contentHeight < windowHeight) {
        footer.style.position = 'fixed';
        footer.style.bottom = '0';
    } else {
        footer.style.position = 'relative';
    }
}

// Event-Listener für die Anpassung der Footer-Position beim Laden und Ändern der Fenstergröße
window.addEventListener('DOMContentLoaded', function () {
    adjustFooterPosition();
    window.addEventListener('resize', adjustFooterPosition);
});

// Event-Listener für das Verhindern des Standardverhaltens des Formulars und die eigene Validierung
document.querySelector('form').addEventListener('submit', function(event) {
    // Hier füge deine Validierungslogik hinzu
    var name = document.getElementById('name').value;
    var email = document.getElementById('email').value;
    var message = document.getElementById('message').value;

    if (name.trim() === '' || email.trim() === '' || message.trim() === '') {
        alert('Bitte füllen Sie alle Pflichtfelder aus.');
        event.preventDefault(); // Verhindere das Absenden des Formulars
    }
});
