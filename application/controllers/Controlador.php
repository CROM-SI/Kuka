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
        if ($this->session->userdata('login') == true) {
            
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
                "login" => true
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
        redirect(base_url());
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

}
