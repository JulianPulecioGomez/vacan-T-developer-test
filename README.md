# Vacan-T DEVELOPER TEST

Este es un proyecto de administraci贸n de productos.

### Pre-requisitos 馃搵

- composer https://getcomposer.org/download/
- npm
- mysql
- xampp
- node.js
- git (Opcional para descarga)

### Instalaci贸n 馃敡
1. Instalar Composer desde la siguiente direcci贸n url [Link](https://getcomposer.org/download/)
2. Instalar NPM desde la siguiente direcci贸n url [Link](https://docs.npmjs.com/cli/install#:~:text=npm%20install%20(in%20package%20directory,directory)%20as%20a%20global%20package).
3. Instalar Xampp desde la siguiente direcci贸n url [Link](https://www.apachefriends.org/es/download.html)
4. Instalar Node.js desde la siguiente direcci贸n url [Link](https://nodejs.org/es/download/)
5. Dirigirse http://localhost/phpmyadmin/ y crear una base de datos vac铆a.
6. Descargar el proyecto, se puede realizar mediante git (Requiere la instalaci贸n de git en la maquina )
    ```shell
    $ git clone https://github.com/JulianPulecioGomez/vacan-T-developer-test.git
    ```
   La segunda opci贸n es dar al bot贸n Download ZIP, en "Code" en el area superior derecha.
7. Dirigirse a la ra铆z del proyecto usando la terminal, y ejecutar:
    ```shell
    $ composer install
    ```
8. Dirigirse a la ra铆z del proyecto usando la terminal, y ejecutar:
    ```shell
    $ npm install
    ```
9. Dirigirse a la ra铆z del proyecto usando la terminal, y ejecutar:
    ```shell
    $ composer dump-autoload
    ```
10. Dirigirse al archivo .env en la ra铆z del proyecto y configurar la opci贸n DB_DATABASE con la base de datos del usuario.
11. Dirigirse a la ra铆z del proyecto usando la terminal, y ejecutar:
    ```shell
    $ php artisan migrate
    ```

## Despliegue 馃摝

Tener en cuenta que el usuario necesita crear y configurar una base de Datos para luego asociarla al proyecto mediante el archivo .env

## Construido con 馃洜锔?

Herramientas usadas.

* [Laravel](https://laravel.com/docs/7.x) - El framework web usado
* [Angular](https://angular.io/docs) - El framework web usado
* [Composer](https://getcomposer.org/) - Manejador de dependencias
* [npm](https://docs.npmjs.com/) - Sistema de gesti贸n de paquetes

## Autores 鉁掞笍

* **Juli谩n David Pulecio G贸mez** - *julianpuleciogomez@gmail.com*
