# Documento SRS
-------

## Indice

1.  Introduzione
     1.  Obiettivo
     2.  Panoramica
2.  Descrizione generale
     1.  Funzionalità del prodotto
     2.  Caratteristiche utente
3.  Specifica dei requisiti
    1.  Requisiti di interfaccia esterna
        1. Interfaccia utente
    2.  Requisiti funzionali
        1. Acquisto biglietto
           1. Input
           2. Elaborazione dati
           3. Output
        2. Acquisto biglietto evento
           1. Input
           2. Elaborazione dati
           3. Output
        3. Sconto visitatori
           1. Input
           2. Elaborazione dati
           3. Output
        4. Acquisto di servizi e/o prodotti aggiuntivi
           1. Input
           2. Elaborazione dati
           3. Output
     3. Requisiti di prestazione
     4. Attributi del sistema software
        1. Multiutenza
        2. Sicurezza
     5. Altri requisiti
        1. Database 
4. Dizionario dei dati


# Documento SRS
1. ## Introduzione
    1. ### Obiettivo: 
        1. L'obiettivo del nostro lavoro è quello di creare una bigglietteria che sia in grado di far prenotare ad un utente biglietti per visite o eventi e abbinare ad essi degli accessori
    2. ### Panoramica
        1. La restante parte di questo documento fornisce una descrizione dettagliata delle funzionalità richieste del software **Museo** secondo gli obbiettivi espressi nel punto *1*.
2. ## Descrizione Generale
    1. ### Panoramica del progetto:
        1. Il prodotto software deve essere in grado gestire le richieste dei clineti, per richieste si intende l'acquisto di biglietti per esposizioni o per il museo
    2. ### Caratteristiche utente:
        1. Un utente registrato nel prodotto software deve essere in grado di poter effetture prenotazioni a mostre o esposizioni, inoltre deve poter esseree in grado di abbinare al biglietto qualsivoglia opzione.
3. ## Specifica dei Requisiti
   1. ### Requisiti di interfaccia esterna
      1. #### Interfaccia utente
          1. La Web Application deve fornire una interfaccia amichevole che permetta di prenotare eventi o biglietti.
       2. #### Requisiti funzionali
           1. #### Acquisto biglietto
              1. **Input**
                 1. Tramite l'applicazione web l'utente sceglierà di comprare/prenotare il biglietto per una mostra in una delle date disponibili. 
              2. **Elaborazione dati**
                 1. Tramite l'uso del linguaggio PHP saremo in grado di controllare la disponibilità del biglietto e salvare la prenotazione dell'utente nel nostro database.
              3. **Output**
                 1. Dopo la prenotazione l'utente verrà reindirizzato in un'altra pagina dove gli verrà comunicata la buona riuscta della prenotazione nel giorno desiderato.
           2. #### Acquisto biglietto evento
              1. **Input**
                 1. Tramite l'applicazione web l'utente sceglierà di prenotare il biglietto per un'evento in una delle date disponibili. 
              2. Elaborazione dati
                 1. Usando PHP bisognerà inizialmente controllare se l'evento è ancora disponibile, successivamente si verificherà la disponibilità dei posti(ovvero se ci sono ancora posti disponibili per l'evento).
              3. **Output**
                 1.  Dopo la prenotazione l'utente verrà reindirizzato in un'altra pagina dove gli verrà comunicata la buona riuscta della prenotazione nel giorno desiderato.
           3. #### Sconto visitatori
              1. **Input**
                 1. Nel processo di login l'utente potrà scegliere la categoria di appartenenza .
              2. Elaborazione dati
                 1. All'acquisto di un bigliotto l'applicazione, dopo aver effetuato un controllo sulla categoria dell'utente, applicherà automaticamente lo sconto.
              3. **Output**
                 1. Il prezzo che il l'utente vedrà a schermo, quando andrà ad acquistare il biglietto sarà modificato.
           4. #### Acquisto di servizi e/o prodotti aggiuntivi
              1. **Input**
                 1. Dopo la riuscita prenotazione l'utenter all'utente sarà chiesto tramite un pagina web  sè vorrà abbianare al biglietto dei servizi o prodotti selezionabili tramite check-box. 
              2. **Elaborazione dati**
                 1. Dopo aver selezionato tutte le comodità neccessarie e aver inviato il modulo la nostra applicazzione inserira nel database tutti i servizi associati al biglietto.
              3. **Output**
                 1. L'utente sarà reindirizzato in un'altra pagina con la conferma del corretto inserimento dei prodotti.
        3. ### Requisiti di Prestazione
           1. L'applicazione web deve avere almeno dei minimi requisiti di prestazione, ad esempio deve essere in grado di elaborare i dati e reindirizzare correttamente l'utente in un tempo minore di 3 secondi.
        4. ### Attributi del sistema software
           1. **Multiutenza**
              1. L'applicazione Web deve essere in grado di supportare molteplici utenti in contemporanea
           2. **Sicurezza**
              1. L'applicazione Web deve seguire i criteri di sicurezza studiati fin'ora, quindi bisognerebbe prendere delle contromisure per far in modo che script non siano eseguiti nelle nostrew form, inoltre bisognerebbe anche difendersi dagli attacchi di tipo SQLi (iniezzioni di codice SQL malevolo con il solo scopo di rovinare il nostro database).
        5. ### Altri Requisiti
           1. **Database**
              1. Il database deve essere di buona qualità ossia deve essere costruito su un modello logico normalizzato (ossia privo di rindondanze)
4. ## Dizionario dei dati
   1. ### Dati utente
      1. ### Dati utente
         * codice utente
         * e-mail
         * nome
         * cognome
         * password
         * categoria
      2. ### Dati biglietto
         * codice identificativo
         * titolo
         * tariffa
         * data inizio
         * data fine (in caso di visita non valorizzata)
      3. ### Dati categoria
         * codice
         * descrizion
         * tipo di documento da esibire
         * percentuale sconto
      4. ### Dati accessori
         * codice
         * descrizione
         * prezzo














        
