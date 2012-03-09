<?php if (!defined("BASEPATH")) exit("No direct script access allowed");

class parser_views{
    
}

class topbar {
        
    public static function parse(){
        $parse = new topbar();
        
        $model = $parse->generatemodel();
        
        $CI = & get_instance();
        
        return $CI->parser->parse("mainviews/topbar", $model);        
    }
    
    private function generatemodel(){

    /*Variables de colores, tamaños e imagenes*/    
        $data['fill'] = '#444';

        $data['logo_size_width'] = '140';
        $data['logo_size_height'] = '140';
        
        $data['datainfo_margin_left'] = $data['logo_size_width'] + 5;

        $data['label_h1_title_color'] = 'white';
        $data['label_h1_title_size'] = '2.5em';
        $data['label_h1_subtitle_color'] = '#cacaca';
        $data['label_h1_subtitle_size'] = '1.5em';

        $data['label_h2_title_color'] = 'orange';
        $data['label_h2_title_size'] = '2.3em';
        $data['label_h2_subtitle_color'] = '#cacaca';
        $data['label_h2_subtitle_size'] = '1.2em';

        $data['label_color'] = '#aaa';

        $data['hr_1_color'] = '#666';
        $data['hr_1_height'] = '1';

        $data['logininput_width'] = "200";
        $data['logininput_font_size'] = "1.1em";

        $data['btns_login_width'] = '25';
        $data['btns_login_height'] = '25';
        $data['btns_login_img'] = imgs_path(__IMAGESPATH_BTNS."/user.png");

        $data['btns_register_width'] = '20';
        $data['btns_register_height'] = '20';
        $data['btns_register_img'] = imgs_path(__IMAGESPATH_BTNS."/register.png");

        $data['btns_forgotpassword_width'] = '20';
        $data['btns_forgotpassword_height'] = '20';
        $data['btns_forgotpassword_img'] = imgs_path(__IMAGESPATH_BTNS."/lock.png");

    /*Variables de etiquetas*/    
    /*formulario*/
        $data['label_form_Usuario']                   = 'Usuario';
        $data['label_form_Contrasenia']               = 'Contraseña';
        $data['input_form_Usuario_Placeholder']    = 'Nombre de usuario';
        $data['input_form_Contrasenia_Placeholder']= 'Contraseña';

    /*Botones*/    
        $data['btn_btnlogin_data_content']            = 'Iniciar sesión';
        $data['btn_btnregister_data_content']         = 'Registrar usuario';
        $data['btn_btnforgotpassword_data_content']   = 'Recordar contraseña';

        $data['loadergif'] = imgs_path(__ANIMATEDGIFS."/facebookloader.gif");
        $data['loaderlabel'] = 'Cargando, favor de esperar...';
        
        return $data;
    }
}