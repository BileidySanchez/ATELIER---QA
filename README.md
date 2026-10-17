# ATELIER

ATELIER es un proyecto de tienda en línea de moda contemporánea desarrollado como parte del curso Desarrollo de Aplicaciones Web (ISW-306). El repositorio integra la maquetación, lógica de frontend, backend y despliegue con Laravel 12.

## Descripción general

La aplicación incluye:

- Página principal y contenido público.
- Catálogo de productos accesible en `/productos`.
- Formulario de contacto.
- Inicio y cierre de sesión.
- Panel administrativo con autenticación y control por rol.
- Gestión de productos (crear, editar, listar y eliminar).

## Tecnologías utilizadas

| Tecnología | Versiones / uso |
|---|---|
| PHP | 8.2 o superior |
| Laravel | 12.x |
| Composer | 2.x |
| Base de datos | SQLite recomendado para entorno local; MySQL también es compatible |
| Frontend | Blade, HTML, CSS, JavaScript |
| Bundling frontend | Vite y npm |

## Requisitos previos

Antes de instalar el proyecto, asegúrate de tener:

- PHP 8.2 o superior.
- Composer 2.x.
- Git.
- SQLite o MySQL instalado según tu entorno.
- Node.js y npm si deseas compilar assets frontend con Vite.

Si usas SQLite, debes tener activadas las extensiones `pdo_sqlite` y `sqlite3`.
Si usas MySQL, asegúrate de tener `pdo_mysql` disponible.

## Instalación local

### 1. Clonar el repositorio

```bash
git clone https://github.com/PBB003/ATELIER.git
cd ATELIER
```

Si quieres trabajar en la rama de despliegue del curso:

```bash
git checkout fase-4-despliegue
```

### 2. Instalar dependencias de PHP

```bash
composer install
```

### 3. Configurar el entorno

Copia el archivo de ejemplo:

```bash
copy .env.example .env
```

En Linux/macOS:

```bash
cp .env.example .env
```

Genera la clave de la aplicación:

```bash
php artisan key:generate
```

### 4. Configurar la base de datos

El proyecto puede funcionar con SQLite o con MySQL. Para desarrollo local, la opción recomendada es SQLite.

#### Opción A: SQLite (recomendada para local)

Asegúrate de tener esta configuración en `.env`:

```dotenv
DB_CONNECTION=sqlite
```

Y crea el archivo de la base de datos si no existe:

```powershell
if (!(Test-Path database/database.sqlite)) {
    New-Item database/database.sqlite -ItemType File
}
```

#### Opción B: MySQL

Configura los datos de conexión en `.env`:

```dotenv
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=atelier_db
DB_USERNAME=root
DB_PASSWORD=
```

> El archivo `.env.example` del proyecto usa MySQL por defecto. Si prefieres SQLite, cámbialo antes de ejecutar migraciones.

### 5. Ejecutar migraciones y datos iniciales

```bash
php artisan migrate --seed
```

Esto crea las tablas y carga los seeders iniciales, incluyendo el usuario administrativo base.

### 6. Iniciar la aplicación

```bash
php artisan serve
```

Abre la siguiente URL en el navegador:

```text
http://127.0.0.1:8000
```

## Rutas principales

- `/` — Home del sitio.
- `/productos` — Catálogo público.
- `/contacto` — Formulario de contacto.
- `/login` — Inicio de sesión.
- `/admin/productos` — Gestión administrativa de productos.

## Acceso administrativo

El sistema usa autenticación y un middleware para restringir el acceso al panel administrativo.

Se recomienda crear un usuario administrador seguro y no guardar credenciales reales en el repositorio. El seeder existente puede usarse como base en entornos locales o de prueba, pero en producción debe actualizarse con una contraseña segura y apropiada para cada entorno.

## Frontend y assets

El proyecto incluye Vite para la gestión de assets frontend. Si necesitas compilar assets de desarrollo:

```bash
npm install
npm run dev
```

Para construir la versión de producción:

```bash
npm run build
```

## Pruebas

Ejecuta la suite de pruebas con:

```bash
php artisan test
```

## Solución de problemas

| Problema | Solución |
|---|---|
| La aplicación dice que falta la clave de la app | Ejecuta `php artisan key:generate` y vuelve a intentar. |
| No encuentra la base de datos | Verifica que `DB_CONNECTION` en `.env` sea correcto y que el archivo o servicio de base de datos exista. |
| Error de extensiones PHP | Instala las extensiones necesarias para SQLite o MySQL según el tipo de base de datos que uses. |
| El puerto 8000 está ocupado | Ejecuta `php artisan serve --port=8001`. |
| Los cambios en vistas no aparecen | Ejecuta `php artisan view:clear` y recarga el navegador. |
| No se compilan los assets frontend | Ejecuta `npm install` y luego `npm run dev` o `npm run build`. |

## Integrantes

| Integrante | Usuario | GitHub |
|---|---|---|
| Laura Isabel García Ferrera | Lequeen88 | https://github.com/Lequeen88 |
| Rebeca Lisbeth Santana Gómez | Rebeca Lisbeth | https://github.com/RebecaLisbeth |
| Pedro Francisco Breynik Báez | PBB003 | https://github.com/PBB003 |
| Bileidy Adriana Sánchez Severino | BileidySanchez | https://github.com/BileidySanchez |

## Flujo de ramas

El proyecto sigue este flujo de trabajo:

`main` → `fase-1-maquetacion` → `fase-2-javascript` → `fase-3-backend` → `fase-4-despliegue`

La integración final a `main` se realiza mediante Pull Request, según el flujo acordado por el equipo.

## Licencia

Este proyecto se distribuye bajo la licencia MIT. Consulta el archivo [LICENSE](LICENSE).
