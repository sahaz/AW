<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

   class Login_controller extends CI_Controller {
      
   
   
      public function __construct() 
      {
        parent::__construct();
         $this->load->model('mod_login');
         $this->load->library('cart');
         
         
      }
      
      
      public function process_signin()
      {
            $data['email']=$this->input->post('email');
           $data['password']=$this->input->post('pass');
           $data['password']=md5($data['password']); 
           
           $result=$this->mod_login->check_user($data);
          $r= $result->row();
            if(!empty($r))
         {
            $session_array=array('status'=>$r->email,'name'=>$r->name);
           
            $this->session->set_userdata($session_array);
            redirect('apertureworld/index');
         }
         else
         {
           
            $this->session->set_flashdata('error','Authentication Failure : Username & Password unmatched');
            redirect('apertureworld/index');
         }
      }
       public function logout()
       {
         $this->session->unset_userdata('status','name');
         $this->cart->destroy();
          $this->session->set_flashdata('signout',' Successfully Logged out ');
            redirect('apertureworld/index'); 
       }
         
       public function signup()
       { 
          $data['title']="SIGN UP";
          $this->load->view('signup_form',$data);
       }
       
       public function sign_in()
       {
          $data['title']="SIGN IN";
          $this->load->view('signin_form',$data);
       }
       
        public function process_signup_form()
      {
            $data['name']=$this->input->post('name');
            $data['address']=$this->input->post('address');
            $data['email']=$this->input->post('email');
           $data['password']=$this->input->post('pass');
           $data['password']=md5($data['password']); 
           $data['access_level']="client";
           
            $this->mod_login->register_user($data);
            $this->session->set_flashdata('register','Successfully registered. Now use your Email and Password to sign in');
            redirect('login_controller/signup');
      }
   }
   