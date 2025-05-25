# S1.07 - Testing

## 👤 Alumno
Desarrollado por Marc Sanchez

## 📄 Descripción
Ejercicios prácticos de Testing del Tema 7 del Sprint 1

## 🎯 Palabras Clave
- XDebug
- var_dump
- PHPUnit
- Tests Unitarios
- TDD
- PHP Coding Standards (PSR-1)

## 🛠️ Tecnologías utilizadas
- Laragon v.6.0 para el servidor local
- PHP 8.1.10
- IDE: Visual Studio Code
- Git & GitHub para el control de versiones

## 📋 Requisitos
- Servidor local tipo Laragon, XAMPP / MAMP / LAMP para la compilación de PHP.
- Tener instalado PHP 7.4 o superior (recomendado PHP 8.1+)
- Tener Composer instalado para las dependencias de tu proyecto.
- Habilitar XDebug en tu servidor local para casos de depuración

## 🛠️ Instalación
- Pasos para la instalación del proyecto en entorno local:
 
  1. Clona el repositorio o descarga el código fuente
  2. Accede a la carpeta raíz del proyecto desde la terminal
  3. Instala PHPUnit con el siguiente comando:

  ```bash
  composer require --dev phpunit/phpunit

  - Al introducirlo se creará la carpeta Vendor con los componentes.
  - Recuerda que has de introducir el autoload y la ubicacion de las carpetas en el composer.json:

    {
      "autoload": {
        "psr-4": {
          "App\\": "src/"
        }
      },
      "autoload-dev": {
        "psr-4": {
          "Tests\\": "tests/"
        }
      }
    }

Ejecuta el autoload con:

  ```bash

  composer dump-autoload

## ▶️ Ejecución
- Tus archivos de tests tienen que estar en la carpeta de Tests, y aquellos tests tiene que tener como nombre final la palabra test. Ej: EjemploTest.php
- declara correctamente los use y namespaces para que reconozca el directorio de phpunit.
- Ejecutar las pruebas con el comando:

  ```bash
  ./vendor/bin/phpunit
