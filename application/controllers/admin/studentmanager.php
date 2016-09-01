<?php
/*
 * Crudwithcodignator -- A simple web app using codignator 
 *  for full code send me your mail id on santunu23@gmail.com
 * 
*/
defined('BASEPATH') OR exit('No direct script access allowed');
class Studentmanager extends CI_Controller
{
        public function index()
	{
           $data['users']=$this->Studentmanager_model->get_list(); 
	  
          $this->template->load('admin','default','studentmanager/index',$data);
         
        }
        
     
         public function add()
	{
            $this->form_validation->set_rules('fname','First Name','trim|required|min_length[2]'); 
            $this->form_validation->set_rules('lname','Last Name','trim|required|min_length[2]');
            $this->form_validation->set_rules('password','Password','trim|required|min_length[4]|matches[password2]');
            $this->form_validation->set_rules('class','Class','trim|required');
            $this->form_validation->set_rules('password2','Confirm Password','trim|required|min_length[4]|matches[password2]');
            $this->form_validation->set_rules('gender','Gender','trim|required'); 
            
           
            if($this->form_validation->run()==FALSE)
            {
                 $user_options=array();
                 $user_options[0]='Select Class';
                 $user_list=  $this->Findclass_model->get_list();
                 foreach ($user_list as $user)
                 {
                    $user_options[$user->class_name]=$user->class_name;
                 }
                 $data['user_options']=$user_options;
                 $gender_options=array();
                 $gender_options[0]='Select Gender';
                 $gender_list=  $this->Getgender_data->get_list();
                
                foreach ($gender_list as $gender)
                {
                    $gender_options[$gender->gen_cat]=$gender->gen_cat;
                }
                $data['gender_options']=$gender_options;
                 
                $this->template->load('admin','default','studentmanager/add',$data);
            }
            else
            {
               
                $data=array(
                      'fname'=>  $this->input->post('fname'),
                      'lname'=>   $this->input->post('lname'),
                      'password'=>$this->input->post('password'),
                      'class'=>  $this->input->post('class'),
                      'gender'=>  $this->input->post('gender'),
                      'create_date'=>date("d/m/Y"),
                );
                
                $this->Studentmanager_model->add($data);
                $data=array
                          (
                            'resourse_id'=>  $this->db->insert_id(),
                            'type'=>'student',
                            'action'=>'added',
                            'user_id'=> 1, 
                            'message'=>'A new student category was added on '.$data["create_date"].' name '.$data["fname"].',he/she take admission in '.$data["class"].'',
                            'create_date'=>date("d/m/Y"),
                          );
                
               $this->activity_model->add($data);
               redirect('dashboard');
            }
            }
           function edit($id)
            {
            $this->form_validation->set_rules('fname','First Name','trim|required|min_length[2]'); 
            $this->form_validation->set_rules('lname','Last Name','trim|required|min_length[2]');
            $this->form_validation->set_rules('class','Class','trim|required');
            $this->form_validation->set_rules('gender','Gender','trim|required'); 
           if($this->form_validation->run()==FALSE)
            {
                 $user_options=array();
                 $user_options[0]='Select Class';
                 $user_list=  $this->Findclass_model->get_list();
                 foreach ($user_list as $user)
                 {
                    $user_options[$user->class_name]=$user->class_name;
                 }
                 $data['user_options']=$user_options;
                 $gender_options=array();
                 $gender_options[0]='Select Gender';
                 $gender_list=  $this->Getgender_data->get_list();
                
                foreach ($gender_list as $gender)
                {
                    $gender_options[$gender->gen_cat]=$gender->gen_cat;
                }
                $data['gender_options']=$gender_options;
              //Get current User
                $data['stmger']=  $this->Studentmanager_model->get($id);
                //Load view into template
                $this->template->load('admin','default','studentmanager/edit',$data);
             }
            else
            {
                $data=array
                    (
                      'fname' =>  $this->input->post('fname'),
                      'lname' =>  $this->input->post('lname'),
                      'class' =>  $this->input->post('class'),
                      'gender'=> $this->input->post('gender'),
                      
                    );
                
                  //Update category
                  $this->Studentmanager_model->edit($id,$data);
                  
                  //Activity array
                  $data=array
                      (
                      'resourse_id'=>  $this->db->insert_id(),
                      'type'=>'user',
                      'action'=>'update',
                      'user_id'=>1,
                      'message'=>'A Student details was updated name is '.$data["fname"].' '.$data["lname"].',he/she study in '.$data["class"].' ',
                      'create_date'=>date("d/m/Y"),
                      );
                  //Add Activity 
                  $this->activity_model->add($data);
                  //redirect t users
                  redirect('dashboard');
                  
            } 
               }
        public function delete($id)
	   {
	    
            $this->Studentmanager_model->delete($id);
             $data=array
                    (
                    'resourse_id'=>  $this->db->insert_id(),
                    'type'       =>  'user',
                    'action'    =>    'deleted',
                    'user_id'   =>1,
                    'message'  => 'A Student details was updated name is '.$data["fname"].' '.$data["lname"].',he/she study in '.$data["class"].''
                    );
                    $this->activity_model->add($data);
                    
                    redirect('admin/studentmanager');
                    $this->template->load('admin','default','studentmanager/add');
                    $this->template->load('admin','default','studentmanager/delete');
        }
        
        public function searchclasswise()
        {
            
        $this->form_validation->set_rules('class','Class','trim');
        $data['findquery']=  $this->Studentmanager_model->searchdatafromdatabase();
        $this->template->load('admin','default','studentmanager/searchclasswise',$data);
        }
        public function pagination()
        {
           
           $config=array();
           $config["base_url"]=  base_url()."index.php/admin/studentmanager/pagination";
           $config["total_rows"] = $this->Studentmanager_model->record_count();
           $config["per_page"] = 10;
           $config["uri_segment"] = 4;
           $choice=$config["total_rows"]/$config["per_page"];
           $config["num_links"]=round($choice);
           $this->pagination->initialize($config);
           $page = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;
           $data["results"] = $this->Studentmanager_model->pagination($config["per_page"], $page);
           $data["links"] = $this->pagination->create_links();
           $this->template->load('admin','default','studentmanager/pagination',$data);  
        }
}
