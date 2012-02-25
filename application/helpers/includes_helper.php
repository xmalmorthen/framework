<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/* 
    Document   : includes_helper
    Created on : 6/09/2011, 1:54:30 PM
    Author     : XmalMorthen
    Description: Metodos de acceso a los recursos del sistema
                 Js, Css, Carpeta de Imagenes, etc
*/

if ( ! function_exists('js_access'))
{
/*
 * función para incluir archivos js y codigo js en php
 */    
    function js_access($js='')
    {        
        try{
            
            if (! $js) return '';
            
            $incjs = '';
            
            if (DEBUG == FALSE) {
                $CI = &get_instance();
                $CI->load->driver('minify');
                $incjs .= "<script type='text/javascript'>";
            }
            
            foreach($js as $value){
                if (!$value) continue;
                
                $datapart = explode('.',$value);
                if (count ($datapart) > 1) {
                    switch ($datapart[count($datapart)-1]) {
                        case 'js':
/*
 * Verifica si no está en modo desarrollo para comprimir codigo js
 */ 
                            if (DEBUG == FALSE) {
                                $incjs .= $CI->minify->js->min(jss_path($value));
                            } else {
                                $incjs .= "<script type='text/javascript' src='".jss_path($value)."'></script>\n";
                            }
                            break;
                        case 'php':
                            require_once (jss_path($value)); 
                            break;
                        default:
                            throw new Exception(ResourceString("Etiquetas,Error,Formato"),1);
                            break;
                    }
                } else {
                    throw new Exception(ResourceString("Etiquetas,Error,Formato"),1);
                }
            }
            if (DEBUG == FALSE) {
                $incjs .= "</script>";
            }
            return $incjs;            
        } catch (Exception $e) {
            ShowError($e);
        }
    }
}

if ( ! function_exists('css_access'))
{
/*
 * función para incluir archivos css y codigo css en php
 */    
    function css_access($css='')
    {
        try{
            
            if (! $css) return '';
            
            $inccss = '';
            foreach($css as $value){
                if (!$value) continue;
                
                $datapart = explode('.',$value);
                if (count ($datapart) > 1) {
                    switch ($datapart[count($datapart)-1]) {
                        case 'css':
                            $inccss .= "<script type='text/javascript' src='".css_path($value)."'></script>\n";
                            break;
                        case 'php':
                            require_once (css_path($value)); 
                            break;
                        default:
                            throw new Exception(ResourceString("Etiquetas,Error,Formato"),1);
                            break;
                    }
                } else {
                    throw new Exception(ResourceString("Etiquetas,Error,Formato"),1);
                }
            }

            return $inccss;            
        } catch (Exception $e) {
            ShowError($e);
        }
    }
}