<form method="post" action="<?=base_url()?>Controlador/registrarBod">
<div id="form">
    
    <h3 class="textoregistrarcliente">Registrar encargado de bodega</h3>
    <h5>Los campos marcados en <h10 class="campoenrojo">*</h10> son obligatorios</h5>
    <br/>
    
    <br/>
    <h10 class="campoenrojo">*</h10>Nombre: <input style="color:black;margin-left: 15%; margin-bottom:2%; width: 36%;border-radius: 6px" type="text" name="nombreBod" class="input" required="true" />
    <br/>
    <h10 class="campoenrojo">*</h10>Apellido: <input type="text" style="color:black;margin-left: 15%; margin-bottom:1%; width: 39%;border-radius: 6px" name="apellidoBod" class="input" required="true" />
    <br/>
    <h10 class="campoenrojo">*</h10>Rut: <input type="text" style="color:black;margin-left: 15%; margin-bottom:2%; width: 35%;border-radius: 6px" name="rutBod" class="input" required="true" />
    <br/>
    <h10 class="campoenrojo">*</h10>Nickname: <input type="text" style="color:black;margin-left: 15%; margin-bottom:2%; width: 36%;border-radius: 6px" name="nicknameBod" class="input" required="true" />
    <br/>
    <h10 class="campoenrojo">*</h10>Password: <input type="text" style="color:black;margin-left: 15%; margin-bottom:2%; width: 36%;border-radius: 6px" name="passwordBod" class="input" required="true" />
    <br/>
    <button id="regBod" class="btn btn-succes">Guardar</button>
    
    
</div>
</form>

