<div id="cookie-banner" style="position: fixed; bottom: 0; left: 0; width: 100%; background: rgba(0, 0, 0, 0.8); color: white; text-align: center; padding: 15px; display: none;">
    Questo sito utilizza cookie per migliorare l'esperienza utente.
    <button id="banner-accept-all" class="accept-btn" style="margin-left: 10px; padding: 8px 12px; border: none; cursor: pointer; background: #4CAF50; color: white;">Accetta</button>
    <button id="banner-reject-all" class="decline-btn"  style="margin-left: 10px; padding: 8px 12px; border: none; cursor: pointer; background: #d9534f; color: white;">Rifiuta</button>
</div>

<script>

//document.addEventListener("DOMContentLoaded", function() {

function hideBanner() {
        document.getElementById('cookie-banner').style.display = 'none';
    }

 if (localStorage.getItem('consentMode') === null) {
    /* spefifici per banner */
        document.getElementById('banner-accept-all').addEventListener('click', function() {
            setConsent(true);
            hideBanner();
            console.log('siii')
        });
        document.getElementById('banner-reject-all').addEventListener('click', function() {
            setConsent(false);
            deleteCookie('_ga') 
            deleteCookie(`_ga_${GA_ID.substring(2)}`) 
            hideBanner();
            console.log('nooo')
        });
       
        document.getElementById('cookie-banner').style.display = 'block';
    }

//})

</script>