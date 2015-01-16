<?php
/**
 * Created by PhpStorm.
 * User: ben
 * Date: 14/01/15
 * Time: 6:11 PM
 */

class Directories extends CI_Model{

    function __construct(){
        parent::__construct();
    }

    function all(){
        $this->db->order_by('id','asc');
        $query = $this->db->get('images');
        return $query->result_array();
    }




}