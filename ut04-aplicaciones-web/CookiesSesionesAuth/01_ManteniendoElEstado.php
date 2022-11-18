Mantenimiento del estado
========================

Entendiendo el protocolo
************************
Tal y como hemos visto durante el curso, entender la tecnología con la que
trabajamos es fundamental para saber qué estamos haciendo cuando programamos.

La web ha cambiado mucho desde que se lanzó en los 90 pero el protocolo HTTP
apenas ha cambiado, salvo por pequeñas revisiones de optimización.

El protocolo HTTP es un protocolo sin estado, lo que quiere decir que si yo
visito dos direcciones web sucesivas el servidor no tiene manera de saber
que vienen del mismo cliente.

¿Es esto un problema?
¿Cómo implementamos una autentificación?

ANÁLISIS DE UNA PETICIÓN HTTP
ANÁLISIS DE UNA SUPUESTA AUTENTIFICACIÓN CON HTTP


Herramientas para mantener estado
*********************************
Para poder reconocer a un cliente que ha realizado una petición antes debemos
tener alguna pieza de información que le identifique.

Opciones: cookies y sesiones

Las cookies son una pieza de información (establecida a través de una cabecera)
que se establece en el cliente y este reenviará en cada petición. Cuantas más
cookies tenga un cliente más información se manda en cada petición HTTP.

Leer página de la documentación php para establecer una cookie.
Analiza cada uno de los parámetros.
http://php.net/manual/es/function.setcookie.php


Instala en un navegador el plugin de análisis de cookies.


Tarea 1
Utilizando netcat vamos a establecer una cookie al cliente para verificar
cómo se manda esta información.

Edita el fichero HOST y haz que
www.superprueba.com apunte a 127.0.0.1
www.cookiemonster.es apunte a 127.0.0.1
www.antetodoseguridad.es apunte a 127.0.0.1

Debes verificar que...
.- Las cookies se mandan por dominio y sección de la web.
.- Las cookies solo son accesibles en la siguiente petición

Visita el servidor simulado con un cliente que tiene una cookie
Visita el servidor simulado con un cliente que no tiene una cookie
nc -l 8080


nc -C 127.0.0.1 80
GET / HTTP/1.1


Tarea 2
Realiza una web con un texto informativo sobre algún tema (info.php) y una
 página de preferencias (pref.php)
En esta web se podrá elegir el color de fondo favorito entre 4 tonos distintos.
Si el usuario vuelve a visitar la página esta debe mantener su preferencia
durante una semana.

¿Cómo renovarías esta preferencia de tal forma que si no lo visita en 1 semana
vuelva a la de por defecto pero que si la visita de nuevo se extienda por una
semana más?


Tarea 3
Sobre la página anterior realiza un aviso flotante en la sección inferior en la
que se muestre un aviso de la COOKIES (Ley Europea). Esta cookie caducará a la
semana y seguirá el mismo protocolo de renoviación.


Tarea 4
Realiza una página que muestre el lista de cookies y permita establecer y borrar
cookies con un tiempo en segundos de duración.

Form de crear cookie:
nombre, valor, expira, ruta, dominio, secura (checkbox) y httponly (checkbox)


Tarea 5
Crea una página que si no existe la cookie en la petición establezca una con un
valor numérico. Luego irá incrementando el valor de la cookie en 1 y mostrará
el valor de la cookie recibida.
¿El valor de la cookie establecida es el mismo valor de la cookie mandada?


Tarea 6
Especificando ruta y dominio:
Comprueba qué ocurre si le estableces un path a la cookie que no existe...

Crea una entrada en el archivo hosts para que tanto www.midominiofalso123.com,
como midominiofalso123.com apunten a la dirección 127.0.0.1
Establece una cookie en el dominio
www.midominiofalso123.com -> nombre cookie_con_www valor 123
midominiofalso123.com -> nombre cookie_sin_www valor 321
www.meneame.net -> nombre es_posible valor no


Próximamente: La cookie que quiere ser sesión.

** NO HACER **
** NO HACER **
** NO HACER **
Tarea 7: Login malamente
NO HACER MALAMENTE. LUEGO SE LÍAN. HACER LOGIN CON DB Y SESIONES
NOTA: Este login está muy mal implementado, solo se hace así para entender la
problemática.
Puedes basarte en el login con base de datos.

Crea un login que confíe en una cookie de usuario para determinar si el usuario
está logueado. La cookie se llamará "usuario" y tendrá el nombre de usuario
que ha iniciado sesión.

Crea una sección con información privada y si el usuario no está logueado (no
existe la cookie) será redirigido al área de login.

¿Qué problema hay al confiar en la información del usuario?

Bonus: Crea un botón para salir dentro del área privada.
** NO HACER **
** NO HACER **
** NO HACER **
