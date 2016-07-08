<div id="form">
    
    <h3 class="textoregistrarcliente">Registrar encargado de bodega</h3><br/>
    <table id="table" align="center" border="2" width="300">
        <tr>
            <td align="center"><h5>Nombre</h5></td>
            <td align="center"><h5>Apellido</h5></td>
            <td align="center"><h5>Rut</h5></td>
        </tr>
        <?php
        foreach ($arrBodegueros->result() as $row){
            echo "<tr>";
                echo "<td>".$row->nombre_usuario."</td>";
                echo "<td>".$row->apellido_usuario."</td>";
                echo "<td>".$row->rut."</td>";
            echo "</tr>";
        }
        
        ?>
    </table>
    
    

</div>    