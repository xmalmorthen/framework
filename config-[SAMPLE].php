<?php


/*
 * VARIABLES PARA RECUPERACIÓN DE INFORMACION DE CONFIGURACIÓN
 */

define("DEBUG", FALSE);


if(!DEBUG){
//tiempo de expiracion en minutos del cache        
        define('__CACHETIME',60);
}

//path a la carpeta de recursos
        define('__RESOURCESPATH', 'resources');
        
//path a la carpeta de imagenes        
        define('__IMAGESPATH',__RESOURCESPATH.'/imgs');
        
//path a la carpeta de imagenes de base de datos
        define('__IMAGESPATH_BD','/bd');
        
//path a la carpeta de imagenes de autenticacion y sesion
        define('__IMAGESPATH_AUTH','/auth');
        
//path a la carpeta de imagenes de menu        
        define('__IMAGESPATH_MNU','/mnu');
                
//path a la carpeta de imagenes de botones
        define('__IMAGESPATH_BTNS','/btns');

//path a la carpeta de gifs animados        
        define('__ANIMATEDGIFS','/animatedgifs');
        
//path a la carpeta de imagenes de negocio
        define('__IMAGESPATH_BUSSINESS','/bussines');
                
//path a la carpeta de javascript
        define('__JSSPATH','/js');        
        
//path a la carpeta de css
        define('__CSSPATH','/css');        