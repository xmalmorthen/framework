<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class redirige extends CI_Controller {
	
	public function carga($param = NULL)
	{
            $this->load->view($param);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */