<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Informes extends CI_Controller {

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     *      http://example.com/index.php/welcome
     *  - or -
     *      http://example.com/index.php/welcome/index
     *  - or -
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

    public function guardarinformacion()
    {
    	date_default_timezone_set("America/Lima");
        //header("Access-Control-Allow-Origin: *");
        $this->load->model('modelo_informes');
        $datax['code'] = 0;
        $datax['msn'] = "Error";
        $datax['data'] = "";
        $data = $_POST;
        //$data['todasuniv'] = implode("|",$_POST['todasuniv']);
        //print_r($_POST);
        //print_r($data);        
        $this->load->library('Mobile_Detect');
        $this->detect = new Mobile_Detect;

        $deviceType = ($this->detect->isMobile() ? ($this->detect->isTablet() ? 'tablet' : 'phone') : 'computer');
        $this->device = $deviceType;
        
        $data = $_POST;
        
        $dataPersona['id_persona'] = 0;
        $dataPersona['nombres'] = $this->input->post('inputNombres');
        $dataPersona['apellidos'] = $this->input->post('inputApellidos');
        $dataPersona['celular'] = $this->input->post('inputCelular');
        $dataPersona['correo'] = $this->input->post('inputCorreo');
        $dataPersona['fecha_ingreso'] = date("Y-m-d H:m:s");
        $dataPersona['ip'] = $this->input->ip_address();
        $dataPersona['dispositivo'] = $this->device;

        $id_persona = $this->modelo_informes->insert_tabla($dataPersona, "persona");
        if($id_persona)
        {
            $dataInformes['id_informe'] = 0;
            $dataInformes['id_persona'] = $id_persona;
            /*$dataInformes['id_servicio'] = $data['checkServ'];
            $dataInformes['det_serv'] = "";
            if(isset($data['todasuniv']) && is_array($data['todasuniv']) )
            {
                $dataInformes['det_serv'] = implode(", ",$data['todasuniv']);
            }*/
            $dataInformes['mensaje'] = $data['textareaMensaje'];
            $id_informes = $this->modelo_informes->insert_tabla($dataInformes, "informes");            
        }
        //print_r($dataInformes);  die();    

        
        /*$this->load->model('modelo_servicio');
        $serv = $this->modelo_servicio->get_one_servicio($data['checkServ']);
        $text_servicio = $serv['nombre'];

        if(isset($data['todasuniv']) && is_array($data['todasuniv']) )
        {
            $where_in = array_values($data['todasuniv']);
            $text_servicio = $text_servicio.": ".$this->modelo_informes->get_univ($where_in);
        }

        $dataPersona['servicio'] = $text_servicio;*/

        $dist = $this->modelo_informes->get_one_distrito($data['inputDistrito']);
        $dataPersona['distrito'] = $dist['distrito'];
        $dataPersona['mensaje'] = $dataInformes['mensaje'];
        /**/
        if($id_informes)
        {
            $this->load->library('email');
            $config['protocol'] = 'sendmail';
            $config['mailpath'] = '/usr/sbin/sendmail';
            $config['charset'] = 'utf-8';
            $config['smtp_port'] = '25';
            $config['wordwrap'] = TRUE;
            $config["mailtype"] = "html";

            $this->email->initialize($config);
            $this->email->from('informes@goteacher.pe', 'Gabriel Orozco');
            $this->email->to('goteacherperu@gmail.com');
            $this->email->cc('informes@goteacher.pe');
            $this->email->bcc('gsorozcop@hotmail.com');
            $msn = $this->load->view('html_email', $dataPersona, true);
            $this->email->subject("INFORMES GO TEACHER");
            $this->email->message($msn);

            if($this->email->send())
            {
                $datax['code'] = 1;
                $datax['msn'] = "OK";
                $datax['data'] = base_url();
                $datax['data'] = $datax['data']."Informes/gracias";
            }
        }
        echo json_encode($datax);
    }

    public function gracias()
    {        
        $menu['menu'] = "informes";
        $this->load->view('principal/cabecera_vista', $menu);
        $this->load->view('principal/menu_vista');
        $this->load->view('gracias_vista');
        $this->load->view('principal/piedepagina_vista');
    }

}