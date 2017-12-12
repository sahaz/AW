<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

   class News_controller extends CI_Controller {
      
   
   
      public function __construct() 
      {
        parent::__construct();
         $this->load->model('mod_news');
         
         
      }
      
      public function display_news($id)
      {
        
       $data['value1']=$this->mod_news->select_news($id);
       $data['value2']=$this->mod_news->show_news();
         
         $this->load->view('news',$data);
                 
      }
       public function display_all_news()
      {
        
      
       $data['value1']=$this->mod_news->show_news();
         $data['title']="NEWS";
         $this->load->view('news_main',$data);
                 
      }
   }