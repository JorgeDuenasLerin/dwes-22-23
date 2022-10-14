# Contenidos

- Estructuras de control:
  - Alternativas
  - Repetitivas
  - Salida de HTML
- Funciones
- ¿Cómo estructurar un proyecto?
- Objetos
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
Por defecto generará 10 valores entre 0 y 10
Puedes especificar el número de valores como primer parámetro,
Puedes especificar el valor máximo como segundo parámetro
o Puedes especificar número de valores, máximo y mínimo

aleatorio(); // [n,n,n,n,n,n,n,n,n,n]
aleatorio(5) // [n,n,n,n,n]
aleatorio(5,50)
aleatorio(5,50,-50)