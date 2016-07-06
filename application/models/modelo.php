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
        $this->db->where('password',$clave);
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
        $this->db->where('password',$clave);
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
    
    
    
}
?>
