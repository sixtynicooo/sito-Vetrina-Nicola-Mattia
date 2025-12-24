<?php
// Includi header e navigazione
include  '../include/header.php';
include  '../include/nav.php';
?>

<div id="cookie-page">
  <div class="cookie-text">
   <h1>Politica sui Cookie</h1><br>
    <h2>Cosa sono i cookie</h2>
    <p>
      I cookie sono piccoli file di testo che i siti visitati inviano al dispositivo
      dell’utente, dove vengono memorizzati per poi essere ritrasmessi agli stessi siti
      alla visita successiva. I cookie consentono al sito di riconoscere l’utente e di
      migliorare l’esperienza di navigazione.
    </p>

    <br><h2>Tipologie di cookie utilizzati</h2>

    <br><h3>Cookie tecnici</h3>
    <p>
      Questo sito utilizza cookie tecnici, necessari al corretto funzionamento del sito
      e alla navigazione dell’utente.
    </p>
    <p>
      Questi cookie non richiedono il consenso dell’utente.
    </p>

    <h3>Cookie di analisi (Google Analytics)</h3>
    <p>
      Questo sito utilizza <strong>Google Analytics</strong>, un servizio di analisi web
      fornito da Google LLC, per raccogliere informazioni in forma aggregata e anonima
      sull’utilizzo del sito da parte degli utenti (numero di visitatori, pagine visitate,
      tempo di permanenza, ecc.).
    </p>
    <p>
      I dati raccolti tramite Google Analytics non consentono l’identificazione personale
      dell’utente. È attiva l’<strong>anonimizzazione degli indirizzi IP</strong>.
    </p>
    <p>
      Google può utilizzare tali informazioni per valutare l’utilizzo del sito e fornire
      altri servizi relativi alle attività del sito.
    </p>

    <h3>Cookie di terze parti</h3>
    <p>
      L’utilizzo di Google Analytics 4 comporta l’installazione di cookie di terze parti.
    </p>
    <p>
      Per maggiori informazioni sul trattamento dei dati da parte di Google:
      <br>
      <a href="https://policies.google.com/privacy" target="_blank" rel="noopener noreferrer">
        https://policies.google.com/privacy
      </a>
    </p>

    <h2>Gestione e disattivazione dei cookie</h2>
    <p>
      L’utente può decidere se accettare o rifiutare i cookie in qualsiasi momento tramite:
    </p>
    <ul>
      <li>le impostazioni del browser</li>
      <li>il banner di gestione del consenso (se presente)</li>
      <li>i bottoni presenti sotto gestiscono i cookie</li>
    </ul>
    <p>
      La disabilitazione dei cookie potrebbe compromettere alcune funzionalità del sito.
    </p>

  </div>
<br>
  <div class="cookie-buttons">
    <button id="button-accept-all"  class="accept-btn" style="margin-left: 10px; padding: 8px 12px; border: none; cursor: pointer; background: #4CAF50; color: white;">Accetta</button>
    <button id="button-reject-all"  class="decline-btn"  style="margin-left: 10px; padding: 8px 12px; border: none; cursor: pointer; background: #d9534f; color: white;">Rifiuta</button>
   
  </div>
</div>

<script>
    if( document.getElementById("button-accept-all") && document.getElementById('button-reject-all')){
        
 /*  per pagina politica cookies */
        document.getElementById("button-accept-all").addEventListener('click', ()=> {
            setConsent(true)
        });
        document.getElementById('button-reject-all').addEventListener('click', () =>{
            setConsent(false);
            deleteCookie('_ga') 
            deleteCookie(`_ga_${GA_ID.substring(2)}`) 
        });
    }
 
</script>
 
<?php
// Includi header e navigazione
include  '../include/footer.php';
?>