<?php

/*
 * license under ohnnu.com 
 * admin joy sen ask for code joy
 * 
*/

defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller{
    
        public function index()
	{
          $data['activities']=  $this->activity_model->get_list();
          $this->template->load('admin','default','dashboard',$data);
        }
}
