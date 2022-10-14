# Contenidos

- Estructuras de control:
  - Alternativas
  - Repetitivas
  - Salida de HTML
- Funciones
- ¿Cómo estructurar un proyecto?
- [Objetos](README-Objetos.md)
- Formularios

## Ejercicios de calentamiento

### Decisiones

01. Crea una página web que genere 3 números aleatorios "mt_rand()", con sentencias
condicionales los asigna a tres variables: mayor, mediano y pequeño. Después
los mostrará en h1, h2 y h3 respectivamente.

### Bucles

02. Crea una página web que recorra una variable de tipo cadena accediendo a cada letra y escriba cada una en un h4. Usa for

03. Crea una web similar a la anterior pero que pare al finalizar la cadena o al encontrar el carácter 'a', tanto minúscula como mayúscula. Usa While

04. Crea una página web que escriba span con números aleatorios entre 0 y 100, el proceso parará cuando el número acabe en 17 o sea primo.

05. Crea una función que escriba lo parámetros recibidos por la URL en una tabla.

```index.php?valor=estoy&act=recorriendo&un=array```

| Table | Valor |
|-------|-------|
| valor | estoy |
|  act  | recorriendo      |
|   un  | array |

## Funciones

06. [15 min]
Crea una función que sume todos los números entre dos parámetros dados: inicio y fin.
PRUEBAS:
Escribe una web que llame a la función 10 veces con números aleatorios entre
0 y 20.


07. [15 min]
Crea una función que concatene todas las cadenas pasadas como parámetro utilizando el primer parámetro como seprador.
PRUEBAS:
Escribe una web que llame a la función 3 veces con cadenas.

```
echo concatena(" ", "Hola", "mundo", "!"); // Hola mundo !
echo concatena(".", "Esto", "son", "varias", "cadenas", "puntos"); //Esto.son.varias.cadenas.puntos
```

08. [25 min]
Crea una función que genere un array asociativo que contenga información del tipo de los parámetros.
La función irá descubriendo los tipos, comenzará con un array vacío. Cada vez que vea un tipo creará un clave con valor 1, si el tipo ya existía incrementará su valor en 1.

```
Funciones: gettype, array_key_exists o in_array o isset
```

```
$analisis = analizParámetros(3, "h", 'hola', [1,2,3], [1], "h");
print_r($analisis)
```

Imprime:
```
[
  'int' => 1,
  'string' => 3,
  'array' => 2
]
```



09. [10 min]

Crea una función que reciba dos variables cualesquiera e intercambie su valor. Las variables tendrá ese valor fuera de la función.
PRUEBA:
Crea una web en la que se muestre cómo se comporta esta función con variables
de distinto tipo.


10. [10 min]

Crea una función que genera un array aleatorio con parámetros variables
- Por defecto generará 10 valores entre 0 y 10
- Puedes especificar el número de valores como primer parámetro,
- Puedes especificar el valor máximo como segundo parámetro
- o Puedes especificar número de valores, máximo y mínimo


```
aleatorio(); // [n,n,n,n,n,n,n,n,n,n]
aleatorio(5) // [n,n,n,n,n]
aleatorio(5,50)
aleatorio(5,50,-50)
```


11. [30 min]

Crea una función que reciba un array con distintos tipos de valores de tal forma
que:
- Si son enteros: el primer entero sea elevado al cuadrado, el segundo entero sea elevado al cubo y así sucesivamente con los números enteros.
- Si el valor es un double lo convertirá a su valor negativo (si es negativo al positivo)
- Si es una cadena cambiará las mayúsuclas por minúsculas y viceversa.
- En caso de no estar entre estos valores lo dejará sin modificar.



12. [25 min]

Crea una función que reciba un array con información de un usuario y escriba un formulario relleno.
En este caso solo utiliza campos de texto o enteros

NOTA: Utiliza las funciones array_map o array_walk
```
Ejemplo
$yo = [
  "nombre" => "Jorge Dueñas Lerín",
  "dirección" => "Calle falsa número 1234"
  "teléfono" => "91 123 45 67",
  "población" => "Madrid",
  "edad" => 23,
]
```

```
format_form_user($yo);
```

Imprime:
```
<form id="datos personales" action="post">
  <input name="nombre" value="Jorge Dueñas Lerín"></input>
  ... etc.
</form>
```


13. [15 min]

Crea una función para escribir *select* de HTML, la función recibe un asociativo con el nombre y el value, también recibe el elemento seleccionado. como un entero (que representa su value)

```
/*** 
$opciones = [
  "Madrid" => 28,
  "Sevilla" => 17,
  "Cáceres" => 56,
]
***/
function genera_select(array $opciones, int seleccionada = -1)
{
  ...
}
```


## Objetos
<hide>
[Continua en otro README](README-Objetos.md)
</hide>