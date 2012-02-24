<?php
if(!defined('BASEPATH')) exit('No direct script access allowed');

/*
 * Clase utilizada como hook antes de ejecutar cualquier metodo de controlador
 */
class post_controller_constructor
{
/*
 * Punto inicial de la clase
 */
    function main()
    {
        $this->setInfos();
    }

/*
 * Rutina para configurar los encabezados y titulos a las páginas
 */    
    function setInfos(){               
/*
 * Llamada el helper constructor para configurar variable de sesion de informacion de pagina
 */        
        Construct();        
    }
    
}
