<?php
class Findclass_model extends CI_Model
{
    function __construct() {
        parent::__construct();
        //table name is subject where data will insert
        $this->table='class';
    }
        function get_list()
    {
        $query=$this->db->get($this->table);
        return $query->result();
    }
}