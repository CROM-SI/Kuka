<form method="post" action="<?=base_url()?>Controlador/registrarCliente">
<div id="form">
    
    <h3 class="textoregistrarcliente">Registrar Cliente</h3>
    <h5>Los campos marcados en <h10 class="campoenrojo">*</h10> son obligatorios</h5>
    <br/>
    <h10 class="campoenrojo">*</h10>Nombre: <input type="text" style="color:black;margin-left: 15%; margin-bottom:2%; width: 36%;border-radius: 6px" name="nombreCli" class="input" required="true" />
    <br/>
    <h10 class="campoenrojo">*</h10>Apellido: <input type="text" style="color:black;margin-left: 15%; margin-bottom:2%; width: 36%;border-radius: 6px" name="apellidoCli" class="input" required="true" />
    <br/>
    <h10 class="campoenrojo">*</h10>Direccion del local: <input style="color:black;margin-left: 2%; margin-bottom:2%; width: 35%;border-radius: 6px" type="text" name="direccionCli" class="input" required="true" />
    <br/>
    <h10 class="campoenrojo">*</h10>Telefono: <input type="text" style="color:black;margin-left: 15%; margin-bottom:2%; width: 36%;border-radius: 6px" name="telefonoCli" class="input" required="true" />
    <br/>
    <h10 class="campoenrojo">*</h10>Ciudad: <input type="text" style="color:black;margin-left: 17%; margin-bottom:2%; width: 36%;border-radius: 6px" name="ciudadCli" class="input" required="true" />
    <br/>
    <h10 class="campoenrojo">*</h10>Rut: <input type="text" style="color:black;margin-left: 3%; margin-bottom:2%; width: 57%;border-radius: 6px" name="rutCli" class="input" />
    <br/>
    <h10 class="campoenrojo">*</h10>Rol del local: <input type="id" style="color:black;margin-left: 26%; margin-bottom:2%;width:25%;border-radius: 6px" name="rolCli" class="input" required="true" />
    <br/>
    <h10 class="campoenrojo">*</h10>Nickname: <input type="text" style="color:black;margin-left: 15%; margin-bottom:2%; width: 36%;border-radius: 6px" name="nicknameCli" class="input" required="true" />
    <br/>
    <h10 class="campoenrojo">*</h10>Password: <input type="text" style="color:black;margin-left: 15%; margin-bottom:2%; width: 36%;border-radius: 6px" name="passwordCli" class="input" required="true" />
    <br/>
    
    <h10 class="campoenrojo">*</h10>Correo: <input type="text" style="color:black;margin-left: 19%; margin-bottom:2%; width: 36%;border-radius: 6px" name="correoCli" class="input" required="true" />
    <br/>
    <br>
    <button class="btn btn-succes" id="guardarCli">Guardar</button>
    
    
</div>
</form>
