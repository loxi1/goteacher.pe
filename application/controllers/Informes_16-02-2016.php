<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Informes extends CI_Controller {

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
        $data['universidad'] = $this->modelo_informes->get_universidad(3);

        $this->load->model('modelo_servicio');
        $data['servicio'] = $this->modelo_servicio->get_servicios();

        $menu['menu'] = "informes";
        $this->load->view('principal/cabecera_vista', $menu);
        $this->load->view('principal/menu_vista');
        $this->load->view('informes_vista', $data);
        $this->load->view('principal/piedepagina_vista');
    }

    public function guardarinformacion ()
    {
    	header("Access-Control-Allow-Origin: *");
        $data = $_POST;
        //$data['todasuniv'] = implode("|",$_POST['todasuniv']);
        //print_r($_POST);
        //print_r($data);
        $this->load->library('email');
        $config['protocol'] = 'sendmail';
        $config['mailpath'] = '/usr/sbin/sendmail';
        $config['charset'] = 'utf-8';
        $config['smtp_port'] = '25';
        $config['wordwrap'] = TRUE;
        $config["mailtype"] = "html";

        $this->email->initialize($config);
        $dataPersona['id_persona'] = 0;
        $dataPersona['nombres'] = $this->input->post('inputNombres');
        $dataPersona['apellidos'] = $this->input->post('inputApellidos');
        $dataPersona['celular'] = $this->input->post('inputCelular');
        $dataPersona['correo'] = $this->input->post('inputCorreo');
        $dataPersona['fecha_ingreso'] = date("Y-m-d H:m:s");
        $dataPersona['ip'] = $this->input->ip_address();

        /*$dataInformes['id_informe'] = 0;
        $dataInformes['id_persona'] = 0;
        $dataInformes['id_servicio'] = 0;
        $dataInformes['det_serv'] = 0;*/
        $dataInformes['mensaje'] = $this->input->post('textareaMensaje');

        $dataPersona['mensaje'] = $dataInformes['mensaje'];

        $this->email->from('anibal.cayetano@gmail.com', 'Anibal Cayetano');
        $this->email->to('jenean219@gmail.com');
        $this->email->cc('ajcaceresm@gmail.com');
        $this->email->bcc('anibal.cayetano@gmail.com');
        $msn = $this->load->view('html_email', $dataPersona, true);
        $this->email->subject("Cayetano");
        $this->email->message($msn);

        $this->email->send();
    }

}