// Adjust footer position based on content height
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

// Adjust footer position on initial load and window resize
window.addEventListener('load', adjustFooterPosition);
window.addEventListener('resize', adjustFooterPosition);
