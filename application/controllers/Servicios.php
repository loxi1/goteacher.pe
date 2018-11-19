<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Servicios extends CI_Controller {

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
        $this->load->view('servicio_delfos');
    }

    public function universitaria()
    {
        $this->load->model('modelo_servicio');
        $servicio = 1;
        $sql = array('sc.id_servicio' => $servicio);
        $data['cursos'] = $this->modelo_servicio->get_cursos($sql);
        $data['serivicios'] = $this->modelo_servicio->get_servicios();
        $sendMenu = array('id_serv'=>$servicio,'serv'=>$data['serivicios']);
        $data['menu_tiempo_vista'] = $this->load->view('menu_tiempo', $sendMenu,  true);

        $this->load->model('modelo_informes');
        $data['universidad'] = $this->modelo_informes->get_universidad(4);

        $menu['menu'] = "servicios_u";
        $this->load->view('principal/cabecera_vista', $menu);
        $this->load->view('principal/menu_vista');
        $this->load->view('servicios_vista', $data);
        $this->load->view('principal/piedepagina_vista');
    }

    public function virtual()
    {
        $this->load->model('modelo_servicio');
        $servicio = 2;
        $sql = array('sc.id_servicio' => $servicio);
        $data['cursos'] = $this->modelo_servicio->get_cursos($sql);
        $data['serivicios'] = $this->modelo_servicio->get_servicios();
        $sendMenu = array('id_serv'=>$servicio,'serv'=>$data['serivicios']);
        $data['menu_tiempo_vista'] = $this->load->view('menu_tiempo', $sendMenu,  true);

        $menu['menu'] = "servicios_p";
        $this->load->view('principal/cabecera_vista', $menu);
        $this->load->view('principal/menu_vista');
        $this->load->view('servicios_vista', $data);
        $this->load->view('principal/piedepagina_vista');
    }

    public function escolar()
    {
        $this->load->model('modelo_servicio');
        $servicio = 3;
        $sql = array('sc.id_servicio' => $servicio);
        $data['cursos'] = $this->modelo_servicio->get_cursos($sql);
        $data['serivicios'] = $this->modelo_servicio->get_servicios();
        $sendMenu = array('id_serv'=>$servicio,'serv'=>$data['serivicios']);
        $data['menu_tiempo_vista'] = $this->load->view('menu_tiempo', $sendMenu,  true);

        $menu['menu'] = "servicios_e";
        $this->load->view('principal/cabecera_vista', $menu);
        $this->load->view('principal/menu_vista');
        $this->load->view('servicios_vista', $data);
        $this->load->view('principal/piedepagina_vista');
    }

}
