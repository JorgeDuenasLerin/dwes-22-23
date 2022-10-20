# Objetos

## Teoría y ejemplos

Diego Lázaro:

- [https://diego.com.es/programacion-orientada-a-objetos-en-php](https://diego.com.es/programacion-orientada-a-objetos-en-php)

Logicbig:

- [https://www.logicbig.com/tutorials/misc/php/php-oop-cheat-sheet.html](https://www.logicbig.com/tutorials/misc/php/php-oop-cheat-sheet.html)


## NOTA IMPORTANTE PARA LA ORGANIZACIÓN DE CÓDIGO

Un fichero php:
.-  o bien define elemento
.-  o bien produce una salida tras procesar información


## Ejercicios

01. Crea la clase Círculo con el método setRadio y el método getRadio y getArea.
Tendrá una propiedad privada para almacenar el radio.
Tendrá una constante privada para almacenar PI

Necesitas definir el fichero con la clase por un lado y por otro la página que lo usa.


02. Crea la clase CuentaBancaria

Atributos:
- numerocuenta
- nombre
- saldo

Los números de cuenta se crearán de forma consecutiva después del 100001. Debes utilizar elementos estáticos

Métodos:
- constructor con todos los parámetros y valores por defecto ('anónimo', saldo 0)
- ingresar(float)
- retirar(float)
- saldo():float
- transferirA(CuentaBancaria, cantidad):
    - La cuenta que recibe el mensaje transfiere la cantidad a la otra cuenta
- unirCon(CuentaBancaria):
    - La cuenta que recibe el mensaje coge el saldo de la que es pasada como parámetro
    - La cuenta que es pasada como parametro se queda con saldo 0 y numerocuenta -1. Indicando que ya no útil
    - $cuentaA->unirCon($cuentaB)
- bancarrota(): Asigna el saldo a cero
- mostrar: muestra un div con la información en varios span. Utiliza clases css por si luego le quieres dar estilo

Páginas:

Crea una página con tres cuentas:
- Milloneti, saldo 1000000
- Agapito, saldo 30345
- Pobretón, saldo -10000

Secuencia de acciones:
- Haz que el Milloneti tenga 100 retiradas de 1000 euros
- Haz que Agapito tenga un ingreso de 1200 euros
- Muestra el saldo de las 3 cuentas. Solo el saldo.
- Pobretón ha hackeado el banco y ha conseguido unir la cuenta del Milloneti a la suya.
- Agapito es buena persona y decide transferir la mitad de su salario a Milloneti para que rehaga su vida.
- Muestra el detalle (método mostrar) de las 3 cuentas.
