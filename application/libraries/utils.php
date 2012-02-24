<?php if (!defined("BASEPATH")) exit("No direct script access allowed");

class utils {
    public static function ExisteArchivo($path){
        try{
            if ( ! file_exists($path) ){
//                throw new Exception('La ruta a la carpeta o archivo no se encuentra, favor de revisar.',1);
            }
        } catch (Exception $e) {
            ShowError($e);
        }
    }
    
    public static function GetUri(){
        $CI = & get_instance();                    
        if ($CI->uri->segments){
            $uri = $CI->uri->segments[count($CI->uri->segments)];
        } else {
            $uri = explode('/',$CI->router->routes['default_controller']);
            $uri = $uri[count($uri)-1];
        }            
        return ucwords($uri);
    }
}