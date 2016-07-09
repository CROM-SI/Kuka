<?php
class Modelo extends CI_Model{
    function validarLogin($nick, $clave){
        /*$consulta = "select * from usuario 
                    where nickname='".$nick."' and 
                    password ='".md5($clave)."'";
         $resultado = $this->db->query($consulta);
         */
        $this->db->select("*");
        $this->db->where('nickname',$nick);
        $this->db->where('password',md5($clave));
        $resultado = $this->db->get('usuario');
        if($resultado->num_rows()>0){
            return true;
        }else{
            return false;
        }
    }
    
    function validarLogin2($nick, $clave){
        
        $this->db->select("*");
        $this->db->where('nickname',$nick);
        $this->db->where('password',md5($clave));
        $resultado = $this->db->get('cliente');
        if($resultado->num_rows()>0){
            return true;
        }else{
            return false;
        }
    }
    
    function consultaPerfil($usuario) {
        $this->db->select("id_rol");
        $this->db->where('nickname', $usuario);
        $respuesta = $this->db->get("usuario");
        foreach ($respuesta->result() as $valor) {
            $perfil = $valor->id_rol;
        }
        return $perfil;
    }
    
    
    
    //    consultar los productos 
    function consultaproducto(){
       $this->db->select('nombre_producto,precio_por_unidad,id_producto,stok_producto');
       $this->db->from("producto");
         $data = $this->db->get();
        return $data;
    }
    
    function mostrarBodegueros(){
       $this->db->select("*");
       $this->db->where("id_rol",3);
       $res = $this->db->get('usuario');
        if($res->num_rows()>0){
            return $res;
        }else{
            return false;
        }
    }
    
    function eliminarBodeguero($id){
        $this->db->where('id_usuario',$id);
        $this->db->delete('usuario');
    }
    
    function obtenerNombre($id){
        $this->db->where('id_usuario',$id);
        $res = $this->db->get('usuario');
        if($res->num_rows()>0){
            return $res;
        }else{
            return false;
        }
    }
    
    function editarBodeguero($id,$data){
        $this->db->where('id_usuario',$id);
        $this->db->update('usuario',$data);
    }
    
    function consultaCategoria() {

        $this->db->order_by('nombre_categoria', 'asc');
        $categoria = $this->db->get("categoria");
        if ($categoria->num_rows() > 0) {
            return $categoria->result();
        }
    }
    
     function regBodeguero($data) {
        $this->db->insert('usuario', $data);
    }
    
    
    
    
    
}
?>
