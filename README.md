# ATELIER

Tienda en línea de moda contemporánea. Proyecto del curso Desarrollo de Aplicaciones Web (ISW-306), desarrollado por fases: maquetación, JavaScript, backend e integración con Laravel 12.

## Tecnologías

| Tecnología | Versión / configuración |
|---|---|
| PHP | 8.2 o superior |
| Laravel | 12.x |
| Composer | 2.x |
| Base de datos | SQLite por defecto |
| Interfaz | HTML, CSS, JavaScript y Blade |
| Node.js / npm | No requerido para ejecutar la interfaz actual |

## Requisitos previos

- PHP 8.2 o superior, con las extensiones requeridas por Laravel y SQLite (`pdo_sqlite` y `sqlite3`).
- Composer 2.x.
- Git.

## Instalación local

### 1. Clonar el repositorio

```bash
git clone https://github.com/PBB003/ATELIER.git
cd ATELIER
git checkout fase-4-despliegue
```

### 2. Instalar dependencias

```bash
composer install
```

### 3. Configurar el entorno

Copia `.env.example` a `.env`.

En PowerShell:

```powershell
Copy-Item .env.example .env
```

Genera la clave de la aplicación:

```bash
php artisan key:generate
```

### 4. Configurar SQLite

Comprueba que `.env` tenga:

```dotenv
DB_CONNECTION=sqlite
```

Crea el archivo de base de datos si no existe:

```powershell
if (!(Test-Path database/database.sqlite)) {
    New-Item database/database.sqlite -ItemType File
}
```

### 5. Ejecutar migraciones y datos iniciales

```bash
php artisan migrate --seed
```

### 6. Iniciar la aplicación

```bash
php artisan serve
```

Abre `http://127.0.0.1:8000` en el navegador.

## Funcionalidades

- Página principal de ATELIER.
- Catálogo público de productos mediante la ruta `/productos`.
- Formulario de contacto.
- Inicio y cierre de sesión.
- Panel administrativo protegido por autenticación y rol.
- Gestión de productos: listado, creación, edición y eliminación.

## Acceso administrativo

Abre `/login` para iniciar sesión.

Las credenciales de demostración deben corresponder al usuario creado por `AdminUserSeeder`. No se deben guardar contraseñas reales en este archivo ni en el repositorio. Configura una contraseña segura para cada entorno.

## Pruebas

Ejecuta las pruebas automatizadas con:

```bash
php artisan test
```

## Solución de problemas

| Problema | Solución |
|---|---|
| Falta la clave de cifrado | Ejecuta `php artisan key:generate`. |
| No se encuentra la base de datos SQLite | Comprueba que exista `database/database.sqlite` y que `.env` use `DB_CONNECTION=sqlite`. |
| Faltan dependencias | Ejecuta `composer install`. |
| El puerto 8000 está ocupado | Ejecuta `php artisan serve --port=8001`. |
| Los cambios de vistas no aparecen | Ejecuta `php artisan view:clear` y recarga el navegador. |

## Integrantes

| Integrante | Usuario | GitHub |
|---|---|---|
| Laura Isabel García Ferrera | Lequeen88 | https://github.com/Lequeen88 |
| Rebeca Lisbeth Santana Gómez | Rebeca Lisbeth | https://github.com/RebecaLisbeth |
| Pedro Francisco Breynik Báez | PBB003 | https://github.com/PBB003 |
| Bileidy Adriana Sánchez Severino | BileidySanchez | https://github.com/BileidySanchez |

## Flujo de ramas

`main` → `fase-1-maquetacion` → `fase-2-javascript` → `fase-3-backend` → `fase-4-despliegue`.

La integración final a `main` se realizará mediante un Pull Request, según el flujo acordado por el equipo.

## Licencia

Distribuido bajo la licencia MIT. Consulta el archivo [LICENSE](LICENSE).
