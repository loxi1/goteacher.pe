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
class modelo_inicio extends CI_Model {

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
    public function get_servicio() 
    {   
        $this->db->select('nombre, img');
        $this->db->from('servicio');
        $this->db->where('estado', 1);
        $this->db->order_by('orden', 'ASC'); /*ASC, DESC AND RANDOM.*/
        $data = $this->db->get()->result_array();
        return (isset($data[0]['nombre']) && strlen($data[0]['nombre'])>0)?($data):('');
    }

}
