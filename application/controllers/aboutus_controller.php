<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

   class Aboutus_controller extends CI_Controller {
            public function __construct() 
      {
        parent::__construct();
         $this->load->model('mod_ourteam');
         
         
      }
      public function show_aboutus()
      {
         $data['value1']=$this->mod_ourteam->show_aboutus();
         $data['title']="ABOUT US";
         $this->load->view('aboutus',$data);
         
      }
   }