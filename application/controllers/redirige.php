<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class redirige extends CI_Controller {
	
	public function carga($cached = FALSE, $param = NULL)
	{
            if ($cached){
                $this->output->cache(30);
            }
            $this->load->view($param);
	}
        
        
}
