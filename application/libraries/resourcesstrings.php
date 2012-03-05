<?php if (!defined("BASEPATH")) exit("No direct script access allowed");

class ResourcesStrings {
    private $Resources = NULL;
    
    public function __construct() {
        /*
        obtenemos la uri para configurar las cadenas head en la matriz de cadenas
        */
            $uri = utils::GetUri();
                        
        /*
        recursos de base de datos
        */
            $this->Resources['Bd']
                    ['Error']
                    ['Bd']         = array(
                                                "Head"          => "{$uri} - Error de Base de Datos.",
                                                "Title"         => "Error de base de datos",
                                                "Icon"          => imgs_path(__IMAGESPATH_BD."/BdError.png"),
                                                "Description"   => "Ocurrió un error con la base de datos, favor te intentarlo de nuevo."
                                        );
            $this->Resources['Bd']
                    ['Error']
                    ['EjecutarProcedumiento']
                                    = array(
                                                "Head"          => "{$uri} - Error de Base de Datos.",
                                                "Title"         => "Error de ejecución",
                                                "Icon"          => imgs_path(__IMAGESPATH_BD."/BdError.png"),
                                                "Description"   => "Ocurrió un problema al ejecutar la acción en la base de datos, favor de intentarlo de nuevo."
                                        );
            $this->Resources['Bd']
                    ['Error']
                    ['Guardar']
                                    = array(
                                                "Head"          => "{$uri} - Error de Base de Datos.",
                                                "Title"         => "Error de ejecución",
                                                "Icon"          => imgs_path(__IMAGESPATH_BD."/BdError.png"),
                                                "Description"   => "Ocurrió un problema al intentar guardar en la base de datos, favor de intentarlo de nuevo."
                                        );

            $this->Resources['Bd']
                    ['Error']
                    ['Eliminar']
                                    = array(
                                                "Head"          => "{$uri} - Error de Base de Datos.",
                                                "Title"         => "Error al eliminar",
                                                "Icon"          => imgs_path(__IMAGESPATH_BD."/BdError.png"),
                                                "Description"   => "Ocurrió un problema al intentar eliminar en la base de datos, favor de intentarlo de nuevo."
                                        );

        /*
        recursos de autenticacion
        */
            $this->Resources['Autenticacion']
                    ['Exito']
                                    = array(
                                                "Head"          => "{$uri} - Autenticación correcta.",
                                                "Title"         => "Autenticación",
                                                "Icon"          => imgs_path(__IMAGESPATH_AUTH."/authok.png"),
                                                "Description"   => "Usuario autenticado correctamente."
                                        );
            $this->Resources['Autenticacion']
                    ['Denegado']   = array(
                                                "Head"          => "{$uri} - Acceso Denegado",
                                                "Title"         => "Acceso Denegado",
                                                "Icon"          => imgs_path(__IMAGESPATH_AUTH."/authno.png"),
                                                "Description"   => "No tiene permisos suficientes para ingresar a ésta área del sitio."
                                        );

        /*
        recursos de sesion
        */             
            $this->Resources['Sesion']
                    ['Error']   = array(
                                                "Head"          => "{$uri} - Error al sesionar",
                                                "Title"         => "Error al sesionar",
                                                "Icon"          => imgs_path(__IMAGESPATH_AUTH."/sesno.png"),
                                                "Description"   => "Usuario y/o contraseña incorrectos o no tiene privilegios suficientes para ingresar a ésta área del sitio."
                                        );

            $this->Resources['Sesion']
                    ['Exito']   = array(
                                                "Head"          => "{$uri} - Sesionado correctamente",
                                                "Title"         => "Sesionado correctamente",
                                                "Icon"          => imgs_path(__IMAGESPATH_AUTH."/sesok.png"),
                                                "Description"   => "Usuario sesionado correctamente."
                                        );            

                                                
        /*
        recursos de info general del sistema
        */           
            $this->Resources['Etiquetas']
                    ['SysInfo']
                    ['Empresa']       = array (
                                                'Logo'   => imgs_path(__IMAGESPATH_BUSSINESS."/logo.jpg"),
                                                'NombreEmpresa' => "APILAC",
                                                "Detalle" => "Administración portuaria integral de Lázaro Cárdenas"
                                            );
                                                
            $this->Resources['Etiquetas']
                    ['SysInfo']
                    ['Sistema']       = array (
                                                'NombreSistema' => "Sis[CoFor]",
                                                "Detalle" => "Sistema de contról de formatos"
                                            );
            
        /*
        recursos de etiquetas
        */           
            $this->Resources['Etiquetas']
                    ['Metadata']       = array (
                                                'Description'   => "Sistema de contról de formatos, APILAC."
                                            );                                                
                                                
            $this->Resources['Etiquetas']
                    ['Error']       = array (
                                                'Parametro'     => "Falta el parámetro, favor de revisar.",
                                                'Formato'       => "Formato incorrecto, favor de revisar.",
                                                'RutaArchivo'   => "La ruta a la carpeta o archivo no se encuentra, favor de revisar."
                                            );
                                                
        /*
         * etiquetas de menu
         */
            $this->Resources['Etiquetas']
                    ['Menu']
                    ['Inicio']   = array(
                                                "Head"          => "{$uri} - Página principal",
                                                "Title"         => "APILAC",
                                                "Icon"          => imgs_path(__IMAGESPATH_MNU."/inicio.png"),
                                                "Description"   => "Sistema de control de formatos...!!!"
                                        );
        
    }    
    
    function utf8_array_decode($input) 
    { 
        $return = array(); 

        foreach ($input as $key => $val) 
        { 
            if( is_array($val) ) 
            { 
                $return[$key] = $this->utf8_array_decode($val); 
            } 
            else 
            { 
                $return[$key] = utf8_decode($val); 
            } 
        } 
        return $return;           
    } 
    
    public function getResourcesArray(){        
        return $this->Resources;
    }
}