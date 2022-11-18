La cookie que quiere ser sesión
===============================

Hemos visto que no podemos dejar información sensible al usuario en ningún
cliente, puesto que es susceptible de ser modificada.

¿Cómo podemos mantener información sensible y asociarla a un cliente?

Vamos a hacer que la cookie mantenga un identificador y la información sea
guardada en el servidor.


Práctica
********

Cliente                   Servidor
Cookie <-> ID             Información sensible

Para esta práctica el valor del ID serán 3 un números entre 10000 y 30000
separados por guiones, ejemplo:
.- 14334-16520-20293
La información del ID se guardará en la cookie 'mi_sesion'
Cuando un cliente se presente sin cookie se le generará una id nuevo.
Cuando un cliente guarde sesión se generará un fichero en el disco del server
asociado al ID con un array serializado, este array será la información relativa
a ese usuario, ejemplo:
.- ./sesiones/14334-16520-20293.ses <- Array searilzado con información

Funciones:
    obten_o_crea_sesion(&$id, &$data):
        intenta buscar una cookie con nombre mi_sesion en la petición actual.
        Si la hay intenta bucar dentro de la carpeta 'sesiones' del proyecto un
        fichero <número_de_sesion>.ses que tendrá una array serializado con la
        información del usuario.
        En el caso de no tener fichero o no tener cookie, se generará una nueva
        Los dos parámetros de la función son parámetros de salida.
    guarda_sesion($id, $data):
        Almacena la información de la sesión.

Con este sistema crea 3 páginas:
1.- Área privada:
      Permite al usuario ver información secreta

2.- Área privada:
      Permite al usuario establecer su nombre con un formulario

3.- Área púbica con un formulario para mandar la password
      La password secreta es fija y "s3cr3t0"


-------------------------------------------------------------------------------
Preguntas...
¿Qué ocurre si el usuario pierde la cookie?
¿Qué ocurre si la cookie caduca?
¿Por qué ocurre eso?


Sitúate en una web
¿Qué tipo de información guardarías en la sesión?
¿De dónde sale esta información?
¿Cómo se implementa?


Próximamente: Sesiones
