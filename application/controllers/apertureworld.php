<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

   class Apertureworld extends CI_Controller {
   
      public function __construct() {
         parent::__construct();
         $this->load->model('mod_slider');
          $this->load->model('mod_news');
          $this->load->model('mod_todaysdeal');
         
            
            
         
       
      }
      
    
      
      public function index()
      {
        
       $data['slider']=$this->mod_slider->show_slider_images();
        $data['value2']=$this->mod_news->show_news();
        $data['value3']=$this->mod_todaysdeal->show_deal();
         
         $this->load->view('index',$data);
                 
      }
   }