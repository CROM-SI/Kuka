<!DOCTYPE html>
<html lang="es">
    <head>
        <link rel="stylesheet" type="text/css" href="<?= base_url() ?>../css/jquery-ui.css">
        <link rel="stylesheet" type="text/css" href="<?= base_url() ?>../css/micss.css">
        <script type="text/javascript" src="<?= base_url() ?>../js/jquery.js"></script>
        <script type="text/javascript" src="<?= base_url() ?>../js/jquery-ui.js"></script>
        <script type="text/javascript" src="<?= base_url() ?>../js/funciones.js"></script>
        <script type="text/javascript">
            var base_url = '<?= base_url() ?>';
        </script>
        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" 
              integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7"
              crossorigin="anonymous">
    </head>
    <body>

        <h1 id="logo">kuka</h1>
        <div id="me">
            <ul class="menu">
                <li> <a href="<?=base_url()?>Controlador/cargarInicio" >Inicio</a></li>
                <li> <a href="acercade.html">Acerca de</a>
                    <ul>
                        <li> <a href="historia.html">Historia</a></li>
                        
                        <li> <a href="sede.html">Sede</a></li>
                    </ul> 
                </li>
                <li> <a href="contacto.html" >Contacto</a>
                    
                </li>
                <li> <a href="<?=base_url()?>Controlador/cargarPedido" >Pedido</a></li>
                <li> <a href="<?=base_url()?>Controlador/intranet" >Intranet</a></li>
            </ul>  

        </div>
        <br/>
        
