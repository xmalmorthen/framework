<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/* 
 * Archivo de recursos para las cadenas de salida
*/
 
if ( ! function_exists('Set_SessionPageInfo'))
{                                         
    function Set_SessionPageInfo($Resource = NULL){
        try {
            if (!$Resource) {
                throw new Exception (ResourceString("Etiquetas,Error,Parametro"),1);
            }
            
            $data['PageInfo'] = ResourceString($Resource);
            
            $CI = &get_instance();
            $CI->session->set_userdata($data);
        } catch (Exception $e){
            ShowError($e);
        }        
    }
}

if ( ! function_exists('Get_SessionPageInfo'))
{                                         
    function Get_SessionPageInfo($key = NULL){
        try {
            $CI = &get_instance();
            $data = $CI->session->userdata('PageInfo');
            return $key ? $data[$key] : $data;
        } catch (Exception $e){
            ShowError($e);
        }        
    }
}