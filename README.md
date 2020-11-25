MODIFICAR 'config/filesystems.php'

	REEMPLAZAR:	'default' => env('FILESYSTEM_DRIVER', 'local'),
    	CON:		'default' => env('FILESYSTEM_DRIVER', 'public'),

RUN:

``composer install``

CREAR ARCHIVO .env y copiar contenido de .env.example

Ajustar base datos y correr el comando para crear la key:

``php artisan key:generate``

``php artisan migrate``

EJECUTAR EN EL DIRECTORIO DEL PROYECTO

	'php artisan storage:link' 
	
	
