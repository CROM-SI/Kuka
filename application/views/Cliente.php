<div id="content">
    <head>
        <p>Bienvenido cliente :<?=$usuario?> </p>
        
    </head>
    <body>
       
        <div class="producto" >
            <center >
               <?php foreach ($producto as $i): ?> 
                <div style="border:2px solid #CF3 ;margin-bottom:5% " >
                    <p>Nombre Producto :<?= $i->nombre_producto  ?></p>
             
                <p>Precio : <?= $i->precio_por_unidad  ?></p> 
                <br><br>
                
                 cantidad:  <select id="cantidad" > 
                 <option disabled selected value="0">Seleccione</option> 
                 
                 <?php for($x=0; $x<=$i->stok_producto;$x++){?> 
                 
                     <option value="<?= $x; ?>"><?= $x; ?></option> 
                     
                 <?php }?>
                 
<!--                 <option value="<?= $i->id_producto; ?>"><?= $i->stok_producto; ?></option> -->
                
                 </select> 
                 
                 <br><br>
                 <button id="agregarC" style="margin-left: 5%;margin-bottom:5%" value="<?=$i->id_producto?>">Agregar a carrito</button> 
                 </div>
               
            <?php endforeach; ?>
            
            </center>
        </div>
                
            
       
        
       
        
    </body>
    
    
    
    <p>Usuario conectado</p>
    <a href="<?=base_url()?>Controlador/salir">Salir</a>
</div>

