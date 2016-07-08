<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Controlador extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model("modelo");
    }

    public function index() {
        $this->load->view("header");
        $this->load->view("inicio");
        $this->load->view("footer");
    }

    function cargarContent() {
        if ($this->session->userdata('login') == true) {
            $data['usuario'] = $this->session->userdata("usuario");
            if ($this->session->userdata('perfil') == 1) {
                $data['activo'] = 0;
                $this->load->view("Administrador", $data);
            } else {

                $data['activo'] = 0;
                $this->load->view("Bodega", $data);
            }
        } else {
            $data['activo'] = 1;
            $this->load->view("contenido", $data);
        }
    }

    function cargarContent2() {
        if ($this->session->userdata('login2') == true) {
            $data['producto'] = $this->modelo->consultaproducto()->result();
            $data['usuario'] = $this->session->userdata("usuario");

                $data['activo'] = 0;
                $this->load->view("Cliente", $data);
            
        } else {
            $data['activo'] = 1;
            $this->load->view("contenido2", $data);
        }
    }

    function validaLogin() {
        $usuario = $this->input->post("usuario");
        $clave = $this->input->post("clave");
        $resultado = $this->modelo->validarLogin($usuario, $clave);
        if ($resultado == true) {
            $perfil = $this->modelo->consultaPerfil($usuario);
            $data['mensaje'] = "Usuario Válido";
            $data['valido'] = true;
            $arreglo = array(
                "usuario" => $usuario,
                "login" => true,
                "perfil" => $perfil
            );
        } else {
            $data['mensaje'] = "Usuario No Válido";
            $data['valido'] = false;
            $arreglo = array(
                "usuario" => "",
                "login" => false,
                "perfil" => "");
        }
        $this->session->set_userdata($arreglo);
        echo json_encode($data);
    }

    function validaLogin2() {
        $usuario = $this->input->post("usuario");
        $clave = $this->input->post("clave");
        $resultado = $this->modelo->validarLogin2($usuario, $clave);
        if ($resultado == true) {
            
            $data['mensaje'] = "Usuario Válido";
            $data['valido'] = true;
            $arreglo = array(
                "usuario" => $usuario,
                "login2" => true
            );
        } else {
            $data['mensaje'] = "Usuario No Válido";
            $data['valido'] = false;
            $arreglo = array(
                "usuario" => "",
                "login" => false);
        }
        $this->session->set_userdata($arreglo);
        echo json_encode($data);
    }

    function salir() {
        $this->session->sess_destroy();
        $this->load->view("header");
        $this->load->view("pedido");
        $this->load->view("footer");
    }
    function salir2() {
        $this->session->sess_destroy();
        $this->load->view("header");
        $this->load->view("intranet");
        $this->load->view("footer");
    }

    function redCliente() {
        $this->load->view("Cliente");
    }

    function intranet() {
        $this->load->view("header");
        $this->load->view("intranet");
        $this->load->view("footer");
    }

    function cargarInicio() {
        $this->load->view("header");
        $this->load->view("inicio");
        $this->load->view("footer");
    }

    function cargarPedido() {
        $this->load->view("header");
        $this->load->view("pedido");
        $this->load->view("footer");
    }
    function cargarUbicacion(){
       $this->load->view("header");
        $this->load->view("ubicacion");
        $this->load->view("footer"); 
    }
    function cargarHistoria(){
        $this->load->view("header");
        $this->load->view("historia");
        $this->load->view("footer"); 
    }
    function cargarQuienesSomos(){
       $this->load->view("header");
        $this->load->view("quienesomos");
        $this->load->view("footer"); 
    }

    function cargarRegCli(){
        
        $this->load->view("regCliente");
       
     
    }
    function registrarCliente(){
        $nombre = $this->input->post("nombreCli");
        $apellido = $this->input->post("apellidoCli");
        $rut = $this->input->post("rutCli");
        $telefono = $this->input->post("telefonoCli");
        $ciudad = $this->input->post("cuidadCli");
        $correo = $this->input->post("correoCli");
        $rol = $this->input->post("rolCli");
        $nickname = $this->input->post("nicknameCli");
        $password = $this->input->post("passwordCli");
        $direccion = $this->input->post("direccionCli");
        

        $data = array('nombre_cliente' => $nombre,
            'apellido_cliente' => $apellido,
            'direccion_local' => $direccion,
            'telefono' => $telefono,
            'ciudad' => $ciudad,
            'rut_cliente' => $rut,
            'rol_local' => $rol,
            'nickname' => $nickname,
            'password' => md5($password),
            'id_rol' => 2,
            'correo' => $correo
        );


        $this->db->insert('cliente', $data);
        
        $this->load->view("header");
        $this->load->view("intranet");
        $this->load->view("footer");
    }
    
    function cargarIngresarPro(){
        
        $this->load->view("ingresarProducto");
        
    }
    
    function cargaralmacen(){
        
         $this->load->view("almacen");
    }
    
    function ingresarProducto(){
        $nombre = $this->input->post("nombrePro");
        $precio = $this->input->post("precioPro");
        $stock = $this->input->post("stockPro");
        $categoria = $this->input->post("categoriaPro");
        
        $data = array('nombre_producto' => $nombre,
            'precio_por_unidad' => $precio,
            'stok_producto' => $stock,
            '' => $telefono,
            'ciudad' => $ciudad
            
        );
    }
    
    function cargarNuevoBodeguero(){
        $this->load->view("nuevoBodeguero");
    }
    
    function registrarBod(){
        
        $nombre = $this->input->post("nombreBod");
        $apellido = $this->input->post("apellidoBod");
        $rut = $this->input->post("rutBod");
        $nickname = $this->input->post("nicknameBod");
        $password = $this->input->post("passwordBod");
        
        $data = array('nombre_usuario' => $nombre,
            'apellido_usuario' => $apellido,
            'rut' => $rut,
            'id_rol' => 3,
            'nickname' => $nickname,
            'password' => md5($password));
            
            $this->db->insert('usuario', $data);
        
        $this->load->view("header");
        $this->load->view("intranet");
        $this->load->view("footer");
        
    }
    
    function mostrarBod(){
        $datos['arrBodegueros'] = $this->modelo->mostrarBodegueros();
        $this->load->view("bodegueros",$datos);
    }

}
