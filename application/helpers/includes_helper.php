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
/*
 * Verifica si no está en modo desarrollo para comprimir codigo js
 */ 
                if (DEBUG == FALSE) {
                    $incjs .= $CI->minify->js->min(jss_path($value));
                } else {
                    $incjs .= "<script type='text/javascript' src='".jss_path($value)."'></script>\n";
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
            
            if (DEBUG == FALSE) {
                $CI = &get_instance();
                $CI->load->driver('minify');
                $inccss .= "<style type='text/css'>";
            }
            
            foreach($css as $value){
                if (!$value) continue;
/*
 * Verifica si no está en modo desarrollo para comprimir codigo css
 */ 
                if (DEBUG == FALSE) {
                    $inccss .= $CI->minify->css->min(css_path($value));
                } else {
                    $inccss .= "<link rel='stylesheet' href='".css_path($value)."' >";
                }                
            }
            
            if (DEBUG == FALSE) {
                $inccss .= "</style>";
            }
                       
            return $inccss;            
        } catch (Exception $e) {
            ShowError($e);
        }
    }
}