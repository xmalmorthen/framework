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
            $CI->load->library('parser_views');
            
/*
 * Refresh
 */            
            $Data['refresh'] = defined('__REFRESH') ? '<meta http-equiv="refresh" content="'.__REFRESH.'" />' : '';
                        
/*
 * Shortcuticon
 */
            $Data['shortcuticon'] = imgs_path('/main/favicon.ico');

/*
 * Cargar la salida original
 */            
            $Data['output'] = $output;
            
/*
 * Application title
 */            
            $Data['applicationtitle'] = Get_SessionPageInfo('Head');

/*
 * Meta datas
 */            
            $Data['metadescription'] = "<meta name='description' content='".ResourceString("Etiquetas,Metadata,Description")."'/>";
            $Data['metakeywords'] = "<meta name='keywords' content='".ResourceString("Etiquetas,Metadata,Description")."'/>";
            
/*
 * No script
 */            
            $Data['noscript'] = site_url()."/noscript";

/*
 * Css
 */            
    /*Cargar archivos css principales*/                        
            $Data['css'] = css_access(array("bootstrap.css","main.css"));

/*
 * Js
 */            
    /*Cargar archivos javascript principales*/            
            $Data['js'] = js_access (array("jquery-1.7.min.js",
                                           "bootstrap-twipsy.js",
                                           "bootstrap-popover.js"));
            
            $CI->load->library('parser');
            
/*
 * Topbar
 */      
            $Data['topbar'] = topbar::parse();
            
/*
 * Parsear datos
 */                        
            $finaloutput  = $CI->parser->parse("mainviews/MainPage", $Data);
                        
            if (DEBUG == FALSE) {
/*
 * Si la modalidad no es de desarrollo, agregamos la libreria para comprimir codigo de salida
 */                
                $CI->load->library('compresscodeoutput');
/*
 * Impirmir salida a navegador con código comprimido
 */                
                $finaloutput = compresscodeoutput::zip($finaloutput);            
                
            }
            
/*
 * Código para guardar cache
 */         
            if (DEBUG == FALSE) {
                $CI->output->cache(__CACHETIME);
                $CI->output->_write_cache($finaloutput);
            }
/*
 * Salida final
 */                        
            echo $finaloutput;
            
        } catch (Exception $e) {
            ShowError($e);
        }
    }
}