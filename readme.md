# Symfony 7 Project

## Descripción
Este es un proyecto basado en Symfony 7 a continuación se detallan los pasos necesarios para clonar el repositorio y configurar el entorno de desarrollo.

## Requisitos Previos
- PHP >= 8.1
- Composer
- MySQL (u otro sistema de base de datos compatible)
- Git

## Clonar el Repositorio
Para clonar el repositorio, abre una terminal y ejecuta el siguiente comando:
```bash
git clone https://github.com/dvidaillet/symfonytest
```
## Instalar dependencias
 Después de Clonar el Repositorio navegar al directorio del proyecto, por ejemplo:
```bash
cd C:\Users\dvida\Desktop\symphony\test\test
```

Instala las dependencias del proyecto utilizando Compose:
```bash
composer install
```

luego ejecutar el comando:
```bash
symfony serve         
```

# Test de Conocimientos Generales para Desarrollador Fullstack Junior

## Sección 1: Symfony

1. **Pregunta de Configuración:**
   - Describe los pasos básicos para levantar un proyecto en Symfony.
     1. Se debe tener instalado un servidor de aplicaciones web como `WAMP` o `XAMPP` con una versión de PHP y luego instalar Composer y luego Scoop.
     2. Instalar Symfony CLI.
     3. Crear un nuevo proyecto utilizando Symfony CLI con el comando: 
        ```bash
        symfony new --webapp my_project
        ```
        o 
        ```bash
        symfony new my_project
        ```
        dependiendo de si el proyecto es una web o una API.
     4. Instalar dependencias en el directorio del nuevo proyecto:
        ```bash
        cd my_project
        composer install
        ```
     5. Configurar el servidor web de Symfony CLI (Esto levantará el servidor en http://localhost:8000): 
        ```bash
        symfony server
        ```
     6. En caso de que el proyecto utilice una base de datos se debe Configurar en el archivo .env y ejecutar el siguiente comandos:
        ```bash
        DATABASE_URL="mysql://user:password@127.0.0.1:3306/my_database"
        ```
     7. Ejecutar los siguientes comandos para crear la base de datos:
        ```bash
        php bin/console doctrine:database:create
        php bin/console doctrine:migrations:migrate
        ```

2. **Pregunta de Código:**
   - Crea un controlador en Symfony que maneje una ruta /hello/{name} y devuelva un saludo personalizado. Además, si el nombre no se proporciona, debe devolver un saludo predeterminado "Hello World". (opcional) Implementa también una prueba unitaria para verificar que la ruta devuelve el saludo correcto.

3. **Pregunta Teórica:**
   - Explica la arquitectura de Symfony y cómo se organiza un proyecto típico en términos de carpetas y archivos.
   
      Symfony sigue una estructura de proyecto bien definida y organizada que se basa en el estándar de diseño Modelo-Vista-Controlador (MVC), junto con otros patrones de diseño modernos. Aquí se muestra una explicación de la arquitectura típica de un proyecto Symfony y cómo se organizan las carpetas y archivos:
      - Directorio `bin/`: Contiene los scripts ejecutables de Symfony, como `console`, que se utiliza para ejecutar comandos de Symfony desde la línea de comandos.
      - Directorio `config/`: Contiene la configuración de la aplicación, como las rutas (`routes.yaml`), la configuración del entorno (`packages/`), la configuración de servicios (`services.yaml`), etc.
      - Directorio `public/`: Es el directorio raíz de la aplicación y contiene todos los archivos accesibles públicamente, como el punto de entrada (`index.php`), los archivos CSS, JavaScript, imágenes, etc.
      - Directorio `src/`: Es donde reside la mayor parte del código fuente de la aplicación. Casi siempre esta conformado por los siguientes directorios:
         - `Controller/`: Aquí se encuentran los controladores de Symfony, que manejan las solicitudes HTTP y devuelven respuestas.
         - `Entity/`: Aquí se definen las entidades de Doctrine, si se está utilizando el ORM de Doctrine.
         - `Form/`: Contiene clases de formulario si se está utilizando el componente de formularios de Symfony.
         - `Repository/`: Si se está utilizando Doctrine, aquí se coclocan los repositorios de las entidades.
         - `Service/`: Contiene clases de servicio, que encapsulan la lógica de negocio de la aplicación.
         - `EventListener/`: Aquí se definen event listeners y event subscribers para manejar eventos en la aplicación.
         - `Security/`: Contiene clases relacionadas con la seguridad, como autenticadores, voters, etc.
         - `TwigExtension/`: Si necesitas crear extensiones personalizadas de Twig, se colocan aquí.
         - Se pueden crear directorios propios y archivos para organizar el código según sea necesario.
      - Directorio `templates/`: Aquí se encuentran las plantillas Twig que se utilizan para generar las vistas de la aplicación. Se organizan en subdirectorios según sea necesario para mantener la estructura de las vistas.
      - Directorio `tests/`: Contiene las pruebas unitarias y funcionales de la aplicación. Estas se pueden organizar en subdirectorios según el tipo de prueba o el componente que se esté probando.
      - Directorio `translations/`: Aquí se colocan los archivos de traducción para diferentes idiomas.
      - Directorio `var/`: Contiene datos variables generados por Symfony, como la caché, los logs, los archivos de sesión, etc.
      - Directorio `vendor/`: Aquí se encuentran todas las dependencias del proyecto instaladas a través de Composer.

4. **Pregunta de Código:**
   - Escribe un servicio en Symfony que se inyecta en un controlador y realiza una operación matemática básica (por ejemplo, sumar dos números). ¿Qué configuraciones son necesarias para poder usarlo? (opcional) Implementa también una prueba unitaria para verificar el correcto funcionamiento del servicio.

5. **Pregunta de Código:**
   - Muestra cómo crear un formulario en Symfony para una entidad User con campos username y email.

6. **Pregunta Teórica:**
   - Explica el concepto de Dependency Injection (DI) en Symfony y cómo se configura.
   
      En Symfony, la Inyección de Dependencias se utiliza para administrar las dependencias entre los diferentes componentes de una aplicación Symfony. Por ejemplo, un controlador puede depender de un servicio que se encarga de la lógica de negocio. En lugar de crear una instancia del servicio dentro del controlador, Symfony puede inyectar la instancia del servicio en el controlador, lo que hace que el controlador sea más flexible y fácil de probar.
      
      En Symfony, la configuración de la Inyección de Dependencias se realiza principalmente a través de archivos de configuración YAML (`services.yaml`), aunque también se puede hacer mediante archivos XML o PHP. Aquí tienes los pasos básicos para configurar la Inyección de Dependencias en Symfony:
      1. Definir Servicios
      2. Configurar la Inyección de Dependencias
      3. Utilizar los Servicios Inyectados

7. **Pregunta de Código:**
   - Escribe una consulta Doctrine en Symfony para obtener todos los registros de una entidad Product donde el precio sea mayor a 100.

8. **Pregunta Teórica:**
   - ¿Qué es el Event Dispatcher en Symfony y para qué se utiliza?
   
      El Event Dispatcher es un componente clave que permite la gestión y ejecución de eventos y listeners (o "escuchadores") dentro de una aplicación Symfony. Este componente implementa el patrón de diseño Observador, el Event Dispatcher se utiliza para desacoplar la lógica de la aplicación y permitir que diferentes partes de la misma se comuniquen de manera flexible a través de eventos.

9. **Pregunta de Código:**
   - Crea un validador personalizado en Symfony para asegurar que el campo email de una entidad User no pertenece a un dominio específico (por ejemplo, "example.com"). Muestra cómo configurar este validador y cómo sería utilizado en la entidad User.

10. **Pregunta de Código:**
- Implementa un Event Subscriber en Symfony que escuche el evento kernel.request y registre en un archivo de log cada visita a cualquier página de la aplicación. Asegúrate de configurar el servicio correctamente para que el suscriptor se registre con el evento.

## Sección 2: JavaScript

1. **Pregunta Teórica:**
   - Explica la diferencia entre var, let y const en JavaScript.
   
     La principal diferencia es el alcance o scope. Let solo existe dentro del bloque donde se declara mientras que var tiene un alcance global y sin importar dónde es declarada, si se le asigna otro valor en otro bloque del código, esta será reasignada.

2. **Pregunta de Código:**
   - Escribe una función en JavaScript que invierta una cadena de texto.
   
     ```javascript
     const invertirCadena = (cadena) => {    
         return cadena.split('').reverse().join('');    
     }
     ```

3. **Pregunta Teórica:**
   - ¿Qué es el Event Loop en JavaScript y cómo funciona?
   
     El Event Loop permite que el lenguaje, que es de un solo hilo, maneje múltiples tareas de manera concurrente, como ejecutar código, manejar eventos y realizar operaciones de entrada y salida.

4. **Pregunta de Código:**
   - Escribe un script en JavaScript que filtre los números pares de un array de números y los muestre en la consola.
   
     ```javascript
     const filtrarNumerosPares = (numeros) => {
         const numerosPares = numeros.filter(numero => numero % 2 === 0);    
         console.log(`Números pares: ${numerosPares}`);
     }
     ```

5. **Pregunta Teórica:**
   - ¿Qué es el DOM y cómo se manipula usando JavaScript?
   
     El DOM (Document Object Model) es una representación estructurada del contenido de un documento web, como HTML o XML. Actúa como un puente entre el contenido y el lenguaje de programación, en este caso, JavaScript. El DOM representa el documento como un árbol de nodos, donde cada nodo representa una parte del documento (por ejemplo, un elemento, un atributo, un texto, etc.)
     Se puede acceder a elementos del DOM usando métodos como getElementById, getElementsByClassName, getElementsByTagName, la tendencia es a utilizar querySelector y querySelectorAll.

6. **Pregunta de Código:**
   - Escribe un código en JavaScript que añada un event listener a un botón con el id #myButton para mostrar una alerta con el mensaje "Hello World" al hacer clic.
   
     ```javascript
     const myButton = document.getElementById('myButton');
     
     myButton.addEventListener('click', () => {
         alert('Hello World');
     });
     ```

7. **Pregunta Teórica:**
   - Explica qué es una Promesa en JavaScript y proporciona un ejemplo básico.
   
     Una Promesa en JavaScript es un objeto que representa la eventual finalización o falla de una operación asíncrona. Esencialmente, es una manera de manejar operaciones asíncronas de forma más limpia, permitiendo organizar código que de otra manera podría resultar complicado y difícil de mantener, especialmente cuando se trata de múltiples operaciones asíncronas que dependen una de la otra.
     Una promesa puede encontrarse en uno de estos tres estados:
     - Pendiente (pending): Estado inicial, ni cumplida ni rechazada.
     - Cumplida (fulfilled): Significa que la operación completó satisfactoriamente.
     - Rechazada (rejected): Significa que la operación falló.
     
     ```javascript
     function verificarDatos(data) {
         return new Promise((resolve, reject) => {
             // Simulación de una operación asíncrona, como consultar una API
             setTimeout(() => {
                 if (data === "valido") {
                     resolve("Datos verificados correctamente");  // Cumplir la promesa
                 } else {
                     reject("Error: Los datos no son válidos");  // Rechazar la promesa
                 }
             }, 1000);
         });
     }
     ```

8. **Pregunta de Código:**
   - Escribe una función en JavaScript que haga una petición AJAX (usando fetch) para obtener datos de una API y los muestre en un elemento con el id #result.
   
     ```javascript
     const obtenerDatosDeAPI = () => {
         const url = 'https://jsonplaceholder.typicode.com/posts/1';
     
         fetch(url)
             .then(response => {
                 if (!response.ok) {
                     throw new Error('La solicitud no pudo ser completada correctamente.');
                 }
                 return response.json();
             })
             .then(data => {
                 document.getElementById('result').textContent = JSON.stringify(data);
             })
             .catch(error => {
                 console.error('Error al obtener datos de la API:', error);
             });
     };
     ```

9. **Pregunta Teórica:**
   - ¿Cuál es la diferencia entre null, undefined y NaN en JavaScript?
   
     - null: Un valor asignado intencionalmente para indicar la "ausencia de un valor" de forma explícita.
     - undefined: El valor por defecto para variables que han sido declaradas pero no asignadas.
     - NaN: Significa "Not a Number" y se utiliza para representar un resultado indefinido de una operación aritmética.

10. **Pregunta de Código:**
    - Implementa una función en JavaScript que use localStorage para guardar una clave-valor y luego recuperarla.
    
      ```javascript
      // Función para guardar una clave-valor en localStorage
      const guardarEnLocalStorage = (clave, valor) => {
          localStorage.setItem(clave, valor);
      };
      
      // Función para recuperar el valor asociado a una clave en localStorage
      const recuperarDeLocalStorage = (clave) => {
          return localStorage.getItem(clave);
      };
      ```

## Sección 3: Git

1. **Pregunta Teórica:**
   - ¿Qué es Git y para qué se utiliza en el desarrollo de software?
   Git es un sistema de control de versiones distribuido diseñado para manejar desde proyectos pequeños hasta muy grandes con velocidad y eficiencia. Es el sistema de control de versiones más popular en el mundo de la programación.

2. **Pregunta de Comandos:**
   - ¿Cuál es el comando para clonar un repositorio de Git?
     El comando es `git clone` seguido de la URL del repositorio que deseas clonar.
     ```bash
     git clone https://github.com/dvidaillet/symfonytest
     ```

3. **Pregunta Teórica:**
   - Explica qué es un "branch" (rama) en Git y para qué se utiliza.
   En Git, una rama es una línea independiente de desarrollo. Cada branch representa una versión alternativa del código, que se separa del código principal (comúnmente llamado "master" o "main"). Los branches son utilizados para organizar y gestionar el desarrollo del software de manera eficaz, permiten a los desarrolladores trabajar en correcciones o nuevas funciones en paralelo sin afectar la base principal del código.

4. **Pregunta de Comandos:**
   - Proporciona los comandos necesarios para crear una nueva rama llamada `feature-xyz`, cambiar a esa rama, y luego fusionarla con la rama `main`.
   Para crear la rama `feature-xyz` y posicionarce en ella se puede utilizar:
     ```bash
     git checkout -b feature-xyz
     ```
   Luego de realizar lo cambios y comprobar que funcionen correctamente, para fusionarla con la rama `main` se utilizan los comandos:
     ```bash
     git checkout main
     git merge feature-xyz
     ```

5. **Pregunta Teórica:**
   - ¿Qué es un "merge conflict" y cómo se resuelve?
     Un "merge conflict" ocurre cuando Git no puede automáticamente fusionar los cambios de dos ramas porque estos cambios entran en conflicto. Esto sucede cuando dos ramas han modificado las mismas líneas de código de diferentes maneras, o cuando una rama ha borrado un archivo que la otra rama ha modificado.
     Para solucionar un conflicto Git detiene el proceso de fusión y notifica qué archivos tienen conflictos, se abre cada archivo con conflictos en el editor de texto. Git mmuestra con conflictos del archivo encerrando la porcion del código entre `<<<<<<<`, `=======`, y `>>>>>>>`, indicando las diferencias entre las versiones en conflicto, se edita el archivo para resolver el conflicto manualmente. Decide qué cambios quieres mantener, eliminar o modificar en cada sección conflictiva.
     Después de resolver el conflicto, agrega los archivos modificados al área de staging utilizando `git add` y finalmente, realizar un commit para completar el proceso de fusión:
     ```bash
     git commit -m "Resolver conflictos"
     ```

6. **Pregunta de Comandos:**
   - ¿Cuál es el comando para visualizar el estado actual del repositorio en Git?
     ```bash
     git status
     ```

7. **Pregunta Teórica:**
   - Explica la diferencia entre `git pull` y `git fetch`.
     La principal diferencia entre `git pull` y `git fetch` radica en la forma en que manejan los cambios del repositorio remoto: `git pull` descarga los cambios y los fusiona automáticamente, mientras que `git fetch` descarga los cambios pero no los fusiona automáticamente, permitiendo que revises los cambios antes de la fusión.

8. **Pregunta de Comandos:**
   - ¿Cuál es el comando para revertir el último commit en Git?
     ```bash
     git revert HEAD
     ```

9. **Pregunta Teórica:**
   - ¿Qué es un "remote repository" y cómo se configura en Git?
     Un repositorio remoto es una versión del repositorio de tu proyecto que está alojada en un servidor remoto, como GitHub o GitLab. Este repositorio remoto es una copia completa de tu proyecto que puede ser accedida y modificada por otros colaboradores. La configuración de un repositorio remoto en Git implica establecer una conexión entre tu repositorio local y el repositorio remoto.
     Para configurarlo se utiliza el siguiente comando `git remote add` seguido de un nombre (por ejemplo, "origin") y la URL del repositorio remoto:
     ```bash
     git remote add origin <url_del_repositorio_remoto>
     ```

10. **Pregunta de Comandos:**
    - Proporciona los comandos para añadir todos los cambios en los archivos al staging area y luego realizar un commit con el mensaje "Initial commit".
      ```bash
      git add .
      git commit -m "Initial commit"
      ```


# Sección 4: MySQL

1. **Pregunta de Código:**
   - Escribe una consulta SQL para crear una base de datos llamada `company` y una tabla llamada `employees` con las siguientes columnas: `id` (INT, auto-increment, primary key), `name` (VARCHAR(100)), `position` (VARCHAR(50)), `salary` (DECIMAL(10, 2)), y `hire_date` (DATE).
     ```sql
     CREATE DATABASE IF NOT EXISTS company;

     USE company;

     CREATE TABLE IF NOT EXISTS employees (
         id INT AUTO_INCREMENT PRIMARY KEY,
         name VARCHAR(100),
         position VARCHAR(50),
         salary DECIMAL(10, 2),
         hire_date DATE
     );
     ```

2. **Pregunta Teórica:**
   - Explica la diferencia entre una clave primaria (Primary Key) y una clave foránea (Foreign Key) en MySQL. ¿Cuándo y por qué se utilizan?
     Una clave primaria es un campo o conjunto de campos en una tabla que identifica de manera única cada fila en esa tabla, debe contener valores únicos para cada fila y no puede contener valores nulos (NULL). Una clave foránea es un campo en una tabla que establece una relación con la clave primaria de otra tabla. Esta relación puede ser de uno a uno, uno a muchos o muchos a muchos. 

     1.`Clave Primaria`: Se utiliza para identificar de forma única cada registro en una tabla para prevenir la inserción de registros duplicados, estas mejoran el rendimiento al permitir un acceso rápido a registros específicos mediante búsquedas por clave primaria.

     2.`Clave Foránea`: Se utiliza para establecer relaciones entre las filas de diferentes tablas mantienen la integridad referencial entre tablas, asegurando que los datos sean consistentes y evitando la eliminación o modificación de datos que dejarían registros huérfanos y facilita consultas complejas y operaciones de JOIN que involucran múltiples tablas relacionadas.

3. **Pregunta de Código:**
   - Escribe una consulta SQL para insertar tres registros en la tabla `employees` creada en la pregunta 1.
     ```sql
     INSERT INTO employees (name, position, salary, hire_date) VALUES
       ('Empleado1', 'Gerente', 60000.00, '2024-06-01'),
       ('Empleado2', 'Desarrollador', 50000.00, '2024-06-02'),
       ('Empleado3', 'Analista', 55000.00, '2024-06-03');
     ```

4. **Pregunta de Código:**
   - Muestra cómo actualizar el salario de un empleado específico en la tabla `employees`. Por ejemplo, actualiza el salario del empleado con `id = 1` a `60000.00`.
     ```sql
     UPDATE employees
     SET salary = 60000.00
     WHERE id = 1;
     ```

5. **Pregunta de Código:**
   - Escribe una consulta SQL para seleccionar todos los empleados cuyo salario sea mayor a `50000.00` y ordenarlos por el campo `hire_date` en orden descendente.
     ```sql
     SELECT *
     FROM employees
     WHERE salary > 50000.00
     ORDER BY hire_date DESC;
     ```

6. **Pregunta Teórica:**
   - ¿Qué es una transacción en MySQL y cómo se utiliza? Proporciona un ejemplo de uso.
     En MySQL, una transacción es un conjunto de operaciones que se ejecutan como una única unidad de trabajo. Estas operaciones pueden incluir inserciones, actualizaciones, eliminaciones, etc. El concepto clave de una transacción es que todas las operaciones deben completarse con éxito para que los cambios sean permanentes en la base de datos. Si alguna de las operaciones falla, la transacción se revierte, asegurando que la base de datos permanezca en un estado coherente.

     **Ejemplo de Uso:**
     Supongamos que tienes una tabla llamada `cuentas` que almacena información sobre cuentas bancarias. Quieres transferir una cantidad específica de dinero de una cuenta a otra dentro de una transacción para garantizar que la transferencia sea exitosa y consistente. Aquí está cómo se puede hacer en MySQL:
     ```sql
     START TRANSACTION;

     UPDATE cuentas SET saldo = saldo - 100 WHERE id = 1;  -- Retirar 100 de la cuenta 1
     UPDATE cuentas SET saldo = saldo + 100 WHERE id = 2;  -- Depositar 100 en la cuenta 2

     COMMIT;
     ```

7. **Pregunta de Código:**
   - Crea una vista en MySQL llamada `high_earning_employees` que seleccione todas las columnas de los empleados cuyo salario sea mayor a `70000.00`.
   
     ```sql
     CREATE VIEW high_earning_employees AS
     SELECT *
     FROM employees
     WHERE salary > 70000.00;
     ```
