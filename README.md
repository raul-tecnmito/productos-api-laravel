## Pasos de instalación

### 1. Clonar el repositorio

```bash
git clone <url-del-repositorio>
cd <nombre-del-repositorio>
```

### 2. Instalar dependencias con Composer

Una vez dentro del directorio del proyecto, instala las dependencias de Laravel utilizando Composer

```bash
composer install
```

### 3. Configurar el archivo `.env`

Copia el archivo `.env.example` y renómbralo a `.env` para configurar las variables de entorno

```bash
cp .env.example .env
```

Abre el archivo `.env` en un editor de texto y configura los parámetros de conexión a la base de datos MySQL

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=nombre_de_base_de_datos
DB_USERNAME=usuario_mysql
DB_PASSWORD=contraseña_mysql
```

Reemplaza `nombre_de_base_de_datos`, `usuario_mysql`, y `contraseña_mysql` con la información correspondiente al entorno de base de datos.

### 4. Ejecutar las migraciones y rellenar registros

```bash
php artisan migrate --seed
```

### 5. Iniciar el servidor de desarrollo


```bash
php artisan serve
```

Se pueden consultar los endpoints usando `php artisan route:list`