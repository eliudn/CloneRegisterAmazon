# Prueba tecnica *Amazon registe clone*.

Este Proyecto es una Prueba tecnica de la empresa Inversiones digitale Corp SAS. Su objetivo es realizar la clonacion de el sistema de registro de usuarios de amazon. Implementado Laravel, ajax , sqlite  .

## Test 

Agrege testing para validar el correcto funcionaminto de registro de usuario

### Configurar test
- realize modificacion del archivo env.testing agregando su configuracion para realizar la conexion de  la base de datos mysql
- cree la base de datos test 

### Correr Test

Ejecute el siguiente comando.

```bash
    php artisan test --filter UserRegisterTest --env=testing
```
## Ruta

Aqui encontraremos las ruta para el registro de usuario el cual redirecciona al archivo welcome.blade.php si funciono bien

    http://localhost:8000/auht/register

## Instrucciones de instalacion

### Clonar el Repositorio

Primero, clona el repositorio en tu máquina local:

```bash
    git clone https://github.com/tu_usuario/amazon-register-clone.git
    cd amazon-register-clone
```

### Configurar el Entorno

Copia el archivo .env.example a .env y configura las variables de entorno según tus necesidades:

```bash
```
```bash
    cp .env.example .env
```

Genera la clave de la aplicación:

```bash
    php artisan key:generate
```


### Instalar Dependencias

Instala las dependencias de Composer:


```bash
    composer install
```

### Configurar la Base de Datos

Configura la base de datos en el archivo .env. Asegúrate de tener una base de datos creada para este proyecto.

```env
    DB_CONNECTION=sqlite
    DB_DATABASE=database/database.sqlite
```

Crea el archivo de base de datos SQLite:

```bash
    touch database/database.sqlite
```

Ejecuta las migraciones para crear las tablas necesarias:

```bash
    php artisan migrate
```


## Ejecutar el Servidor de Desarrollo

Inicia el servidor de desarrollo de Laravel:

```bash
    php artisan serve
```
Accede a la aplicación en tu navegador web en http://localhost:8000.

## Funcionalidades

    - Registro de usuarios con validación en tiempo real utilizando AJAX.
    - Redirección a la página de inicio después del registro exitoso.
    - Manejo de errores y mensajes de validación mostrados en la interfaz de usuario.

## Estructura del Proyecto

El proyecto sigue la estructura estándar de Laravel. Las partes más importantes relacionadas con el registro de usuarios son:

    - Rutas: Definidas en routes/web.php.
    - Controladores: app/Http/Controllers/Auth/RegisterController.php.
    - Vistas: resources/views/auth/register.blade.php.
