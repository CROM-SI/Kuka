
<div id="form">
    
    <h3 class="textoregistrarcliente">Ingresar Producto</h3>
    <h5>Los campos marcados en <h10 class="campoenrojo">*</h10> son obligatorios</h5>
    <br/>
    
    <br/>
    <h10 class="campoenrojo">*</h10>
    Nombre: <input style="color:black;
                   margin-left: 15%; 
                   margin-bottom:2%;
                   width: 36%;
                   border-radius: 6px" 
                   type="text" id="nombrePro"  required="true" maxlength="20" />
    <br/>
    <h10 class="campoenrojo">*</h10>
    Precio: <input type="text" 
                   style="color:black;
                   margin-left: 15%; 
                   margin-bottom:1%; 
                   width: 39%;
                   border-radius: 6px"
                   id="precioPro"  required="true" maxlength="6" />
    <br/>
    <h10 class="campoenrojo">*</h10>
    Stock: <input type="text" 
                 style="color:black;
                 margin-left: 15%; 
                 margin-bottom:2%; 
                 width: 35%;
                 border-radius: 6px" 
                 id="stockPro"  required="true" maxlength="4" />
    <br/>
    <h10 class="campoenrojo">*</h10>Categoria:
    <select id="categoria">
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

