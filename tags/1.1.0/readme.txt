=== WP MailUp ===
Contributors: mailup
Donate link: http://wordpress.org

Tags: mailup, newsletter, email, smtp, bulk, sms, send, list, subscribe, form, marketing, widget, plugin, feedburner, subscription, email marketing, email newsletter form, email widget, emails, newsletter form, newsletter plugin, newsletter signup, newsletter widget, newsletters, signup, widget, contact form, checkbox, sign up, sign-up, subscription form, subscribe form, registration form, sms signup, subscribe widget, subscribers, contacts, iscrizione 
Requires at least: 3.0
Tested up to: 3.3.1
Stable tag: 1.1.0

WP MailUp is a signup plugin that can be used to subscribe to newsletter that websites owner periodically delivers using MailUp. 

== Description ==

By means of this plugin subscribers provide their personal data in order to be added to a distribution list, which is managed by website owner through MailUp. Only website owner can access to subscribers list.  

WP MailUp allows enabling double opt-in (i.e. subscriber receives an email with a confirmation link that has to be clicked) to avoid spam traps or wrong emails.
Unsubscription from distribution list can be done by pressing the unsubscribe link that is placed in the footer of each received newsletter.
Since MailUp can send also text messages (SMS), you can ask for the mobile number too. If you prefer to use sign-up with a Social Account, please refer to MailUp documentation (it's a paid service).
  
## __How to use this plugin__

1. Activate a MailUp console, free trial available: [English](http://www.mailup.com/mailup-free-trial.asp "Free trial MailUp") / [Italiano](http://www.mailup.it/p/pc/campagne-dem-prova-gratuita-d44.htm "Prova gratuita MailUp")  
2. Configure more Lists environments if this plugin is used in different wordpress web sites.  
3. Install this plugin  
4. Customize confirmation request email, welcome message and messages web page (if needed) in each List environment.  
4. Start registering subscribes and monitor statistics on MailUp Statistics menu.  
5. Create and send SMS (text messages) or Email newsletters to you subscribers.  
6. You may also use NEW MESSAGE FROM RSS in order to create a newsletter starting from your RSS feeds. Just select posts and choose the template and priority. You will be able to edit the newsletter after it's automatically created, without any copy and paste.  
7. MailUp automatically manages unsubscriptions and let you monitor user level detailed statistics about opens, clicks, social sharings  
  

  

## __About MailUp__

MailUp is a service created in 2002, fully web-based, which allows you to send e-mail, newsletters, sms, fax, letter paper and pre-recorded voice messages. The solution is specifically designed for the professional management and sending high volumes of messages, with bandwidth management, deliverability consulting and monitoring.  
The e-mails are sent from servers MailUp, this ensures high rates of deliverability.  MailUp is used by thousand of clients, including Valentino, Pirelli, Amnesty International, Peugeot.  
  
MailUp is a subscription service with a flat fee and unlimited messages, lists and recipients. You can cancel at any time, and there is an initial, 30-day free trial. Only sending bandwidth is limited by the subscription fee.  
  
Included in MailUp (Marketing+ option) also a sophisticated feature that allows you to automatically send messages based when a certain event occurs. For example, you could automatically send a special discount coupon on a person's birthday. The feature includes:  
  
*	create unlimited event-based messages  
*	define when they are active  
*	define when how often they will be sent (e.g. daily, monthly, annually, one-time)  
*	define which events trigger the sending of the message by combining multiple filters (e.g. send second message if first message was not opened; or send a welcome message N days after subscription)  

*	send the event-based message to a specific group or to any subscriber  
*	send triggered email messages based on recipient behavior (open, click, bounce, time, subscription)  
*	send triggered sms messages based on email and ecommerce data  

  
For example, you could store in a custom field the date of the last order placed on an e-commerce store, then send a customer satisfaction survey message N days after the order has been placed.  


== Installation ==

1. Download plugin from Wordpress Directory
2. Copy it to /wp-content/plugins/ folder
3. Activate the plugin through the Plugins page (wp-admin/plugins.php)
4. Add the widget to your sidebar on the Widgets page (wp-admin/widgets.php)
5. Configure "WP MailUp" plugin through [admin page](http://assistenza.mailup.it/KB/a371/wordpress-plugin-configuring-the-mailup-plugin-for-wordpress.aspx?trans=1). Please use "?" buttoms to obtain help when something is not clear. No file editing required.
6. Open MailUp console and register IP address of your server (go to "Manage->Web service" and then select "frontend" in the dropdown menu to insert IP address of your server. More than one address could be registered)

== Frequently Asked Questions ==

= Do I have to be a MailUp customer to use it? =

You must have activated a MailUp console (a regular one or a 30 days trial) and then specify console URL in plugin settings. On MailUp you must enable requests coming from the server that hosts your Wordpress site (go to "Manage->Web service" and then select "frontend" in the dropdown menu to insert IP address of your server. More than one address could be registered).

= How can I configure my plugin? =

Go to admin panel, press "Settings" and then select "WP MailUp". Fill in or check all the fields using help buttons if something is not clear


= How can I check if my plugin is working? =

Just fill in required fields and press SEND button to subscribe. Specified contact will be added in the MailUp distribution list specified in system settings

= How often do I have to change configuration? =

In most of cases configuration is set once and no more changes are required.  

= I would change plugin appearance: how can I do? =

You can select between four available styles (CSS), if no one matches with your need you can edit one of existing CSS files (style1.css, ..., style4.css). Please note that editing is allowed only for users who have read/write access to those files.

= May I have a one-click sign-up using a social account (ie Facebook) ? =

Yes, MailUp provides a simple integration with all the most used social networks. You could insert into your web site a simple banner "Click here to subscribe to our newsletter using your Facebook account". This features is a standard one and you don't need to install any plugin, just activate a MailUp account.

= Is it possible to translate this plugin? =
Yes, just edit each string within the settings panel. No need to edit any file. MailUp supports all the charsets.

= Why using this plugin and not other services, like feedburner? =

MailUp allows you to take control on subscribers (view, import, edit, delete, export) and on messages (define scheduling, content and recipients).

= Can I disable the plugin? =

Yes, just delete reference to console host.


= Configuration seems to be correct, but plugin always return a "generic error" message =

Starting from v.7.4, MailUp introduces a security restriction that allows only calls from servers whose IP address is registered on MailUp console (go to "Manage->Web service" and then select "frontend" in the dropdown menu to start registering IP). More than one address could be registered. Even if it is not recommended, you can disable this restriction by deselecting "IP address check enabled" option


== Screenshots ==

1. Admin page
2. Subscriber page
3. Select option to disable security check (not recommended)


== Changelog ==

= 1.1.0 =
* Extended instructions to explain how to register on MailUp the IP address of the server that hosts Wordpress site (mandatory). Minor graphical changes to better fit with most of Wordpress themes.

= 1.0.0 =
* first issue. Developed by themexgroup (July 2011)


== Italiano ==

L'integrazione realizzata da MailUp per WordPress consente di inserire all'interno del proprio sito o blog un form a cui gli utenti possono facilmente iscriversi per ricevere una vera e propria newsletter dal proprio sito o blog preferito. [Vedi la presentazione in pdf](http://www.mailup.it/p/pc/risorse/Integrazione-WordPress.pdf "MailUp e Wordpress")).

Grazie a questo plugin d'iscrizione i dati personali degli iscritti vengono aggiunti alla lista distribuzione, che e' gestita dal proprietario del sito attraverso MailUp. Solo il proprietario del sito puo' accedere alla lista degli iscritti.
WP MailUp consente di attivare un doppio opt-in (l'iscritto riceve un'email con un link di conferma che dev'essere cliccato) per evitare spamtrap ed indirizzi email incorretti.  
La cancellazione dalla lista distribuzione puo' avvenire attraverso il link di disiscrizione apposito che si trova nel pie' di pagina di ogni newsletter ricevuta.  
Dal momento che MailUp puo' inviare anche messaggi di testo (SMS), si puo' richiedere anche il numero di telefono nel form di iscrizione, obbligatorio o facoltativo.  
Se si preferisce utilizzare la modalita' d'iscrizione attraverso l'account social, cioe' permettere all'utente di iscriversi con un solo click (es. Iscriviti con Facebook) senza form da compilare, si prega di far riferimento alla documentazione MailUp (e' un servizio a pagamento).
  
## __Come utilizzare questo plugin__

1. Attivare una console MailUp, e' disponibile la versione [prova gratuita](http://www.mailup.it/p/pc/campagne-dem-prova-gratuita-d44.htm "Prova gratuita MailUp")  
2. Configurare piu' ambienti (cioe' Liste) se il plugin e' utilizzato in diversi siti wordpress.  
3. Installare questo plugin (v. Installazione)
4. Personalizzare l'email di richiesta conferma, messaggio di benvenuto e pagina messaggi (se necessario) in ogni ambiente (Lista).  
4. Fare un test, iscrivendo un proprio nominativo. Fino a che l'indirizzo non e' confermato, rimane nell'Elenco Sospesi.
5. Iniziare la registrazione delle sottoscrizioni e monitorare le statistiche attraverso il menu Statistiche su MailUp.  
6. Creare e inviare SMS (messaggi di testo) o email/newsletters ai propri iscritti.  
7. E' possibile anche utilizzare la funzione "NUOVO MESSAGGIO DA  RSS" per creare newsletter partendo dai propri RSS feed. Bastera' selezionare i post desiderati, scegliere il template e ordinare le notizie. Sara' possibile modificare la newsletter dopo che verra' automaticamente creata, senza alcun copia e incolla.  
8. MailUp gestisce automaticamente le disiscrizioni e permette di monitorare l'attivita' dell'utente, attraverso statistiche relative ad aperture, clicks e condivisione sui social.  
  

  

## __Riguardo MailUp__

MailUp e' un servizio creato 2002, completamente web-based, che permette l'invio di email, newsletters, sms, fax, lettere cartacee e messaggi vocali registrati. E' una soluzione appositamente progettata per la gestione professionale e l'invio di elevati volumi di messaggi, con garanzia sui tempi di recapito e servizi di consulenza sulla deliverability e l'html.  
Le email vengono inviate dai servers MailUp, cio' garantisce alti tassi di recapito.  MailUp e' utilizzato da migliaia di clienti, tra cui Valentino, Pirelli, Amnesty International, Peugeot.  
  
MailUp e' un servizio in abbonamento con tariffa flat e messaggi email, liste e destinatari illimitati. E' possibile disdire in qualunque momento e c'e' la possibilita' di un iniziale prova gratuita di 30 giorni. Solo la velocita' d'invio e' limitata, in relazione al valore del canonedi abbonamento.  
  
MailUp include l'opzione [Marketing+](http://www.mailup.it/p/pc/profilazione-utenti-p216.htm "profilazione utenti"), una funzione sofisticata che consente di inviare messaggi automatici al verificarsi di determinate circostanze. Ad esempio, e' possibile inviare automaticamente un coupon di sconto speciale il giorno del compleanno di una persona. La funzione include:  
  
*	creazione illimitata di particolari messaggi per specifici eventi   
*	definire quando i messaggi vengono attivati  
*	definire la frequenza con la quale i messaggi verranno inviati(es. giornalmente, mensilmente, annualmente, una sola volta)  
*	definire quali eventi attivano l'invio del messaggio combinando piu' filtri (es. inviare un secondo messaggio se il primo messaggio non e' stato aperto; oppure inviare un messaggio di benvenuto N giorni dopo l'iscrizione)  

*	inviare lo specifico messaggio ad un gruppo specifico o ad un qualsiasi iscritto  
*	inviare un messaggio automatico in base al comportamento del destinatario (apertura, click, rimbalzo, tempo, iscrizione)  
*	inviare un sms automatico sulla base di attivita' attraverso l'email o l'inserimento di dati sull'ecommerce   

  
Per esempio, e' possibile memorizzare in un campo personalizzato la data dell'ultimo ordine fatto attraverso l' e-commerce, quindi inviare un messaggio di indagine di soddisfazione al cliente N giorni dopo che l'ordine e' stato evaso.  


## __Installazione__

1. Scaricare il plugin dalla Directory Worpress
2. Copiarlo nella cartella /wp-content/plugins/ 
3. Attivare il plugin attraverso la pagina Plugins(wp-admin/plugins.php)
4. Aggiungere il  widget alla barra laterale sulla pagina Widgets (wp-admin/widgets.php)
5. Configurare il plugin "WP MailUp" attraverso la pagina di amministrazione. Utilizzare il bottone "?" per ottenere maggiori informazioni quando qualcosa non e' chiaro. Nessun file richiede modifiche.
6. Accedere alla console MailUp e registrare l'indirizzo del server che ospita il sito Wordpress (Andare su "Gestione->Web service", selezionare poi "frontend" e infine inserire l'indirizzo IP del server. E' possibile registrare piu' di un server)


## __Domande Frequenti__

= Devo esser cliente MailUp per utilizzarlo? =

E' necessario aver attivato una console MailUp (normale o in prova gratuita 30 giorni) e quindi specificare l'URL della console nelle impostazioni plugin. Sulla console MailUp deve essere registrato l'indirizzo IP del server che ospita il sito Wordpress (v. Installazione) 

= Come configurare il mio plugin? =

Attraverso il pannello di controllo, cliccare su "Settings" e quindi selezionare "WP MailUp". Compilare o controllare i campi richiesti usando i pulsanti d'aiuto se qualcosa non e' chiaro.

= Come posso controllare se il mio plugin funziona? =

Basta compilare i campi richiesti e premere INVIO per iscriversi. Il contatto indicato sara' aggiunto nella lista di distribuzione MailUp specificata nelle impostazioni di sistema (l'utente figurera' nei "Sospesi" e una volta che conferma cliccando l'iscrizione cliccando su link di verifica ricevuto via email, viene spostato negli "Iscritti").  

= Ogni quanto devo cambiare la configurazione? =

Nella maggior parte dei casi la configurazione una volta impostata non necessita ulteriori modifiche.  

= Vorrei cambiare l'aspetto del plugin: come posso fare? =

E' possibile scegliere tra quattro stili disponibili(CSS), se nessuno di questi e' adatto, si potra' modificare uno dei file CSS esistenti (style1.css, ..., style4.css). Si prega di notare che la modifica e' permessa solo agli utenti che hanno accesso alla lettura/scrittura di questi files.

= Posso avere l'iscrizione alla newsletter tramite un solo click, usando un account social o un OpenID (es Facebook) ? =

Si', MailUp fornisce una semplice integrazione con i canali social piu' diffusi. E' possibile inserire sul proprio sito un semplice banner "Clicca qui per iscriverti alla nostra newsletter utilizzando il tuo account Facebook". Questa e' una funzione standard che non necessita l'installazione di plugin, ma basta attivare un account MailUp.

= E' possibile tradurre questo plugin? =
si', e' sufficiente modificare ogni stringa nel pannello delle impostazioni (Settings) in Wordpress. Non c'e' bisogno di modificare alcun file. MailUp supporta tutti i charset, compreso il cinese e l'arabo.

= Perche' utilizzare questo plugin e non un altro servizio, come feedburner? =

MailUp permette di mantenere il controllo degli iscritti (visualizzazione, importazione, modifica, cancellazione, esportazione) e sui messaggi (definire la programmazione, i contenuti e i destinatari).

= Posso disabilitare il plugin? =

Si', basta cancellare il riferimento dalla console.

= La configurazione sembra corretta, ma il plugin continua a restituire un messaggio del tipo "generic error" =

A partire dalla versione 7.4 MailUp introduce restrizioni di sicurezza che consentono solo chiamate dai server il cui indirizzo IP e' registrato sulla console MailUp ("Gestione->Web service" e poi selezionare "frontend" nel menu a tendina per iniziare la registrazione dell'indirizzo IP. E' possibile registrare piu' di un'indirizzo IP. Anche se sconsigliato, e' possibile disabilitare questa restrizione deselezionando l'opzione "Controllo IP abilitato"


== Upgrade Notice ==

= 1.0.0 =
* first issue.

= 1.1.0 =
* Extended instructions to explain how to register on MailUp the IP address of the server that hosts Wordpress site (mandatory). Minor graphical changes to better fit with most of Wordpress themes.
  



