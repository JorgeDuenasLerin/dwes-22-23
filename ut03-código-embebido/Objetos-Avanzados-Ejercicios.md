# Ejercicios Avanzados

## Singleton

Crea un objeto Config que implemente el patrón Singleton

Este objeto config puede almacenar la información del nombre de la aplicación.
- getNombre, setNombre

Crea una página en la que accedas desde distintos puntos a ese objeto Singleton

NOTA: Debes observar cómo es el mismo objeto.


## Interfaces

Está creando un aplicación con pasarela bancaria, en el momento en el que estás solo tienes integración con el Banco: BancoMalvado. En el futuro del proyecto podrá integrarte con otras pasarelas de pago.

Para todos los pagos debemos:
- establecer conexión
- comprobar seguridad
- pagar

Para poder en el futuro hacer que tu aplicación funcione con otras pasarelas de pago has decidido crear una Interfaz.

```
interface PlataformaPago
{
    public function estableceConexión():bool;
    public function compruebaSeguridad():bool;
    public function pagar(string cuenta, int cantidad);
}
```

Haz una implementación del pago con BancoMalvado. Simplemente escribe:
- conexión BancoMalvado
- conexión segura BancoMalvado
- Pago realizado BancoMalvado

Realiza un página que cree una conexión con BancoMalvado y realice las 3 acciones.

#### Otra implementación

Tu aplicación ha tenido mucho éxito y han decidido integrarse dos nuevas plataformas de pago.

Haz una implementación de estas dos plataformas:
- BitCoinConan
- BancoMaloMalísimo

Ahora modifica la página anterior para que de forma aleatoria se realice el pago con alguna de las plataformas.

NOTA: Debes utilizar Polimorfismo.


## Ejercicio completo

Estás creando el juego de clases para un videojuego

En el futuro esperas que otros jugadores-programadores creen  muchos tipos de personajes, así que decides crear un Intefaz personaje con los métosdos atacar y defender.

Vas a implementar un personaje Humano que escribirá "puñetazo" cuando ataque y "bloqueo" cuando defiende.

También vas a implemetnar un persnaje Mago. Todos los magos se dienden diciendo "hechizo protector" pero hay dos tipos de magos. Los personajes MagosBlancos que atacan escribiendo "ataque de luz", y los MagosOscuros que atacan escribiendo "ataque de sombra" (Mago es una clase abstracta)

Dentro del juego también tendrás un clase Edificio, que tiene una altura y un método para escribir la altura.

Dentro del juego también hay objetos que tienen un peso y una desrcipción.

Tanto los personajes, los edificios y los objetos tienen una posición en el mapa: x y z. Estas posiciones tienen sus métodos getters y setters.

Tanto los edificios como los objetos tienen una descripción y un método setter y getter para ella.

