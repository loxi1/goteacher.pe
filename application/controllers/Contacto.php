<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Contacto extends CI_Controller {

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
        /*$menu['menu'] = "servicios";
        $this->load->view('principal/cabecera_vista', $menu);
        $this->load->view('principal/menu_vista');
        $this->load->view('servicios_vista');
        $this->load->view('principal/piedepagina_vista');*/
        $this->load->view('contacto_delfos');
    }    

}
