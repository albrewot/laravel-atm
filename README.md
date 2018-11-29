# AlbertT_ATM_Laravel

API de Laravel para ATM - Interfaces Web 2018 | Albert Torres

# DOCKER

En la Raiz del directorio `ATM_Laravel_API`  Correr comando en la consola `docker-compose up --build` esperar a que se descarguen y generen las imagenes de los servicios

Cuando terminen de generarse las imagenes saldra un mensaje como este en la consola: 

```app_1_1f5040954a31 | [29-Nov-2018 09:48:53] NOTICE: fpm is running, pid 1
app_1_1f5040954a31 | [29-Nov-2018 09:48:53] NOTICE: ready to handle connections
database_1_16cdb9c0c03c | LOG:  database system was shut down at 2018-11-29 09:48:35 UTC
database_1_16cdb9c0c03c | LOG:  MultiXact member wraparound protections are now enabled
database_1_16cdb9c0c03c | LOG:  database system is ready to accept connections
database_1_16cdb9c0c03c | LOG:  autovacuum launcher started
```

Con esto ya nuestros contenedores estan funcionando.

Si ya las imagenes estan generadas se puede correr en la consola `docker-compose up` y utilizara las imagenes que estan en la cache de docker

Luego abrir otra consola en la raiz de `ATM_Laravel_API` y correr los siguientes comandos 

`docker-compose exec app composer install` SIRVE PARA INSTALAR LAS DEPENDENCIAS DE LARAVEL

`docker-compose exec app php artisan migrate:fresh` SIRVE PARA MIGRAR LAS BASES DE DATOS A POSTGRES

`docker-compose exec app php artisan db:seed` SIRVE PARA CREAR 3 USUARIOS NUEVOS

Luego se puede acceder a la app desde `localhost:8080`
 