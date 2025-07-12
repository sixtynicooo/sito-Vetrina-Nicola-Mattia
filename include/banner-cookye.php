<div id="cookie-banner" style="position: fixed; bottom: 0; left: 0; width: 100%; background: rgba(0, 0, 0, 0.8); color: white; text-align: center; padding: 15px; display: none;">
    Questo sito utilizza cookie per migliorare l'esperienza utente.
    <button class="accept-btn" onclick="acceptCookies()" style="margin-left: 10px; padding: 8px 12px; border: none; cursor: pointer; background: #4CAF50; color: white;">Accetta</button>
    <button class="decline-btn" onclick="declineCookies()" style="margin-left: 10px; padding: 8px 12px; border: none; cursor: pointer; background: #d9534f; color: white;">Rifiuta</button>
</div>

<script>
    // Controlla se il cookie è stato accettato
    if (!localStorage.getItem("cookieAccepted")) {
        document.getElementById("cookie-banner").style.display = "block";
    }

    // Funzione per accettare i cookie
    function acceptCookies() {
        localStorage.setItem("cookieAccepted", "true");
        document.getElementById("cookie-banner").style.display = "none";
    }

    // Funzione per rifiutare i cookie (nasconde il banner ma non salva nulla)
    function declineCookies() {
        document.getElementById("cookie-banner").style.display = "none";
    }
</script>
