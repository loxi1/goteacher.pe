<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Trabajaconnostros extends CI_Controller {

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
        $this->load->model('modelo_informes');
        $data['distritos'] = $this->modelo_informes->get_distritos(161);

        $this->load->model('modelo_trabaja');
        $sql = array(1, 2);
        $data['cursos'] = $this->modelo_trabaja->get_cursos($sql);

        $menu['menu'] = "trabaja";
        $this->load->view('principal/cabecera_vista', $menu);
        $this->load->view('principal/menu_vista');
        $this->load->view('trabajaconnosotros_vista',$data);
        $this->load->view('principal/piedepagina_vista');
    }

}
