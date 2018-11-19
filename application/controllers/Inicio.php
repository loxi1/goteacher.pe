<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Inicio extends CI_Controller {

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     * 	- or -
     * 		http://example.com/index.php/welcome/index
     * 	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see http://codeigniter.com/user_guide/general/urls.html
     */
    public function index() {
        $this->load->model('modelo_inicio');
        $data['caja'] = $this->modelo_inicio->get_servicio();

        $menu['menu'] = "inicio";
        $this->load->view('principal/cabecera_vista', $menu);
        $this->load->view('principal/menu_vista');
        $this->load->view('inicio_vista', $data);
        $this->load->view('principal/piedepagina_vista');
        /*$this->load->view('inicio_delfos');*/
    }
    public function iniciar() {
        $this->load->model('modelo_inicio');
        $data['caja'] = $this->modelo_inicio->get_servicio();

        $menu['menu'] = "inicio";
        $this->load->view('principal/cabecera_vista', $menu);
        $this->load->view('principal/menu_vista');
        $this->load->view('inicio_vista', $data);
        $this->load->view('principal/piedepagina_vista');
    }
    
    public function prueba() {
        $this->load->view('combox_vista_1');
    }

}
