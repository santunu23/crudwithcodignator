<?php


class Studentmanager_model extends CI_Model
{
    function __construct() {
        parent::__construct();
        //table name is subject where data will insert
        $this->table='student_info';
    }
        function get_list()
    {
        $query=$this->db->get($this->table);
        return $query->result();
    }
    
     function get($id)
    {
     $query=$this->db->get_where($this->table,array('id'=>$id));
     return $query->row() ;
    }
    
    
    
    function add($data)
    {
        $this->db->insert($this->table,$data);
    }
    
    function delete($id)
    {
         $this->db->where('id',$id);
         $this->db->delete($this->table);
        
    }
    
    function searchdatafromdatabase()
    {
        
        $class=  $this->input->post('class');
        $this->db->select('fname,lname,class,gender,create_date');
        $this->db->from('student_info');
        $this->db->where('class="'.$class.'"');
        $query= $this->db->get();
        return $query->result();
    }
    
  function edit($id,$data)
    {
         $this->db->where('id',$id);
          $this->db->update($this->table,$data);
    }
    
    function record_count()
    {
        return $this->db->count_all("pagination");
    }
    
    
    function pagination($limit,$start)
    {
        $this->db->limit($limit,$start);
        $this->db->from("student_info"); 
        $this->db->order_by("class", "asc");
        $query=  $this->db->get();
         if($query->num_rows()>0)
         {
             foreach ($query->result() as $row)
             {
                 $data[]=$row;
             }
             return $data;
             
         }
        return false;
        
                
        
        
        
        
    }
    
    
    
    
    
    
    
    
    
    
    
    
    
}