<!DOCTYPE html>
<html lang="es">
  <head>
<!--codigo para refrescar página automaticamente modalidad debug      -->
    <?php  
      if( defined('__REFRESH')){ echo '<meta http-equiv="refresh" content="'.__REFRESH.'" />'; }          
    ?>      
<!--icono de titulo en browser      -->
<link rel="shortcut icon" href="<?php echo imgs_path('/main/favicon.ico'); ?>" />
<!--tipo de contenido y codificaci�n    -->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!--titulo de aplicaci�n web    -->
    <title><?php echo Get_SessionPageInfo('Head'); ?></title>            
<!--metadatos    -->
    <meta name="description" content="<?php echo ResourceString("Etiquetas,Metadata,Description"); ?>" />
    <meta name="keywords" content="<?php echo ResourceString("Etiquetas,Metadata,Description"); ?>" />
<!--control de ejecuci�n de javascript    -->
    <noscript>
<!--llamada a controlador noscript-->
      <meta http-equiv="refresh" content="0;URL=<?php echo site_url(); ?>/noscript" />
    </noscript>                
<!-- Include Css -->        
        <?php echo isset($css) && ($css) ? $css : ''; ?>
<!-- Include Js -->
        <?php echo isset($js) && ($js) ? $js : '' ; ?>    
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
<!--menu de navegaci�n-->
            <nav>
            </nav>
<!--secci�n de contenido principal-->
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