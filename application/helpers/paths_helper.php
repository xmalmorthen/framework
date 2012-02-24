<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/* 
    Document   : paths_helper
    Created on : 12/02/2012, 2:00:10 PM
    Author     : XmalMorthen
    Description: Rutas para diferentes carpetas de proyecto
*/

/*
 * Carpeta de imagenes
 */
if ( ! function_exists('imgs_path'))
{
    function imgs_path($pathtoimage='')
    {        
        try {       
            if (! defined('__IMAGESPATH')) {
                throw new Exception('Variable __IMAGESPATH, no implementada',1);
            }            
            $_imgspath  = __IMAGESPATH;
            
            $fullpath = $_imgspath . ($pathtoimage != '' ? "{$pathtoimage}" : '');
/*
 * Verificar que exista la ruta o archivo
 */            
            utils::ExisteArchivo($fullpath);           

            return base_url().$fullpath;
        } catch (Exception $e) {
            ShowError($e);
        }
    }
}

/*
 * Carpeta de javascripts
 */
if ( ! function_exists('jss_path'))
{
    function jss_path($path='')
    {        
        try {       
            if (! defined('__JSSPATH')) {
                throw new Exception('Variable __JSSPATH, no implementada',1);
            }            
            $_jspath  = __RESOURCESPATH.__JSSPATH;
            
            $fullpath = $_jspath . ($path != '' ? "/{$path}" : '');
            
/*
 * Verificar que exista la ruta o archivo
 */            
            utils::ExisteArchivo($fullpath);           
            
            return $fullpath;
        } catch (Exception $e) {
            ShowError($e);
        }
    }
}

/*
 * Carpeta de css
 */
if ( ! function_exists('css_path'))
{
    function css_path($path='')
    {        
        try {       
            if (! defined('__CSSPATH')) {
                throw new Exception('Variable __CSSPATH, no implementada',1);
            }            
            $_cspath  = __RESOURCESPATH.__CSSPATH;
            
            $fullpath = $_cspath . ($path != '' ? "/{$path}" : '');
            
/*
 * Verificar que exista la ruta o archivo
 */            
            utils::ExisteArchivo($fullpath);           
            
            return $fullpath;
        } catch (Exception $e) {
            ShowError($e);
        }
    }
}