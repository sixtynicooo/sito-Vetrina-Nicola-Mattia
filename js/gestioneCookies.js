/* // Funzione per accettare i cookie
function acceptCookies() {
    localStorage.setItem("cookieAccepted", "true");
    document.getElementById("cookie-banner").style.display = "none";
}

// Funzione per cancellare la scelta (rimuove il salvataggio e mostra di nuovo il banner)
function declineCookies() {
    document.getElementById("cookie-banner").style.display = "none";
    localStorage.removeItem("googleAnalyticsConsent");
    localStorage.removeItem("cookieAccepted");
    location.reload(); // Ricarica la pagina per applicare le modifiche
}


 // Funzione per caricare Google Analytics
 function loadGoogleAnalytics() {
    var script = document.createElement("script");
    script.async = true;
    script.src = "https://www.googletagmanager.com/gtag/js?id=UA-XXXXXXXXX-X";
    document.head.appendChild(script);

    script.onload = function() {
        window.dataLayer = window.dataLayer || [];
        function gtag() { dataLayer.push(arguments); }
        gtag("js", new Date());
        gtag("config", "UA-XXXXXXXXX-X", { anonymize_ip: true });
    };
} */