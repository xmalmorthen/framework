<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/* 
 * Archivo de recursos para las cadenas de salida
*/
 
if ( ! function_exists('ResourceString'))
{                                         
    function ResourceString($Resource = NULL){
        try {
            if (!$Resource){
                throw new Exception("Falta indicar el parámetro del recurso, imposible continuar.",1);
            }           
            $dataparts = explode(',',$Resource);
            
            $ResourcesArray = new ResourcesStrings();           
            $part =  $ResourcesArray->getResourcesArray();
                        
            foreach ($dataparts as $value) {
                if (array_key_exists($value, $part)){
                        $part = $part[$value];
                } else {
                        $part = NULL;
                        break;
                }
            }
            
            if ($part){
                return $part;
            } else {
                throw new Exception ("No se encuentra la clave en el arreglo de recursos.",2);
            }
        } catch (Exception $e){
            ShowError($e);
        }        
    }
}