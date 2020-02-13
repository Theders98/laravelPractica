

## Primer paso

Cambiar la conexion a la BD en el .env


## Segundo paso

Hacer controladores y modelos con:
** php artisan make:controller (nombreControlador) -r -m  (nombreModelo) **


## Tercer paso

Poner los recursos en routes/api


## Cuarto paso

Instalar AUTH


## Cambiar nombre de la tabla de la base de datos

En el modelo de usuarios agregas 
** protected $table = "(nombre de la tabla)" **


## Añadir el middleware 

Primero crearemos un middleware ** php artisan make:middleware ** se copia  de RoleAuth.php
Despues se añade en kernel -> ** 'auth.role' => \App\Http\Middleware\RoleAuth::class, **
usamos ** php artisan vendor:publish **

Para referirnos al middleware usamos el ** ('auth.role') **


## Rutas personalizadas

Cuidado con el nombre de las rutas, no se pueden poner si pensar, hay que intentar no pisar otras


## Si pide que se pueda iniciar tanto con email como con nombre podemos usar esto(NO ESTA PROBADO, FALTA INFO)

isset($request['email'])?'email':'nickName'


## Agregar middleware al controller

Acuerdate coño, es en el constructor, como puedes tener tan mala memoria, puto retrasado


## cambiar nombre de el parametro passwords

Pues ni zorra
Sospecho que se hará igual que la tabla, es decir cambiandolo en la BD y en el modelo de User
