## Instrucciones para agentes de IA (copilot)

Este repositorio contiene ejemplos y ejercicios en PHP organizados en carpetas por clase (`Clase2/`, `Clase3/`). Las siguientes instrucciones ayudan a un agente a ser productivo rápidamente aquí.

### Qué hay en el proyecto (big picture)
- Código educativo: pequeñas páginas y scripts PHP (no hay framework MVC ni dependencias composer visibles).
- Estructura notable:
  - `Clase2/main.php` — contiene una función `ejemplos()` con muchos snippets de funciones PHP (strings, arrays, clases, funciones matemáticas) y un manejador POST para un ejercicio simple (suma y división).
  - `Clase3/` — contiene pequeños ejemplos y formularios (`form.php`, `Cookies.php`, `array.php`).

Por tanto, el proyecto es un conjunto de scripts autocontenidos pensados para ejecutarse directamente en un servidor PHP (XAMPP) o con el servidor embebido de PHP.

### Cómo ejecutar / probar localmente (comandos relevantes)
- Usando XAMPP (observado por la ruta del workspace `/opt/lampp/htdocs/php`):

  - Iniciar XAMPP (Linux):

    ```bash
    sudo /opt/lampp/lampp start
    ```

  - Abrir en el navegador: `http://localhost/php/Clase2/main.php` o `http://localhost/php/Clase3/form.php` según el archivo.

- Alternativa: servidor embebido de PHP (útil para pruebas rápidas):

  ```bash
  # desde el directorio que contiene las carpetas Clase2/ Clase3/
  php -S localhost:8000 -t /opt/lampp/htdocs/php
  # luego abrir http://localhost:8000/Clase2/main.php
  ```

### Patrones y convenciones específicas del repo
- Formularios: los scripts comprueban `isset($_POST['ejercicio1'])` y esperan campos con nombres simples. Ejemplo en `Clase2/main.php`:

  - Manejo: `if (isset($_POST['ejercicio1'])) { $num1 = $_POST['n1']; $num2 = $_POST['n2']; ... }`

- Nombres y estilo: archivos y variables usan español (p.ej. `$nombre`, `$edad`, `ejemplos()`). Mantener consistencia con español en nuevos archivos y mensajes para estudiantes.
- Clases: definición muy simple (ver `class Car` en `main.php`). Prefieren propiedades públicas y constructor sencillo.

### Qué buscar al modificar código
- Evitar añadir dependencias externas sin necesidad: el proyecto es didáctico y se mantiene sin composer.
- Validación mínima actual: los scripts no validan tipos/formato — si agregas validación, sigue la misma zona del formulario (antes de usar `$_POST`), y documenta el cambio en el archivo.

### Debugging y comprobaciones rápidas
- Linter PHP ligero: `php -l ruta/al/archivo.php` para revisar sintaxis.
- Logs de XAMPP: `/opt/lampp/logs/error_log` (útil si se usa XAMPP). Si usas servidor embebido, ver la salida en la terminal.

### Ejemplos concretos extraídos del código
- `Clase2/main.php` contiene:
  - `function ejemplos()` con uso de `echo`, `var_dump`, `gettype`, operaciones de strings (`strrev`, `strpos`), y generación de números (`rand`).
  - Un manejador POST que suma y divide dos valores (`n1`, `n2`). Si extiendes esta funcionalidad, valida división por cero.

- `Clase3/form.php` y `Cookies.php` son puntos de entrada típicos para formularios y manejo de cookies; sigue el patrón de comprobación `isset($_POST[...])` y limpieza/escape antes de imprimir.

### Limitaciones detectadas y supuestos (leer antes de cambiar)
- No hay tests automatizados ni configuración de CI detectada.
- No se encontró `composer.json` ni `package.json` — asumo que no hay dependencias externas.
- La ruta del workspace sugiere uso de XAMPP en `/opt/lampp/htdocs/php` — si el entorno del desarrollador es distinto, adapta las rutas/puertos.

### Qué puede pedir el agente al desarrollador si hace falta más info
- ¿Deseas añadir pruebas unitarias o un linter formal? (sugerencia: PHPUnit y ESLint no aplican; usar PHP_CodeSniffer / PHPCS y PHPUnit si se quiere evolucionar)
- ¿Prefieres migrar estos ejemplos a un pequeño framework (p.ej. Slim) o mantenerlos como scripts aislados?

Si algo de lo anterior queda poco claro o quieres que incluya ejemplos de PRs o plantillas de commit, dime y adapto el archivo.

---
Por favor, revisa este borrador y dime si quieres que lo amplíe (por ejemplo, añadiendo plantillas de PR, convenciones de commits, o instrucciones para ejecutar tests si añadimos PHPUnit).
