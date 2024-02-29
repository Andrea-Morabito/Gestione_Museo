# .htaccess conf for router
### Bisogna mettere questo file nella cartella con path /

RewriteEngine On \
RewriteBase / \
RewriteCond %{REQUEST_FILENAME} !-d
RewriteCond %{REQUEST_FILENAME} !-f
RewriteRule ^(.*)$ index.php?uri=1

----------------
Questo file servirà nel nostro caso a reindirizzare il traffico verso il file index.php nella path "/", nel nostro caso il file index.php sarà il router che servirà ad integrale il patter MVC ( Model View Controller )

## Differenza tra Altervista e xampp

La differenza è sottile, su xampp visto che vi sarà una cartella chiamata "progettoUDA" la root - "/" sarà la cartella "htdocs" quindi il file .htaccess andrà messo lì, mentre su **Altervista** visto che la nostra root - "/" - avrà direttamente tutti i file e le cartelle basterà spostare i file di "progettoUDA" in **Altervista** e aggiungerci *.htaccess*.

P.S: Nel caso di **xampp** nella cartella "htdocs" dovremmo creare un file chiamatro **index.php** che richieda ( **require**) il file **index.php** nella cartella **progettoUDA** altrimenti non funziona niente.