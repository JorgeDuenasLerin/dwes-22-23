# 1 Jorge (Profe)

## Ejercicio 1
Funciones: array_walk, array_map, array_filter, array_reduce

```
$personas = [
    ["Jorge", 1],
    ["Bea", 0],
    ["Paco", 1],
    ["Amparo", 0],
];
```

Utiliza alguna de las funciones para generar un array de cadenas indicando el nombre de la persona y cómo tratarle con formalidad. Si el valor entero detrás del nombre es un 1 Hay que poner "Señor <nombre>", si es 0 hay que poner "Señora <nombre>"

```
$resultado = ["Señor Jorge", "Señora Bea", "Señor Paco", "Señora Amparo"];
```

## Ejercicio 2

```
$comida = [
	     0 => ["Banana", 3, 56],
		1 => ["Chuleta", 1, 256]
		2 => ["Pan", 1, 90]
    ]
```

Utiliza la función map_reduce para calcular la cantidad de calorías de la comida anterior.

## Ejercicio 3

Con el array de personas anterior, utiliza el array_filter para sacar un listado de Hombre y otro listado de mujeres.




# 2 Javi ඞ, Anabel ඞ y Román ඞ🔪

Funciones:  array_intersect, array_search y array_replace.

Enunciado: Designa dos arrays con varios números. Algunos de ellos deberán coincidir entre ambas arrays.

A continuación:
 - Crea un tercer array que contenga los números en común de los primeros dos. Habrá posiciones nulas.
 - Crea un cuarto array con las posiciones que le falten al anterior y un número asignado a cada una, y júntalo con el anterior.
 - Busca el índice de un valor en el array final (por ejemplo el del valor 13)
 - Finalmente, imprime todos los arrays que has generado para ver los cambios.

```
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⣠⣴⣶⣿⣿⣷⣶⣄⣀⣀⠀⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⣰⣾⣿⣿⡿⢿⣿⣿⣿⣿⣿⣿⣿⣷⣦⡀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⢀⣾⣿⣿⡟⠁⣰⣿⣿⣿⡿⠿⠻⠿⣿⣿⣿⣿⣧⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⣾⣿⣿⠏⠀⣴⣿⣿⣿⠉⠀⠀⠀⠀⠀⠈⢻⣿⣿⣇⠀⠀⠀
⠀⠀⠀⠀⢀⣠⣼⣿⣿⡏⠀⢠⣿⣿⣿⠇⠀⠀⠀⠀⠀⠀⠀⠈⣿⣿⣿⡀⠀⠀
⠀⠀⠀⣰⣿⣿⣿⣿⣿⡇⠀⢸⣿⣿⣿⡀⠀⠀⠀⠀⠀⠀⠀⠀⣿⣿⣿⡇⠀⠀
⠀⠀⢰⣿⣿⡿⣿⣿⣿⡇⠀⠘⣿⣿⣿⣧⠀⠀⠀⠀⠀⠀⢀⣸⣿⣿⣿⠁⠀⠀
⠀⠀⣿⣿⣿⠁⣿⣿⡇⠀⠀⠻⣿⣿⣿⣷⣶⣶⣶⣶⣿⣿⣿⣿⠃⠀⠀⠀
⠀⢰⣿⣿⡇⠀⣿⣿⣿⠀⠀⠀⠀⠈⠻⣿⣿⣿⣿⣿⣿⣿⣿⣿⠟⠁⠀⠀⠀⠀
⠀⢸⣿⣿⡇⠀⣿⣿⣿⠀⠀⠀⠀⠀⠀⠀⠉⠛⠛⠛⠉⢉⣿⣿⠀⠀⠀⠀⠀⠀
⠀⢸⣿⣿⣇⠀⣿⣿⣿⠀⠀⠀⠀⠀⢀⣤⣤⣤⡀⠀⠀⢸⣿⣿⣿⣷⣦⠀⠀⠀
⠀⠀⢻⣿⣿⣶⣿⣿⣿⠀⠀⠀⠀⠀⠈⠻⣿⣿⣿⣦⡀⠀⠉⠉⠻⣿⣿⡇⠀⠀
⠀⠀⠀⠛⠿⣿⣿⣿⣿⣷⣤⡀⠀⠀⠀⠀⠈⠹⣿⣿⣇⣀⠀⣠⣾⣿⣿⡇⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠹⣿⣿⣿⣿⣦⣤⣤⣤⣤⣾⣿⣿⣿⣿⣿⣿⣿⣿⡟⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠉⠻⢿⣿⣿⣿⣿⣿⣿⠿⠋⠉⠛⠋⠉⠉⠁⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠈⠉⠉⠉⠁sus :0 amogus
gugel crum version powered by VSNote© kekw :v
```

 
# 3 Xing , Marcos (Revisado)

Utiliza la función ```print_r()``` para ver la evolución de cada array.

Funciones: array_walk, array_map, array_replace

Extra: https://www.php.net/manual/es/function.password-hash.php

```
$usuarios = [
	"jorge" => "1234",
	"amparo" => "admin",
	"mary" = > "",
]
```

Enunciado: Crea una array bidimesional que guarda nombre de usuario y contraseña de usuario en texto claro. array_walk ejecuta una funcion predefinida mostrando nombre de usuario y contraseña 

Enunciado: Utilizando las funciones de contraseñas y la función array_map. Genera un array nuevo con los usuarios y su contraseña en formato hash.

Enunciado: En base al ejercicio anterior cambia la función para que los usuarios sin contraseña tenga la contraseña "tmp2022"

Enunciado: Haz un filtrado de usuarios sin contraseña, utiliza array_replace para establecer en el array original ```$usuarios```la contraseña de los usuarios que no tenían.

# 4 Arturo Fernández

Funcion array_merge

```php
<?php
/*Dados estos arrays consigue que el resultado sea rojo, verde, naranja, azul usando la funcion array_merge*/
$a1=array("a"=>"rojo");
$a2=array("b"=>"añil", "c"=>"violeta");
$a3=array("d"=>"verde""f"=>"naranja");
$a4=array("i"=>"azul");
$a5=array("g"=>"azul", "h"=>"blanco");
?>
```

# 5. Mario, Jason, Daniel 

Con el siguiente array de productos, crea una lista de la compra en la que puedas seleccionar la cantidad de productos que quieres adquirir y te muestre el precio total por producto y el total de la factura:

```php
$productos = [
        "naranja" => 1.2,
        "manzana" => 1.5,
        "pera" => 1.8,
        "platano" => 0.8,
        "kiwi" => 0.75,
        "macarrones" => 0.5,
        "arroz" => 0.75,
        "salchichas" => 1,
        "patatas_fritas" => 3,
        "paninis" => 1.5,
        "leche_6_uds" => 5,
        "pizza_jamon_serrano" => 2.59,
        "helado_chocolate" => 2.99
    ];
```

Funciones: array_sum (opcional => array_push)
 - array_sum:
```php 
	ej: array_sum(array $array): int|float
	devuelve la suma de los valores de un array.
```
 -array_push:
```php
	ej: array_push(array &$array, mixed ...$values): int
	añade un elemento a la última posición del array
```

# 6. Alex y Dani 

Crea un array con 20 números aleatorios. A continuación, ordénalo, quítale la primera mitad de los números y pónselos al final. Muestra todos los pasos por pantalla.

Tienes que usar las siguientes funciones 

```php
array_slice — Extract a slice of the array
array_push — Push one or more elements onto the end of array
sort — Sorts array in place by values in ascending order.4
rand — Generate a random integer
```

# 7. Nacho.

Función: array_rand
```php
array_rand(array $array, int $num = 1): mixed
array: El array de entrada.
num: Especifica cuántas entradas deberían seleccionarse.
```

Dados dos arrays unidimensionales, uno de tareas[] y otro de personas[], asigna de manera aleatoria una tarea a cada persona.
Si ya le echas valor, crea un arraybidimensional de tareas_diarias[dia][tarea] y haz un organigrama donde asignes tareas a cada persona durante la semana

# 8. Doryan - Nataly - Antonio
Funciones (array_merge, array_replace_recursive, in_array)
- Array_merge() enunciado:
Tenemos que guardar los datos de 4 arrays de personas(cada persona es $personaN) los datos de cada persona son: nombre,apellido,telefono y correo.
Junta todos los array de personas en uno llamado $personas e imprimelos en una tabla.

- Array_replace_recursive: 
```php
	$personas=[ "25","22 ","24 ","29 ", "26","23","20","19","26","19","20","23"];
```
Con el array dado remplaza las edades menores de 23 por un array de colores cada vez que sea asi.
hUna vez cambiado los que tengan 26 años se cambiaran por otro array:

```php
$p26=["mayor","26"]
```

- Array_splice:
hacer una clase con el numero de clase y la zona. Luego en el medio del array coloca el numero de identificacion de 10 niños en una tabla.

- in_array:
Crea una función que reciba como 1º parámetro un array, como 2º parámetro un valor y como 3º parámetro un mensaje de error. La función debe usar la función in_array para comprobar si el array contiene el valor especificado y si es el caso devolver la posición del array en el que tiene el valor, de lo contrario debe devolver el mensaje de error especificado (incluído si el array está vacío).

# 9. Fausto Obama - Sergio - Henry:
    
## Funciones: 

 - in_array: Permite verificar si una cadena concreta se encuentra en la matriz pasada como parámetro junto al valor a buscar. Devuelve un dato de tipo Boolean.
   ```php Estructura: << in_array(mixed $needle, array $haystack, bool $strict = false): bool >>```
 - explode: Permite pasar una cadena o texto a una matriz según el delimitador que definamos. Devuelve un array.
   ```php Estructura: << explode(string $separator, string $string, int $limit = PHP_INT_MAX): array >>```
 - array_unique: Esta función permite revisar valores duplicados de una matriz y eliminarlos. Devuelve un array  con valores únicos.
   ```php Estructura: array_unique(array $array, int $flags = SORT_STRING): array```

## Enunciados:
    
a) Dado un texto o párrafo concreto:
    
$parrafo= <<<EOF
	En la década de 1920 Satyendra Nath Bose y Albert Einstein publican conjuntamente un artículo científico acerca de los fotones de luz y sus propiedades
	Bose describe ciertas reglas para determinar si dos fotones deberían considerarse idénticos o diferentes
	Esta se llama la condensado' de Bose - Einstein
	Einstein aplica estas reglas a los átomos preguntándose cómo se comportarían los átomos de un gas si se les aplicasen estas reglas
	EOF;

* Verificar si existe una palabra pasada por formulario en el parrafo, y mostrar alguna frase del párrafo que la contenga.

b) Dada una cadena o frase:
$frase="Mateo, Marcos, Lucas, Pedro, Max, Philip, Lucer, Robert, Maximiliano, Roberto, Pedro, Wenceslao, Teodoro, Mateo, Felipe, Petra, Lucer, Jose, Armando, Simón, Nicéforo, Jose, Felipe";

* Eliminar los valores duplicados que puedan existir en la cadena y mostrar la cadena original y sin duplicados.

# 10 Franco
Función: array_filter
En una lista de digitos del 1 al 20, filtrar y mostrar las posiciones de los números pares e impares.


# Bonus

Utiliza las funciones password_hash y password_verify para romper esta clave hash ```$2y$10$0GNiidCkeO/VBBHPH0DP6e5tgz6l/FIOxs1RcFloJrXuTYmmAsW72```.

Pista: solo se han utilizado letras minúsculas de la 'a' a 'z' y tiene un longitud de 4 caracteres

```
set_time_limit(0); // Si no php para a los 30 segundos
hash = '$2y$10$0GNiidCkeO/VBBHPH0DP6e5tgz6l/FIOxs1RcFloJrXuTYmmAsW72';
```

## BonusBonus

Para hacelerar el proceso podemos dividir la exploración de las posibilidades.

```
página1
a - aaa
m - zzz

página1
n - aaa
z - zzz
``` 

Para no escribir dos veces el mismo código podemos utilizar las variables de ```url``` para construir una url así:

```html
bruteforce.php?inicio=a&final=m
```

Ahora tienes dos opciones, crear un página ```mainbruteforce.php``` con varios enlaces y visitarlos en pestañas nuevas.

```html
<a href="bruteforce.php?inicio=a&final=m">
<a href="bruteforce.php?inicio=n&final=z">
```

O crear una página ```mainbruteforce_iframe.php``` que genere un ifram por cada subtarea.

```html
<iframe src="bruteforce.php?inicio=a&final=m">
<iframe src="bruteforce.php?inicio=n&final=z">
```

Si aún quieres explorar más esta práctica, haz que la página maestra (la que genera los enlaces o los iframes) tenga un parámetro indicando el número de divisiones que quieres hacer del espacio de claves.

NOTA: Para hacer esto en un proyecto real se utilizaría otra tecnología multiproceso o multi hilo.