<!DOCTYPE html>
<html lang="es">
  <head>
<!--icono de titulo en browser      -->
    <link rel="shortcut icon" href="<?php echo imgs_path('main/favicon.ico'); ?>" />
<!--tipo de contenido y codificación    -->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!--titulo de aplicación web    -->
    <title><?php echo utf8_encode(Get_SessionPageInfo('Head')); ?></title>            
<!--control de ejecución de javascript    -->
    <noscript>
<!--llamada a controlador noscript-->
      <meta http-equiv="refresh" content="0;URL=<?php echo site_url(); ?>/noscript" />
    </noscript>                
<!-- Include Css -->        
        <?php echo isset($css) && ($css) ? $css : ''; ?>
<!-- Include Js -->
        <?php echo $js ? $js : '' ; ?>    
  </head>
  <body>
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
<!--pie de pagina de contenido principal-->
        <footer>
            <?php echo $this->load->view("mainviews/Footer",TRUE); ?>
        </footer>
      </div>
  </body>
</html>