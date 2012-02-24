<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/* 
    Document   : construct_helper
    Created on : 6/09/2011, 1:54:30 PM
    Author     : XmalMorthen
    Description: Metodos de acceso a los recursos del sistema
                 Js, Css, Carpeta de Imagenes, etc
*/

if ( ! function_exists('Construct'))
{
    function Construct(){
        try {
            $uri = utils::GetUri();
            Set_SessionPageInfo("Etiquetas,Menu,{$uri}");
        } catch (Exception $e) {
            ShowError($e);
        }    
    }
}