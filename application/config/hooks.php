<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
| -------------------------------------------------------------------------
| Hooks
| -------------------------------------------------------------------------
| This file lets you define "hooks" to extend CI without hacking the core
| files.  Please see the user guide for info:
|
|	http://codeigniter.com/user_guide/general/hooks.html
|
*/

$hook['post_controller_constructor'] = array(
                                'class'    => 'post_controller_constructor',
                                'function' => 'main',
                                'filename' => 'post_controller_constructor.php',
                                'filepath' => 'hooks'
                                );

$hook['display_override'] = array(
                                'class'    => 'display_override',
                                'function' => 'main',
                                'filename' => 'display_override.php',
                                'filepath' => 'hooks'
                                );



/* End of file hooks.php */
/* Location: ./application/config/hooks.php */