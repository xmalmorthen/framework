<style type="text/css">
.topbar{
    z-index: 500;
}

.topbar > .fill {
    background-color: {fill}; 
    padding: 2px;
}

.bussinesheader{
    float: left;
}

.bussinesheader .logoempresa {
    position: absolute;
    width: {logo_size_width}px;
    height: {logo_size_height}px;
}

.bussinesheader .datainfo {
    display: block;
    margin: 2px 0 0 {datainfo_margin_left}px;
}

.bussinesheader .nombreempresa{
    display: block;
    font-size: {label_h1_title_size};
    color: {label_h1_title_color};
    line-height: 1;
}

.bussinesheader .detalleempresa{
    font-size: {label_h1_subtitle_size};
    color: {label_h1_subtitle_color};
}

.bussinesheader .nombresistema{
    display: block;
    font-size: {label_h2_title_size};
    color: {label_h2_title_color};
    line-height: 1.2;
    margin-top: 5px;
}

.bussinesheader .detallesistema{
    font-size: {label_h2_subtitle_size};
    color: {label_h2_subtitle_color};
    line-height: 1.2;
    float: left;
}

.topbar hr {
    margin: 0;
    padding: 0;
    border: 0;
    width: 80%;
    color: {hr_1_color};
    background-color: {hr_1_color};
    height: {hr_1_height}px;
    float: left;
}

.menuheader{
    float: right;
    margin-top: 20px;
}

.menuheader .inputsarea{
    float: left;
    width:285px; 
    margin-left: 10px; 
    text-align: right;
}

.inputsarea input {
    display: inline; 
    width: {logininput_width}px; 
    font-size: {logininput_font_size};
}

.inputsarea span {
    width: auto; 
    display: inline; 
    margin-right: 3px; 
    color: {label_color}
}

.menuheader form {
    width: 100%;
}

.menuheader .btnarea{
    float: right;
}

.btnarea .btnlogin{
    margin: 11px 0 0 5px; 
    height: {btns_login_height}px;
    width: {btns_login_width}px;
    background-image: url("{btns_login_img}");
}
    
.menuheader nav {
    line-height: 2;
    text-align: right;
    margin: 52px 26px 0 0;
}

.menuheader nav button {
    margin: 0 5px;
}

.menuheader .loader {
    float:left; 
    margin: 2px 0 0 20px; 
    padding:0; 
    display: none;
}

.menuheader .loader span{
    display: inline; 
    color:whitesmoke;
    font-size: 1em;
    position:relative; 
    margin-left:2px;
}

.menuheader .loader img{
    float: left;
    margin: 6px 5px 0 0;
}

.menuheader .btnregister{
    height: {btns_register_height}px;
    width: {btns_register_width}px;
    background-image: url("{btns_register_img}");
}

.menuheader .btnforgotpassword{
    height: {btns_forgotpassword_height}px;
    width: {btns_forgotpassword_width}px;
    background-image: url("{btns_forgotpassword_img}");}
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
        <span>{label_form_Usuario}</span>
        <input type="text" placeholder="{input_form_Usuario_Placeholder}">
        <span>{label_form_Contrasenia}</span>
        <input type="password" placeholder="{input_form_Contrasenia_Placeholder}">
    </div>
    <div class="btnarea"> 
        <button class="btnlogin" 
                type="button"
                rel="popover"
                data-content="{btn_btnlogin_data_content}"
                onclick="login()"></button>
    </div>
    
    <nav>
        <div class="loader">
            <img src="{loadergif}"/>
            <span>{loaderlabel}</span>
        </div>
                
        <button class="btnregister" 
                type="button" 
                rel="popover"
                data-content="{btn_btnregister_data_content}">
            
        </button>
        <button class="btnforgotpassword" 
                type="button"
                rel="popover"
                data-content="{btn_btnforgotpassword_data_content}">
        </button>
    </nav>
</div>
