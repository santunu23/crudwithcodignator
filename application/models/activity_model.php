<?php

/* 
 * license under ohnnu joy sen
 */

class activity_model extends CI_Model
{
    function __construct() {
        parent::__construct();
        //table name is subject where data will insert
        $this->table='activity';
    }
    function get_list()
    {
        $this->db->select('*');
        $this->db->from($this->table);
        $this->db->order_by('id',"DESC");
        //$this->db->ascending();
        $this->db->limit(0,50);
        $query=$this->db->get();
        return $query->result() ;
    }
    
    function add($data)
    {
        $this->db->insert($this->table,$data);
    }
    
    
    
    
    
    
}

