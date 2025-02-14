# Proyecto: CRUD de Personas con Autenticación en Laravel

Este es un proyecto desarrollado en Laravel 11 que implementa un **CRUD de personas** con autenticación de usuario mediante Laravel Breeze.

## Requisitos Previos
Antes de instalar y ejecutar el proyecto, asegúrate de contar con los siguientes requisitos:

- XAMPP o MySQL
- Composer
- Node.js y NPM
- Git

## Instalación y Configuración
Sigue estos pasos para configurar y ejecutar el proyecto en una nueva computadora.

### 1. Clonar el repositorio
```
git clone https://github.com/tu-usuario/tu-repositorio.git
cd tu-repositorio
```

### 2. Instalar dependencias de PHP y Node
```
composer install
npm install
```

### 3. Ejecutar las migraciones
```
php artisan migrate --seed
```

### 4. Compilar los archivos front-end
```
npm run build
```

## Ejecución del Proyecto
### Ejecutar el servidor de desarrollo
```
php artisan serve
```

El proyecto estará disponible en:
**http://127.0.0.1:8000**


## Funcionalidades del Proyecto
- CRUD de Personas  
- Autenticación con Laravel Breeze  
- Protección de rutas con Middleware  
- Contraseñas cifradas en la base de datos  
- Panel de administración de usuarios  

## Comandos útiles
Si necesitas resetear la base de datos:
```
php artisan migrate:fresh --seed
```

Si necesitas limpiar cachés:
```
php artisan cache:clear
php artisan config:clear
php artisan route:clear
php artisan view:clear
```



