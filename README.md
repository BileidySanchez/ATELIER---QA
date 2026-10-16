# ATELIER

Tienda en línea de moda contemporánea. Proyecto del curso **Desarrollo de Aplicaciones Web (ISW-306)**,
construido por fases: maquetación (HTML/CSS) → JavaScript → backend en PHP → **integración del framework Laravel (Fase 4)**.

En la Fase 4 la aplicación se migra de PHP puro a **Laravel 12**, aprovechando su enrutamiento, controladores,
vistas Blade, validación y contenedor de inyección de dependencias.

---

## 🛠️ Tecnologías y versiones

| Componente | Versión requerida | Versión con la que se probó | Uso |
|---|---|---|---|
| PHP | 8.2 o superior | 8.3.6 | Lenguaje del servidor |
| **Laravel (framework elegido)** | 12.x | 12.70.0 (fijada en `composer.lock`) | Rutas, controladores, Eloquent, Blade |
| Composer | 2.x | 2.8.12 | Gestor de dependencias de PHP |
| MySQL / MariaDB | MySQL 8 o MariaDB 10.4+ | MariaDB 10.11.14 (la de XAMPP) | Base de datos `atelier_db` |
| HTML, CSS y JavaScript | — | — | Interfaz (`public/`) |
| Node.js / npm | **No requerido** | — | La interfaz usa archivos estáticos; no hace falta `npm install` |
| Python | **No requerido** | — | — |

## ✅ Requisitos previos

- **PHP 8.2+** con las extensiones `pdo_mysql`, `mbstring`, `openssl`, `fileinfo` y `curl` (XAMPP las trae activas).
- **Composer** instalado (`composer --version`).
- **MySQL o MariaDB** en ejecución en el puerto 3306 (por ejemplo, el módulo *MySQL* de XAMPP).
- **Git**.

---

## 🚀 Instalación y ejecución local

### 1. Clonar el repositorio

```bash
git clone https://github.com/PBB003/ATELIER.git
cd ATELIER
git checkout fase-4-despliegue
```

### 2. Instalar las dependencias de PHP

```bash
composer install
```

### 3. Crear el archivo de entorno

```bash
cp .env.example .env
```

> En Windows (CMD) usa `copy .env.example .env`.

### 4. Configurar la base de datos en `.env`

Abre el archivo `.env` y reemplaza el bloque que empieza en `DB_CONNECTION` por este
(por defecto viene configurado para SQLite):

```ini
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=atelier_db
DB_USERNAME=root
DB_PASSWORD=
```

> El archivo `.env` contiene credenciales y **no se sube a Git** (está en `.gitignore`).

### 5. Crear la base de datos

1. Inicia el módulo **MySQL** en XAMPP.
2. Abre phpMyAdmin (`http://localhost/phpmyadmin`) y crea una base de datos vacía llamada `atelier_db`
   (cotejamiento `utf8mb4_unicode_ci`).

### 6. Generar la clave de la aplicación y ejecutar las migraciones

```bash
php artisan key:generate
php artisan migrate --seed
```

### 7. Iniciar el servidor de desarrollo

```bash
php artisan serve
```

Abre en el navegador: **http://127.0.0.1:8000**

---

## 🔑 Credenciales de demostración

> Pendiente
---

## 🧯 Solución de problemas

| Error | Causa probable | Solución |
|---|---|---|
| `SQLSTATE[HY000] [2002] Connection refused` | MySQL no está iniciado | Inicia el módulo MySQL en XAMPP |
| `Unknown database 'atelier_db'` | La base de datos no existe | Créala en phpMyAdmin (paso 5) |
| `No application encryption key has been specified` | Falta la clave | `php artisan key:generate` |
| `Class "…" not found` / carpeta `vendor` ausente | No se instalaron las dependencias | `composer install` |
| El puerto 8000 está ocupado | Otro proceso lo usa | `php artisan serve --port=8001` |

## 👥 Integrantes del equipo

| Integrante | Usuario | Link de GitHub |
|---|---|---|
| 	Laura Isabel García Ferrera | Lequeen88 | https://github.com/Lequeen88 |
| 	Rebeca Lisbeth Santana Gómez | Rebeca Lisbeth | https://github.com/RebecaLisbeth
| 	Pedro Francisco Breynik Báez | PBB003
 | https://github.com/PBB003 |
| Bileidy Adriana Sánchez Severino | BileidySanchez | https://github.com/BileidySanchez |

## 🌿 Flujo de ramas

`main` → `fase-1-maquetacion` → `fase-2-javascript` → `fase-3-backend` → **`fase-4-despliegue`** (Pull Request a `main`, versión `v4.0`).

## 📄 Licencia

Distribuido bajo la licencia MIT. Consulta el archivo [`LICENSE`](LICENSE).
