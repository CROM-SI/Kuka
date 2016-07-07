<div id="content">
    <h2 style="text-align: center">Bienvenido Adminstrador</h2>

    <br>
    <br>

    <a href="#" id="btn_regBod" class="" onclick="">Registrar Nuevo Encargado de bodega </a>
    <br/><br/>
    
    <a href="#" id="btn_regCli" class="" onclick="cargarRegistroCli()" >Registrar nuevo Cliente</a>
    <br><br>
    <a href="#" id="btn_Prod" class="" onclick="">Ingresar Productos </a>
    <br/><br/> <br/><br/>
    <a id="salirAdm"  href="<?=base_url()?>Controlador/salir">Salir</a>
</div>

<div id="menuAdm"></div>

<script>
    $("#header").accordion({
        collapsible: true,
        heightStyle: "content",
        active: 0,
        icons: {"header": "ui-icon-plus", "activeHeader": "ui-icon-minus"}

    });
    $("#tablaInicio").html('');
</script>