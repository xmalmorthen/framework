<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/* 
    Document   : construct_helper
    Created on : 13/02/2012, 1:44:30 PM
    Author     : XmalMorthen
    Description: Estructura salida a navegador
*/

if ( ! function_exists('Output'))
{      
    function Output($output){               
        $CI = & get_instance();
        try {                        
            
/*
 * Cargar la salida original
 */            
            $Data['output'] = $output;
/*
 * Cargar archivos css principales
 */                        
            $Data['css'] = css_access(array("main.css"));        
/*
 * Cargar archivos javascript principales
 */            
            $Data['js'] = js_access (array("prueba.js"));
/*
* Imprimir nueva salida
*/
            if (DEBUG == FALSE) {
/*
 * Si la modalidad no es de desarrollo, agregamos la libreria para comprimir codigo de salida
 */                
                $CI->load->library('compresscodeoutput');
/*
 * Impirmir salida a navegador con código comprimido
 */                
                echo compresscodeoutput::zip($CI->load->view("mainviews/MainPage",$Data,true));            
            } else {
/*
 * Imprimir salida al navegador sin compresión de código
 */                
                echo $CI->load->view("mainviews/MainPage",$Data,true);
            }
            
        } catch (Exception $e) {
            ShowError($e);
        }
    }
}