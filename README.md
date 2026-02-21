#  SSRF 

Proyecto académico desarrollado para demostrar una vulnerabilidad **Server-Side Request Forgery (SSRF)** utilizando un backend en Laravel y un frontend en HTML, CSS y JavaScript.

El proyecto incluye:

- Endpoint vulnerable
- Endpoint corregido
- Frontend para realizar pruebas
- Configuración CORS
- Guía de pruebas

# Requisitos

Antes de comenzar asegúrate de tener instalado:

- PHP >= 8.2
- Composer
- Git
- SQLite (recomendado) o MySQL


# Instalación del Proyecto

## Clonar el repositorio


git clone https://github.com/eacriollo/ACTIVIDAD_SSRF.git
cd ACTIVIDAD_SSRF

# Instalar dependencias de Laravel

composer install

# Configurar el archivo .env

Copiar el archivo de ejemplo:

.env.example

## Generar la clave de la aplicación:

php artisan key:generate

## Configurar la base de datos

Editar el archivo .env

## Ejecutar migraciones

php artisan migrate

## Iniciar el servidor Laravel

php artisan serve

## Configuración de CORS

Verificar archivo config/cors.php

Su contenido debe ser
### codigo php

<?php

return [

    'paths' => ['api/*'],

    'allowed_methods' => ['*'],

    'allowed_origins' => ['*'],

    'allowed_headers' => ['*'],

    'supports_credentials' => false,
];


## cache

Luego limpiar caché

php artisan config:clear
php artisan cache:clear

## Prueba de SSRF

http://actividad1_2.test 0 http://127.0.0.1 DEPENDE DE LA CONFIGURACION DE LA URL EN LARAVEL
