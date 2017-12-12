<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

   class Todaysdeal_controller extends CI_Controller {
      
   
   
      public function __construct() 
      {
        parent::__construct();
         $this->load->model('mod_todaysdeal');
           $this->load->library('cart');
         
      }
      
      public function display_all_todaysdeal()
      {
         
      
       $data['value1']=$this->mod_todaysdeal->show_deal();
         $data['title']="TODAY'S DEAL";
         $this->load->view('todaysdeal_main',$data);
                 
     
      }
       public function display_deal($id)
      {
         
      
       
       $data['value1']=$this->mod_todaysdeal->select_deal($id);
       $data['value2']=$this->mod_todaysdeal->show_deal();
         
         $this->load->view('todaysdeal',$data);
                 
     
      }
        public function add_to_cart($id)
         {        
                  if(null == ($this->session->userdata('status'))){
                    
            $this->session->set_flashdata('error_cart',"Error !! Sign In to use Add to Cart feature");
            redirect('todaysdeal_controller/display_deal/'.$id);
                       
                    }
                    else{
            
           $data= $this->mod_todaysdeal->select_deal($id);
           
           $r=$data->row();
           $data2 = array(
               'id'      => $r->id,
               'name'     => $r->deal_title,
               'price'   => $r->deal_price,
               'qty'    => '1'
           
            );

            $this->cart->insert($data2);
            
            $this->session->set_flashdata('deal_cart',"Successfully added to cart. ");
            redirect('todaysdeal_controller/display_deal/'.$r->id);
                    }
         }
   
          public function view_cart()
         {
            $this->load->view('display_cart');
         }
      
      
   }   