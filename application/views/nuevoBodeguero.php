<form method="post" action="<?=base_url()?>Controlador/registrarBod">
<div id="form">
    
    <h3 class="textoregistrarcliente">Registrar encargado de bodega</h3>
    <h5>Los campos marcados en <h10 class="campoenrojo">*</h10> son obligatorios</h5>
    <br/>
    
    <br/>
    <h10 class="campoenrojo">*</h10>
    Nombre: <input type="text" name="nombreBod"required="true"
                   style="
                               color:black;
                               margin-left: 9%;
                               margin-bottom:2%; 
                               width: 45%;
                               border-radius: 6px"/>
    <br/>
    <h10 class="campoenrojo">*</h10>
    Apellido: <input type="text" name="apellidoBod" required="true"
                     style="
                               color:black;
                               margin-left: 9%;
                               margin-bottom:2%; 
                               width: 45%;
                               border-radius: 6px"/>
    <br/>
    <h10 class="campoenrojo">*</h10>
    Rut: <input type="text" name="rutBod" required="true"
                style="color:black;
                          margin-left: 14%;
                          margin-bottom:2%;
                          width: 32%;
                          border-radius: 6px"/>
     <input type="text"  name="digitoBod" 
               style="color:black;
               margin-left: 4%;
               margin-bottom:2%;
               width: 8%;
               border-radius: 6px" />
    <br/>
    <h10 class="campoenrojo">*</h10>
    Nickname: <input type="text" name="nicknameBod"  required="true"
                     style="
                               color:black;
                               margin-left: 8%;
                               margin-bottom:2%; 
                               width: 45%;
                               border-radius: 6px"/>
    <br/>
    <h10 class="campoenrojo">*</h10>
    Password: <input type="text" name="passwordBod" required="true"
                     style="
                               color:black;
                               margin-left: 9%;
                               margin-bottom:2%; 
                               width: 45%;
                               border-radius: 6px"/>
    <br/>
    <button id="regBod" class="btn btn-succes">Guardar</button>
    
    
</div>
</form>

