<!DOCTYPE html>
<html lang="es">
  <head>
<!--codigo para refrescar página automaticamente modalidad debug-->
    {refresh}
<!--icono de titulo en browser      -->
    <link rel="shortcut icon" href="{shortcuticon}" />
<!--tipo de contenido y codificación    -->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<!--titulo de aplicación web    -->
    <title>{applicationtitle}</title>            
<!--metadatos    -->
    {metadescription}
    {metakeywords}
<!--control de ejecución de javascript    -->
    <noscript>
<!--llamada a controlador noscript-->
      <meta http-equiv="refresh" content="0;URL={noscript}" />
    </noscript>                
<!-- Include Css -->        
    {css}    
        
<!-- Include Js -->
    {js}        
  </head>
  <body>
<!--Top Bar-->
     <div class="topbar">
        <div class="fill">
            <div class="container">
                {topbar}                
            </div>
        </div>
      </div>
    </div>
      
    <div class="container">
<!--div principal-->
        <div id="main_placeholder">
<!--cabecera de contenido principal-->
            <header>            
                <?php echo $this->load->view("mainviews/Header",TRUE); ?>
            </header>
<!--contenido principal-->
            <div id="main_content">
<!--menu de navegación-->
                <nav>
                </nav>
<!--sección de contenido principal-->
                <section>
                    <?php echo isset($output) ? $output : "" ;?>
                </section>
            </div>
<!--pie de página de contenido principal-->
            <footer>
                <?php echo $this->load->view("mainviews/Footer",TRUE); ?>
            </footer>
          </div>
    </div>
  </body>
</html>