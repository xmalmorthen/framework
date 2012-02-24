<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/* 
    Document   : error_helper
    Created on : 12/02/2012, 3:06:00 PM
    Author     : XmalMorthen
    Description: Helper para el control y visualizacion de errores
*/

if ( ! function_exists('ShowError'))
{
    
/*
 * Genera el mensaje de error
 * $error => objeto o cadena de mensaje de error
 * nivel de error, esto es para saber que tipo de vista de error mostrará en pantalla
 *                1 = error de programación
 *                2 = error de sistema
 *                3 = error de acciones
 *                4 = error de base de datos  
 * $ReturnAjax => regresa el mensaje en formato kadena para peticiones ajax
 */    
    function ShowError($error = NULL)
    {        
        $msg['msg'] = 'Error no especificado';
        $msg['file']= '';
        $msg['line']= '';
        $msg['trace']= '';
        
        if (is_object($error)) {
            if (get_class($error) == 'Exception') {
                $severity   = $error->getCode();
                $msg['msg'] = $error->getMessage();
                $msg['file']= $error->getfile();
                $msg['line']= $error->getline();
                $msg['trace']= $error->getTrace();
            }
        } else {
            $msg['msg'] = $error;
        }
                
        $_error =& load_class('Exceptions', 'core');                    
        switch ($severity) {
            case 1:                    
                    echo $_error->show_php_error('E_ERROR',$msg['msg'],$msg['file'],$msg['line']);                    
                break;
            case 2:
                    echo $_error->show_error("Error Nivel {$severity}",$msg['msg']);
                break;
            default:
                break;
        }
        echo "Trace de error...";
        var_dump($msg['trace']);
        exit;
    }
}