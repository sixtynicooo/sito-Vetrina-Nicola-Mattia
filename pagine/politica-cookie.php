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
    <button class="accept-btn" onclick="acceptCookies()" style="margin-left: 10px; padding: 8px 12px; border: none; cursor: pointer; background: #4CAF50; color: white;">Accetta</button>
    <button class="decline-btn" onclick="declineCookies()" style="margin-left: 10px; padding: 8px 12px; border: none; cursor: pointer; background: #d9534f; color: white;">Elimina</button>
   
  </div>
</div>
<p>Cookie</p>

 
<?php
// Includi header e navigazione
include  '../include/footer.php';
?>