# PHP Badwords

Creare un form PHP che permetta di inviare due campi: un paragrafo ed una parola da censurare.
Gestire il tutto con due file diversi.

Il primo file dovrà permettere all’utente di inserire i dati e inviare la richiesta al server.

Il secondo file riceverà la richiesta ed eseguirà queste operazioni:

- stampare a schermo il paragrafo e la sua lunghezza
- stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi (\*\*\*) tutte le occorrenze della parola da censurare.

## Svolgimento

1. Creare un primo file con il form contenente i due campi di input richiesti.
2. Nel tag form aggiungere 'post' come method e la pagina di reindirizzamento in action.
3. Ad ogni input, aggiungere l'attributo "name".
4. Creare un secondo file php che riceve gli input e stampa a schermo i dati richiesti.
