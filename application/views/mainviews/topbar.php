<?php
/*
 * Archivo php con código css para inyectar código php
 */
    echo css_access(array("topbar.php")); 
?>

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
    <form action="">
        <div class="inputsarea"> 
            <input class="" type="text" placeholder="Username">
            <input class="" type="password" placeholder="Password">
        </div>
        <div class="btnarea"> 
            <button class="btnlogin" type="submit" title="Iniciar sesión"></button>
        </div>
    </form>
    <nav>
        <button class="btnregister" 
                type="button" 
                rel="popover"
                data-content="And here's some amazing content. It's very engaging. right?"
                data-original-title="A title"
                ></button>
        <button class="btnforgotpassword" type="button" title="Recordar Contraseña"></button>
    </nav>
    
    
</div>

<script type="text/css">
    ._arrow{top:50%;left:-4px;margin-top:-10px;border-top:10px solid red;border-bottom:10px solid transparent;border-right:10px solid rgba(0, 0, 0, 0.3);}
</script>

<script type="text/javascript"> 
    $(function(){
        var btnregister = $(".menuheader .btnregister");
            btnforgotpassword = $(".menuheader .btnforgotpassword");

        btnregister.popover({title: 'Hello', content: 'World', animate : true, delayIn: 500, offset: 10, placement : 'left' },'show');
        
        
        $("#logotipo").popover({title: 'Hello', 
                                content: 'World', 
                                animate : true, 
                                delayIn: 500, 
                                offset: 10, 
                                placement : 'right'});
        
        
    });
    
    

    
    
</script>
