<form method="post" action="<?=base_url()?>Controlador/ingresarProducto">
<div id="form">
    
    <h3 class="textoregistrarcliente">Ingresar Producto</h3>
    <h5>Los campos marcados en <h10 class="campoenrojo">*</h10> son obligatorios</h5>
    <br/>
    
    <br/>
    <h10 class="campoenrojo">*</h10>Nombre: <input style="color:black;margin-left: 15%; margin-bottom:2%; width: 36%;border-radius: 6px" type="text" name="nombrePro" class="input" required="true" maxlength="30" />
    <br/>
    <h10 class="campoenrojo">*</h10>Precio: <input type="text" style="color:black;margin-left: 15%; margin-bottom:1%; width: 39%;border-radius: 6px" name="precioPro" class="input" required="true" />
    <br/>
    <h10 class="campoenrojo">*</h10>Stock: <input type="text" style="color:black;margin-left: 15%; margin-bottom:2%; width: 35%;border-radius: 6px" name="stockPro" class="input" required="true" />
    <br/>
    <h10 class="campoenrojo">*</h10>Categoria:
    <select id="categoria" name="categoria">
        <option value="0">Seleccione</option>
        <?php
        foreach ($arrCategorias as $valor) {
            echo '<option value="' . $valor->id_categoria . '">' . $valor->nombre_categoria . '</option>';
        }
        ?>
    </select>
    <br/>
    
    <button id="ingresarPro" class="btn btn-succes">Guardar</button>
    
    
</div>
</form>
