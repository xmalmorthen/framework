<?php 
/*Variables de colores, tamaños e imagenes*/    
    $topbar['fill'] = '#444';
    
    $logo['size']['width'] = '140';
    $logo['size']['height'] = '140';
    
    $label['h1']['title']['color'] = 'white';
    $label['h1']['title']['size'] = '2.5em';
    $label['h1']['subtitle']['color'] = '#cacaca';
    $label['h1']['subtitle']['size'] = '1.5em';
    
    $label['h2']['title']['color'] = 'orange';
    $label['h2']['title']['size'] = '2.3em';
    $label['h2']['subtitle']['color'] = '#cacaca';
    $label['h2']['subtitle']['size'] = '1.2em';
    
    $label['color'] = '#aaa';
    
    $hr[1]['color'] = '#666';
    $hr[1]['height'] = '1';
    
    $logininput['width'] = "200";
    $logininput['font-size'] = "1.1em";
    
    $btns['login']['width'] = '25';
    $btns['login']['height'] = '25';
    $btns['login']['img'] = imgs_path(__IMAGESPATH_BTNS."/user.png");
    
    $btns['register']['width'] = '20';
    $btns['register']['height'] = '20';
    $btns['register']['img'] = imgs_path(__IMAGESPATH_BTNS."/register.png");
    
    $btns['forgotpassword']['width'] = '20';
    $btns['forgotpassword']['height'] = '20';
    $btns['forgotpassword']['img'] = imgs_path(__IMAGESPATH_BTNS."/lock.png");

/*Variables de etiquetas*/    
/*formulario*/
    $label['form']['Usuario']                   = 'Usuario';
    $label['form']['Contrasenia']               = 'Contraseña';
    $input['form']['Usuario']['Placeholder']    = 'Nombre de usuario';
    $input['form']['Contrasenia']['Placeholder']= 'Contraseña';

/*Botones*/    
    $btn['btnlogin']['data-content']            = 'Iniciar sesión';
    $btn['btnregister']['data-content']         = 'Registrar usuario';
    $btn['btnforgotpassword']['data-content']   = 'Recordar contraseña';
    
?>

<style type="text/css">
.topbar{z-index: 500;}
.topbar > .fill {background-color: <?php echo $topbar['fill']; ?>; padding: 2px;}
.bussinesheader{float: left;}
.bussinesheader .logoempresa {position: absolute;width: <?php echo $logo['size']['width'];?>px;height: <?php echo $logo['size']['height'];?>px;}
.bussinesheader .datainfo {display: block;margin: 2px 0 0 <?php echo ($logo['size']['width']+5);?>px;}
.bussinesheader .nombreempresa{display: block;font-size: <?php echo $label['h1']['title']['size'];?>;color: <?php echo $label['h1']['title']['color'];?>;line-height: 1;}
.bussinesheader .detalleempresa{font-size: <?php echo $label['h1']['subtitle']['size'];?>;color: <?php echo $label['h1']['subtitle']['color'];?>;}
.bussinesheader .nombresistema{display: block;font-size: <?php echo $label['h2']['title']['size'];?>;color: <?php echo $label['h2']['title']['color'];?>;line-height: 1;line-height: 1.2;margin-top: 5px;}
.bussinesheader .detallesistema{font-size: <?php echo $label['h2']['subtitle']['size'];?>;color: <?php echo $label['h2']['subtitle']['color'];?>;line-height: 1.2;float: left}
.topbar hr {margin: 0 0;padding: 0 0;border: 0;width: 80%;color: <?php echo $hr[1]['color'];?>;background-color: <?php echo $hr[1]['color'];?>;height: <?php echo $hr[1]['height'];?>px;float: left;}
.menuheader{float: right;margin-top: 20px;}
.menuheader .inputsarea{float: left;width:285px; margin-left: 10px; text-align: right;}
.inputsarea input {display: inline; width: <?php echo $logininput['width'];?>px; font-size: <?php echo $logininput['font-size'];?>;}
.inputsarea span {width: auto; display: inline; margin-right: 3px; color: <?php echo $label['color'];?>;}
.menuheader form {width: 100%;}
.menuheader .btnarea{float: right;}
.btnarea .btnlogin{margin: 11px 0 0 5px; height: <?php echo $btns['login']['height'];?>px;width: <?php echo $btns['login']['width'];?>px;background-image: url("<?php echo $btns['login']['img'];?>");}
.menuheader nav {line-height: 2;text-align: right;margin: 52px 26px 0 0;}
.menuheader nav button {margin: 0 5px;}
.menuheader .loader {float:left; margin: 8px 0 0 20px; padding:0; display: none;}
.menuheader .loader span{display: inline; color:whitesmoke;font-size: 1em;position:relative; margin-left:2px;}
.menuheader .loader img{float: left;margin: 6px 5px 0 0;}
.menuheader .btnregister{height: <?php echo $btns['register']['height'];?>px;width: <?php echo $btns['register']['width'];?>px;background-image: url("<?php echo $btns['register']['img'];?>");}
.menuheader .btnforgotpassword{height: <?php echo $btns['forgotpassword']['height'];?>px;width: <?php echo $btns['forgotpassword']['width'];?>px;background-image: url("<?php echo $btns['forgotpassword']['img'];?>");}
</style>

<div class="bussinesheader">
    <img class="logoempresa" src="<?php echo ResourceString("Etiquetas,SysInfo,Empresa,Logo"); ?>" alt="Logo Empresa" />
    <div class="datainfo">
        <span class="nombreempresa"><?php echo ResourceString("Etiquetas,SysInfo,Empresa,NombreEmpresa"); ?></span>
        <span class="detalleempresa"><?php echo ResourceString("Etiquetas,SysInfo,Empresa,Detalle"); ?></span>
    </div>
    <div class="datainfo sisinfo">
        <span class="nombresistema"><?php echo ResourceString("Etiquetas,SysInfo,Sistema,NombreSistema"); ?></span>
        <hr/>
        <span class="detallesistema"><?php echo ResourceString("Etiquetas,SysInfo,Sistema,Detalle"); ?></span>
    </div>
</div>

<div class="menuheader">
    <div class="inputsarea">
        <span><?php echo $label['form']['Usuario'];?></span>
        <input type="text" placeholder="<?php echo $input['form']['Usuario']['Placeholder'];?>">
        <span><?php echo $label['form']['Contrasenia'];?></span>
        <input type="password" placeholder="<?php echo $input['form']['Contrasenia']['Placeholder'];?>">
    </div>
    <div class="btnarea"> 
        <button class="btnlogin" 
                type="button"
                rel="popover"
                data-content="<?php echo $btn['btnlogin']['data-content'];?>"
                onclick="login()"></button>
    </div>
    
    <nav>
        <div class="loader">
            <img src="<?php echo imgs_path(__ANIMATEDGIFS."/facebookloader.gif"); ?>"/>
            <span>Cargando, favor de esperar...</span>
        </div>
                
        <button class="btnregister" 
                type="button" 
                rel="popover"
                data-content="<?php echo $btn['btnregister']['data-content'];?>">
            
        </button>
        <button class="btnforgotpassword" 
                type="button"
                rel="popover"
                data-content="<?php echo $btn['btnforgotpassword']['data-content'];?>">
        </button>
    </nav>
</div>

<script type="text/javascript"> 

/*Referencias a botones*/    
    var btnregister         = $(".menuheader .btnregister"),
        btnforgotpassword   = $(".menuheader .btnforgotpassword"),
        btnlogin            = $(".menuheader .btnlogin");

/*referenciar los botones al popover*/
    function btnspopover(){
        var template = '<div class="arrow"></div><div class="inner" style="width:auto;"><img style="position: absolute;margin: -15px 0 0 -15px" src="<?php echo imgs_path(__IMAGESPATH_BTNS."/info.png"); ?>" alt="Información" /><div class="content" ><span style="font-size: 1.3em;font-weight: bold;color:#76AB3A;"></span></div></div>';
        
        /* boton login*/
        btnlogin.popover({animate : true, 
                             delayIn: 1000, 
                             offset: 5, 
                             placement : 'left',
                             template: template});            
        /* boton registrar usuario*/
        btnregister.popover({animate : true, 
                             delayIn: 1000, 
                             offset: 5, 
                             placement : 'left',
                             template: template});
        /** boton cambio de pasword*/                         
        btnforgotpassword.popover({animate : true, 
                             delayIn: 1000, 
                             offset: 5, 
                             placement : 'left',
                             template: template}); 
    }
    
    function login(){
        $(".menuheader .loader").show();
    }
    
    $(function(){
        btnspopover();
    });
</script>
