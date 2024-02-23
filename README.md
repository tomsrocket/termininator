# termininator
Website code for termininator.de


## Initiale Installation von Laravel
* See here: https://bootcamp.laravel.com/blade/installation
* Und dann hier: https://laravel.com/docs/5.2/quickstart

### Bootstrap Template installieren
https://laracoding.com/how-to-install-bootstrap-in-laravel-with-vite-tutorial/
```bash
    npm install bootstrap @popperjs/core sass
```

**Node.js aktualisieren**
```bash
    # wenn Meldungen kommen:
    # ... npm WARN EBADENGINE Unsupported engine
    # dann ist Dein node.js zu alt:
    node --version

    # Am einfachsten ist, node version manager (nvm) zu nutzen:
    nvm ls # Liste alle instalierten node.js Versionen auf
    nvm install 20.11.1 # bzw. vorher checken welches die aktuellste lts version ist

    # Neuste Node Version als default einstellen
    nvm use node
    nvm alias default node
```

### Laravel mit Bootstrap, Datatables und fertigem Backend-Demo
Scheint sogar noch gut maintained zu sein:
https://github.com/MGeurts/laravel-10-bootstrap-5-datatables

## Sqlite

**Datenbankverwaltung**
* "Das bessere PhpMyAdmin" soll wohl "Adminer" sein, das nicht mehr weiterentwickelt wird, weswegen es "AdminerEvo" gibt: https://github.com/adminerevo/adminerevo/
* Braucht man ab er nicht, man kann einfach die Kommandozeilentools nutzen (s.u.)
* Dokumentation zu SQLite Datentypen: https://www.sqlite.org/datatype3.html

**SQLite Kommandos**
```bash
  # create database
  php artisan migrate

  # if laravel throws errors
  sudo apt-get install php-sqlite3

  # inspect database from the command line:
  sqlite3 database/database.sqlite   # enter REPL
  .tables               # show tables
  .schema tasks         # show schema of table
  select * from tasks;  # show table content
```

# Verlauf

```bash

    php artisan make:migration create_events_table --create=events
    # .. dann die Datei anpassen database/migrations/...php..
    php artisan migrate
    # .. Datenbanktabelle wird angelegt..
    php artisan make:model Task
    # .. Model .php wird angelegt


```


