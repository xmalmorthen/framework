<?php
if(!defined('BASEPATH')) exit('No direct script access allowed');

/*
 * Clase utilizada como hook antes de ejecutar cualquier metodo de controlador
 */
class display_override
{
/*
 * Punto inicial de la clase
 */
    function main()
    {
        $this->setOutput();
    }

/*
 * Rutina para configurar los encabezados y titulos a las páginas
 */    
    function setOutput(){               
/*
 * Llamada el helper constructor para configurar variable de sesion de informacion de pagina
 */
        $CI =& get_instance();        
        Output($CI->output->get_output());
    }
    
}
