Proyecto Grupal de Ingenieria de Software 3 - Materias de 6 Creditos

Clonar el repositorio.
Duplicar el archivo .env.example y renombrar la copia a .env y configurar el nombre de la base de datos a donde se conectara.
Correr en la terminal el comando composer install
Luego de la instalacion correr el comando php artisan migrate
Ir a la tabla "migrations" en la base de datos, en la migracion "create_foreign_key_for_role_user_table" cambiar el numero del campo "batch", volviendolo el numero mas alto entre todos los numeros en el campo "batch"
Correr en la terminal el comando php artisan migrate:rollback
Correr en la terminal el comando php artisan db:seed
Correr en la terminal el comando php artisan migrate
Y para levantar el servicio, correr el comando php artisan serve
En el URL que le da este comando podra ver el proyecto corriendo.
