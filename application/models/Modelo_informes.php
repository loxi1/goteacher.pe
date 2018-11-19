<?php
/**
 * Super Class
 *
 * @package     Package Name
 * @subpackage  Subpackage
 * @category    Category
 * @author      Author Name
 * @link        http://example.com
 */
class modelo_informes extends CI_Model {

    public function __construct()
    {
        parent::__construct();
    }

    /**
    * get_servicio crea un array
    *
    *
    * el array tiene 2 sub array servicio e imagen
    * @return    array
    */
    public function get_distritos($id_provincia = "") {
        if ($id_provincia === "")
        {

        }
        else
        {
            $this->db->select('d.idDistrito, de.departamento, p.provincia, d.distrito');
            $this->db->from('distrito d');
            $this->db->join('provincia p',  'd.idProvincia=p.idProvincia');
            $this->db->join('departamento de', 'p.idDepartamento=de.idDepartamento');
            $where = array('d.idProvincia' => $id_provincia,'d.ordenar >'=> 0);
            $this->db->where($where);
            $this->db->order_by('d.ordenar', 'ASC');
            $data = $this->db->get()->result_array();
            if(is_array($data) && isset($data[0]['idDistrito']) && strlen(trim($data[0]['idDistrito']))>0)
            {
                foreach ($data as  $value)
                {
                    $rta[$value['idDistrito']] = $value['distrito'];
                }
            }

            $query = $this->db->get_compiled_select();
            //echo "<pre>"; print_r($this->db->last_query()); echo "</pre>";
        }
        return (isset($rta))?($rta):('');

    }

    public function get_universidad($cant = "") {
        if ($cant === "")
        {

        }
        else
        {
            $this->db->select('id_universidad, codigo');
            $this->db->from('universidad');
            $where = array('estado' => 1);
            $this->db->where($where);
            $data = $this->db->get()->result_array();
            if(is_array($data) && isset($data[0]['id_universidad']) && strlen(trim($data[0]['id_universidad']))>0)
            {
                $i = 0;
                foreach ($data as $key => $value)
                {
                    if($key%$cant==0 && $key>=$cant)
                    {
                        $i++;
                    }
                    $rta[$i][$value['id_universidad']] = $value['codigo'];
                }
            }
        }

        return (isset($rta))?($rta):('');
    }

    public function guardarinformacion($data) 
    {
        $data = array(
        'title' => $title,
        'name' => $name,
        'date' => $date
        );

        $this->db->insert('mytable', $data);
    }

    public function get_univ($where_in = "")
    {
        if( $where_in === ""){}
        else
        {
            $this->db->select('id_universidad, codigo');
            $this->db->from('universidad');
            $where = array('estado' => 1);
            $this->db->where_in('id_universidad', $where_in);
            //$query = $this->db->get_compiled_select();
            //echo "<pre>"; print_r($query); echo "</pre>"; die();
            $data = $this->db->get()->result_array();

            if(is_array($data) && isset($data[0]['id_universidad']) && strlen(trim($data[0]['id_universidad']))>0)
            {
                $index_fin = 0;
                foreach ($data as $key=>$value) {
                    $univ[$key] = $value['codigo'];
                    $index_fin = $key;
                }
                $text_universidades = $univ[0];
                if($index_fin>0)
                { 
                    $final = $univ[$index_fin]; 
                    unset($univ[$index_fin]);
                    $text_universidades = implode(",", $univ)." y ".$final;
                }
            }

        }
        return (isset($text_universidades)) ? ($text_universidades) : (false);
    }

    public function get_one_distrito( $iddist = "" )
    {
        if( $iddist === "") {}
        else
        {
            //select distrito from distrito where idDistrito=;
            $this->db->select('idDistrito, distrito');
            $this->db->from('distrito');
            $where = array('idDistrito' => $iddist);
            $this->db->where($where);
            $data = $this->db->get()->row_array();
        }
        return (isset($data)) ? ($data) : (false);   
    }

    function insert_persona( $data = "" )
    {
        if($data === "") {}
        else
        {
           return ($this->db->insert('persona', $data)) ? ($this->db->insert_id()) : (false);
        }
    }

    function insert_informes( $data = "" )
    {
        if($data === "") {}
        else
        {
           return ($this->db->insert('informes', $data)) ? ($this->db->insert_id()) : (false);
        }
    }

    function insert_tabla( $data = "", $tabla )
    {
        if($data === "") {}
        else
        {
           return ($this->db->insert($tabla, $data)) ? ($this->db->insert_id()) : (false);
        }
    }

}
