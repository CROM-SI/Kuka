<form method="post" action="<?=base_url()?>Controlador/ingresarProducto">
<div id="form">
    
    <h3>Ingresar Producto</h3>
    <h5>Los campos marcados en <h10 class="campoenrojo">*</h10> son obligatorios</h5>
    <br/>
    
    <br/>
    <h10 class="campoenrojo">*</h10>Nombre: <input style="color:black;margin-left: 15%; margin-bottom:2%; width: 36%;border-radius: 6px" type="text" name="nombrePro" class="input" required="true" />
    <br/>
    <h10 class="campoenrojo">*</h10>Precio: <input type="text" style="color:black;margin-left: 15%; margin-bottom:1%; width: 39%;border-radius: 6px" name="precioPro" class="input" required="true" />
    <br/>
    <h10 class="campoenrojo">*</h10>Stock: <input type="text" style="color:black;margin-left: 15%; margin-bottom:2%; width: 35%;border-radius: 6px" name="stockPro" class="input" required="true" />
    <br/>
    <h10 class="campoenrojo">*</h10>Categoria: <input type="text" style="color:black;margin-left: 15%; margin-bottom:2%; width: 36%;border-radius: 6px" name="categoriaPro" class="input" required="true" />
    <br/>
    
    <button id="ingresarPro" class="btn btn-succes">Guardar</button>
    
    
</div>
</form>
