<?php if (!defined("BASEPATH")) exit("No direct script access allowed");

class compresscodeoutput {
    public static function zip($output){        
        try{
            $CI =& get_instance();
            $search = array('/\>[^\S ]+/s','/[^\S ]+\</s','/(\s)+/s','#(?://)?<!\[CDATA\[(.*?)(?://)?\]\]>#s');
            $replace = array('>','<','\\1',"//&lt;![CDATA[\n".'\1'."\n//]]>");
            $buffer = preg_replace($search, $replace, $output);
            return $buffer;            
        } catch (Exception $e) {
            ShowError($e);
        }
    }
    
}