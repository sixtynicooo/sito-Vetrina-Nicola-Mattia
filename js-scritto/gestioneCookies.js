const GA_ID = "G-QEWQ9GRZY5";

// dataLayer + gtag
window.dataLayer = window.dataLayer || [];
function gtag() {
  dataLayer.push(arguments);
}

// Cancella un cookie
function deleteCookie(name) {
  document.cookie =
    name + "=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";
}

// Imposta il consenso
function setConsent(accepted) {
  console.log(accepted);

  const consent = {
    functionality_storage: accepted ? "granted" : "denied",
    security_storage: accepted ? "granted" : "denied",
    ad_storage: accepted ? "granted" : "denied",
    analytics_storage: accepted ? "granted" : "denied",
    personalization_storage: accepted ? "granted" : "denied",
  };

  // Aggiorna Consent Mode
  gtag("consent", "update", consent);

  // Salva su localStorage
  localStorage.setItem("consentMode", JSON.stringify(consent));

  if (accepted) {
    // Carica Google Tag Manager / GA
    loadGTM();
  } else {
    // Forza reload per bloccare tracking già attivo
    location.reload();
  }
}

// Funzione per caricare GTM / GA
function loadGTM() {
  (function (w, d, s, l, id) {
    w[l] = w[l] || [];
    w[l].push({ "gtm.start": new Date().getTime(), event: "gtm.js" });

    const f = d.getElementsByTagName(s)[0];
    const j = d.createElement(s);
    j.async = true;
    j.src = "https://www.googletagmanager.com/gtm.js?id=" + id;
    f.parentNode.insertBefore(j, f);
  })(window, document, "script", "dataLayer", GA_ID);
}

// Init base GA
gtag("js", new Date());
gtag("config", GA_ID);
gtag("set", "anonymizeIp", true);

// Stato iniziale consenso
const savedConsent = localStorage.getItem("consentMode");

if (savedConsent === null) {
  // Nessun consenso salvato → tutto negato
  gtag("consent", "default", {
    ad_storage: "denied",
    analytics_storage: "denied",
    personalization_storage: "denied",
    functionality_storage: "denied",
    security_storage: "denied",
  });
} else {
  const consent = JSON.parse(savedConsent);

  if (consent.analytics_storage === "granted") {
    gtag("consent", "default", consent);
    loadGTM();
  }
}
