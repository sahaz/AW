<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

   class Contactus_controller extends CI_Controller {
   
      
      
      public function __construct() 
      {
        parent::__construct();
         
         
      }
      public function show_contactus()
      {  
         
         $data['title']="CONTACT US";
         $this->load->view('contactus',$data);
      }
         public function send_feedback()
      {
          $email=$this->input->post('email');
          $name=$this->input->post('name');
           $content=$this->input->post('content');
      
            
          $this->load->library('email');
          $config['mail_type']='html';
          $this->email->initialize($config);
         
          $this->email->from($email, $name);
          $this->email->to('sahazb@icloud.com'); 


          $this->email->subject('Feedback/Queries');
          $this->email->message($content);	

          if($this->email->send())
             {
             
              $this->session->set_flashdata('email_sent'," Email Sent. Thanks for your Feedback");
           
          redirect('contactus_controller/show_contactus');
          }
          else
             {
           $this->session->set_flashdata('email_notsent'," Sorry ! Email not sent.Try again");
           
          redirect('contactus_controller/show_contactus');  
          }

          
         
         
      }
   }