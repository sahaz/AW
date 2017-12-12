<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Con_login extends CI_Controller {
   
   
    
   public function __construct() {
         parent::__construct();
          $this->load->model('mod_login');
   }
   
   public function show_loginpage()
   {
      $this->load->view('admin/show_loginpage');
   }
   
   
   public function process()
   {
       $data['email']=$this->input->post('email');
           $data['password']=$this->input->post('pass');
           $data['password']=md5($data['password']); 
           
           $result=$this->mod_login->check_admin($data);
          $r= $result->row();
            if(!empty($r))
         {
            $session_array=array('status'=>$r->email,'name'=>$r->name);
           
            $this->session->set_userdata($session_array);
            redirect('admin/con_dashboard/show_dashboard');
         }
         else
         {
            $this->session->set_flashdata('error','Authentication Failure : Username & Password unmatched');
            redirect('admin/con_login/show_loginpage');
         }
      }
      
       public function logout()
   {
     $this->session->unset_userdata('status','name');
     
          $this->session->set_flashdata('logout','Successfully logged out ');
            redirect('admin/con_login/show_loginpage');
   }
   
  
}