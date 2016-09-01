<?php

/*
 *  license by Joy Sen
 *  ohnnu.com 
 *  
 */
class Template 
{
    var $ci;
  
    function __construct() 
    {
        $this->ci =& get_instance();
    }
    
    
    
     function load($loc,$tpl_name,$view,$data=null)
     {
         if($loc=='admin' && $tpl_name=='default')
         {
             $tpl_name ='admin';
         }
         if($loc=='public' && $tpl_name=='default')
         {
             $tpl_name ='public';
         }
     
         $data['main']=$loc.'/'.$view;
         $this->ci->load->view('/templates/'.$tpl_name,$data);
         
         
         
         
     }   
    
    
}
