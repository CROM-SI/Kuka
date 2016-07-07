<form method="post" action="<?=base_url()?>Controlador/ingresarProducto">
<div id="form">
    
    <h3>Ingresar Producto</h3>
    
    <br/>
    Nombre: <input type="text" name="nombrePro" class="input" required="true" />
    <br/>
    Precio: <input type="text" name="precioPro" class="input" required="true" />
    <br/>
    Stock: <input type="text" name="stockPro" class="input" required="true" />
    <br/>
    Categoria: <input type="text" name="categoriaPro" class="input" required="true" />
    <br/>
    
    <button id="ingresarPro" class="btn btn-succes">Guardar</button>
    
    
</div>
</form>
