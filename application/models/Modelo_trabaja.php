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
class modelo_trabaja extends CI_Model {

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

    public function get_cursos($sql = "") {
        if ($sql === "")
        {            
        }    
        else    
        {
            $this->db->select('sc.id_curso, c.nombre as curso_1, c.sub_nombre as curso_2');
            $this->db->from('serv_curs sc');
            $this->db->join('curso c', 'sc.id_curso = c.id_curso');
            $this->db->join('servicio s', 'sc.id_servicio=s.id_servicio');
            $add = array('sc.estado' => 1);
            $this->db->where($add);
            $this->db->where_in('sc.id_servicio', $sql);
            $this->db->order_by('(LENGTH(c.nombre) + length(c.sub_nombre))', 'ASC');
            $data = $this->db->get()->result_array();

            if(is_array($data) && isset($data[0]['id_curso']) && strlen(trim($data[0]['id_curso']))>0) {
                $rta = array();
                $i = 0;
                $z = 1;
                foreach ($data as $key=>$value) {
                    if($z%4==0 && $z<=4)
                    {
                        $i++;
                    }
                    elseif($z%7==0 && $z<=7)
                    {
                        $i++;
                    }
                    elseif($z%10==0 && $z<=10)
                    {
                        $i++;
                    }
                    elseif($z%12==0 && $z<=12)
                    {
                        $i++;
                    }
                    elseif($z%14==0 && $z<=14)
                    {
                        $i++;
                    }
                    else 
                    {

                    }
                    
                    $rta[$i][$value['id_curso']] = $value['curso_1']." ".$value['curso_2'];
                    $z++;
                }
            }

            /*$query = $this->db->get_compiled_select();
            echo "<pre>"; print_r($rta); echo "</pre>";*/
        }
        return (isset($rta))?($rta):('');
            
    }

}
