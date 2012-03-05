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
    <nav style="border: 1px solid red; color: white;">
        aqui va menu de opciones...!!!
    </nav>
    <form action="">
        <div class="inputsarea"> 
            <input class="" type="text" placeholder="Username">
            <input class="" type="password" placeholder="Password">
        </div>
        <div class="btnarea"> 
            <button class="btnlogin" type="submit" title="Iniciar sesión"></button>
        </div>                        
    </form>
</div>
