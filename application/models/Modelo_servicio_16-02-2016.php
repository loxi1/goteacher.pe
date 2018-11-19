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
class modelo_servicio extends CI_Model {

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
    public function get_cursos($sql = "") 
    {   
        if ($sql === "")
        {            
        }    
        else    
        {
            $this->db->select('sc.id_sevcur, sc.id_servicio, s.nombre as servicio, s.img as img_servicio,  sc.id_curso, c.nombre as curso_1, c.sub_nombre as curso_2, c.img as img_curso, c.codigo, sc.orden');
            $this->db->from('serv_curs sc');
            $this->db->join('curso c', 'sc.id_curso = c.id_curso');
            $this->db->join('servicio s', 'sc.id_servicio=s.id_servicio');
            $add = array('sc.estado' => 1);
            $where = $add+$sql;
            $this->db->where($where);
            $this->db->order_by('sc.orden', 'ASC');
            $data = $this->db->get()->result_array();

            if(is_array($data) && isset($data[0]['id_sevcur']) && strlen(trim($data[0]['id_sevcur']))>0) {
                $rta = array();
                $rta['id_servicio'] = $data[0]['id_servicio'];
                $rta['servicio'] = $data[0]['servicio'];
                $rta['img'] = $data[0]['img_servicio'];
                $i = 0;
                $z = 0;
                foreach ($data as $key=>$value) {
                    if($key%3==0 && $key>=3)
                    {
                        $i++;
                        $z = 0;
                    }
                    $rta['curso'][$i][$z]['curso'] = $value['curso_1']." ".$value['curso_2'];
                    $rta['curso'][$i][$z]['img'] = $value['img_curso'];
                    $rta['curso'][$i][$z]['codigo'] = $value['codigo'];
                    $z++;
                }
            }

            /*$query = $this->db->get_compiled_select();
            echo "<pre>"; print_r($rta); echo "</pre>";*/
        }
        return (isset($rta))?($rta):('');

    }

    function get_servicios()
    {//select id_servicio, nombre, (REPLACE(img,'.jpg','')) as 'url' from servicio where estado=1 ORDER BY orden;
        $this->db->select("id_servicio, nombre, (REPLACE(img,'.jpg','')) as 'url'");
        $this->db->from('servicio');
        $this->db->where(array('estado'=>1));
        $this->db->order_by('orden', 'ASC');
        $data = $this->db->get()->result_array();
        /*$query = $this->db->get_compiled_select();
        echo "<pre>"; print_r($data); echo "</pre>";*/
        return (isset($data[0]['id_servicio']))?($data):('');

    }

}
