# Componiendo Con Symfony: Proyecto Limpio v3.3.9
## Instalacion de tu Bundle

Para poder usar el proyecto necesitas generar un nuevo bundle. Para ello nos hubicaremos en nuestro proyecto y usaremos la consola de Symfony para generar nuestro Bundle.

*Recuerda que el formato de configuracion que usaremos es yaml escribe **yml** en **Configuration format***.

```composer
cd TuProyecto
php bin/console generate:bundle
```

### En caso de que tener el siguiente error:

*> Checking that the bundle is autoloaded
FAILED*

sigue los pasos que te indica el generador de bundles.

>  The command was not able to configure everything automatically.
>  You'll need to make the following changes manually.
>
>  \- Edit the composer.json file and register the bundle
>  namespace in the "autoload" section:

abriremos el archivo **composer.json** de nuestro proyecto y buscaremos la seccion del autoload para agregar el namespace de nuestro bundle.

*En el proyecto la linea que agregaremos sera en la **linea 8** agrega `"TuBundle\\": "src/TuBundle"` y cambia el namespace TuBundle.*

```javascript
"autoload": {
        "psr-4": {
          "TuBundle\\": "src/TuBundle"
        },
        "classmap": [ "app/AppKernel.php", "app/AppCache.php" ]
    },
```

por ultimo en la consola actualizaremos el archivo **composer.json** con el siguiente comando:

*recuerda que debes hacerlo dentro de tu proyecto `cd TuProyecto`.*

```composer
php composer.phar dumpautoload
```
