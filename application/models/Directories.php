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

    function bottomFourImages(){
        $this->db->order_by('id', 'desc');
        $this->db->limit(4);
        $query = $this->db->get('images');
        return $query->result_array();

    }

    function recentNews(){
        $this->db->order_by('id', 'asc');
        $this->db->limit(3);
        $query = $this->db->get('news');
        return $query->result_array();
    }

    function topStory(){
        $this->db->order_by('id', 'asc');
        $this->db->limit(1);
        $query = $this->db->get('news');
        $stories = $query->result_array();
        return $stories[0];
    }




}