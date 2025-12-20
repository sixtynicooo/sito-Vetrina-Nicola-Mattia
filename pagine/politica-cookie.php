<?php
// Includi header e navigazione
include  '../include/header.php';
include  '../include/nav.php';
?>

<div id="cookie-banner-page" class="cookie-banner">
  <p class="cookie-text">
    Questo sito utilizza cookie tecnici e, previo tuo consenso, cookie di terze parti 
    per analizzare il traffico e migliorare la tua esperienza di navigazione. 
    Utilizziamo <strong>Google Analytics</strong> per raccogliere informazioni anonime sull’uso del sito.
    Puoi accettare o rifiutare i cookie in qualsiasi momento.
  </p>

  <div class="cookie-buttons">
    <button id="button-accept-all"  class="accept-btn" style="margin-left: 10px; padding: 8px 12px; border: none; cursor: pointer; background: #4CAF50; color: white;">Accetta</button>
    <button id="button-reject-all"  class="decline-btn"  style="margin-left: 10px; padding: 8px 12px; border: none; cursor: pointer; background: #d9534f; color: white;">Elimina</button>
   
  </div>
</div>
<p>Cookie</p>

<script>
//document.addEventListener("DOMContentLoaded", () => {
console.log('Banner display:', document.getElementById('button-accept-all'));

    if( document.getElementById("button-accept-all") && document.getElementById('button-reject-all')){
        
 /*  per pagina politica cookies */
        document.getElementById("button-accept-all").addEventListener('click', ()=> {
            setConsent(true)
            console.log('siii')
        });
        document.getElementById('button-reject-all').addEventListener('click', () =>{
            setConsent(false);
            deleteCookie('_ga') 
            deleteCookie(`_ga_${GA_ID.substring(2)}`) 
            console.log('delete all politic')
        });
    }

  
//})

 
</script>
 
<?php
// Includi header e navigazione
include  '../include/footer.php';
?>