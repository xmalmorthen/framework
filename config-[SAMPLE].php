<?php


/*
 * VARIABLES PARA RECUPERACIÓN DE INFORMACION DE CONFIGURACIÓN
 */

define("DEBUG", TRUE);

if(DEBUG){
//path a la carpeta de recursos
        define('__RESOURCESPATH', 'resources');
//path a la carpeta de imagenes        
        define('__IMAGESPATH',__RESOURCESPATH.'/imgs');
//path a la carpeta de imagenes de base de datos
        define('__IMAGESPATH_BD','/bd');
//path a la carpeta de imagenes de autenticacion y sesion
        define('__IMAGESPATH_AUTH','/auth');
//path a la carpeta de imagenes de menu
        define('__IMAGESPATH_MNU','/auth');
//path a la carpeta de javascript
        define('__JSSPATH','/js');        
        
} else {
//path a la carpeta de recursos
        define('__RESOURCESPATH', 'resources');
//path a la carpeta de imagenes        
        define('__IMAGESPATH',__RESOURCESPATH.'/imgs');
//path a la carpeta de imagenes de base de datos
        define('__IMAGESPATH_BD','/bd');
//path a la carpeta de imagenes de autenticacion y sesion
        define('__IMAGESPATH_AUTH','/auth');
//path a la carpeta de imagenes de menu
        define('__IMAGESPATH_MNU','/auth');	
}
