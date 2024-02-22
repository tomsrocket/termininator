# termininator
Website code for termininator.de


## Initiale Installation von Laravel
See here: https://bootcamp.laravel.com/blade/installation

### Bootstrap Template installieren
https://www.cloudways.com/blog/laravel-bootstrap-template-integration/

### Laravel mit Bootstrap, Datatables und fertigem Backend-Demo
Scheint sogar noch gut maintained zu sein:
https://github.com/MGeurts/laravel-10-bootstrap-5-datatables

## Sqlite
"Das bessere PhpMyAdmin" soll wohl "Adminer" sein, das nicht mehr weiterentwickelt wird, weswegen es "AdminerEvo" gibt:
https://github.com/adminerevo/adminerevo/

**SQLite Kommandos**
```bash
  # create database
  php artisan migrate

  # if laravel throws errors
  sudo apt-get install php-sqlite3

  # inspect database from the command line:
  sqlite database/database.sqlite   # enter REPL
  .tables               # show tables
  .schema tasks         # show schema of table
  select * from tasks;  # show table content
```





