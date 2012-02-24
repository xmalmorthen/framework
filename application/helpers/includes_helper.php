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
    function js_access($js='')
    {
        try{
            
            if (! $js) return '';
            
            $incjs = '';
            foreach($js as $value){
                if (!$value) continue;
                
                $datapart = explode('.',$value);                
                if (count ($datapart) > 1) {
                    switch ($datapart[count($datapart)-1]) {
                        case 'js':
                            $incjs .= "<script type='text/javascript' src='".jss_path($value)."'></script>\n";
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

            return $incjs;            
        } catch (Exception $e) {
            ShowError($e);
        }
    }
}

//if ( ! function_exists('css_access'))
//{
//	function css_access($css='')
//	{           
//            $_css   = 'resources/css/';
//            
//            if (! $css) return '';
//            
//            $include = '';
//            foreach ($css as $value) {
//                //$include .= $css ? "<link type='text/css' href='".DbClass::Parameters('css').$value."' rel='stylesheet' />\n" : '';
//                $include .= $css ? "<link type='text/css' href='".base_url().$_css.$value."' rel='stylesheet' />\n" : '';                
//            }
//            return $include;
//	}
//}
//
//if ( ! function_exists('imgs_path'))
//{
//	function imgs_path($cat='')
//	{
//            $_imgs  = base_url().'resources/images/';
//            //return DbClass::Parameters('imgs_path').$cat;
//            return $_imgs.$cat;
//	}
//}
//
//if ( ! function_exists('tinytable_js_access'))
//{
//	function tinytable_js_access($js='')
//	{
//            $_js   = 'resources/';
//            
//            if (! $js) return '';
//            
//            $include = '';
//            foreach($js as $value)
//            {
//                $include .= $js ? "<script type='text/javascript' src='".base_url().$_js.'TinyTable/'.$value."'></script>\n" : '';
//            }
//            return $include;
//	}
//}
//
//if ( ! function_exists('tinytable_css_access'))
//{
//	function tinytable_css_access($css='')
//	{
//            $_css   = 'resources/';
//            
//            if (! $css) return '';
//            
//            $include = '';
//            foreach ($css as $value) {
//                $include .= $css ? "<link type='text/css' href='".base_url().$_css.'TinyTable/'.$value."' rel='stylesheet' />\n" : '';
//            }
//            return $include;
//	}
//}
//
//if ( ! function_exists('fancybox_js_access'))
//{
//	function fancybox_js_access($js='')
//	{
//            $_js   = 'resources/';
//            
//            if (! $js) return '';
//            
//            $include = '';
//            foreach($js as $value)
//            {
//                $include .= $js ? "<script type='text/javascript' src='".base_url().$_js.'fancybox/'.$value."'></script>\n" : '';
//            }
//            return $include;
//	}
//}
//
//if ( ! function_exists('fancybox_css_access'))
//{
//	function fancybox_css_access($css='')
//	{
//            $_css   = 'resources/';
//            
//            if (! $css) return '';
//            
//            $include = '';
//            foreach ($css as $value) {
//                $include .= $css ? "<link type='text/css' href='".base_url().$_css.'fancybox/'.$value."' rel='stylesheet' />\n" : '';
//            }
//            return $include;
//	}
//}
//
//if ( ! function_exists('dialogs_imgs_path'))
//{
//	function dialogs_imgs_path($cat='')
//	{
//            $_imgs  = base_url().'resources/images/iconsdialogs/';
//            //return base_url().DbClass::Parameters('dialogs_imgs_path').$cat;
//            return $_imgs.$cat;            
//	}
//}