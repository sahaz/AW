<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

   class Products_controller extends CI_Controller {
   
      
      
      public function __construct() 
      {
        parent::__construct();
         $this->load->model('mod_items');
         
         
      }
      public function show_category()
      {
         $data['value1']=$this->mod_items->show_category();
         $data['title']="PRODUCTS";
         $this->load->view('category',$data);
      }
      public function show_products($id)
      {
         $data['value1']=$this->mod_items->choose_products($id);
         $data['value2']=$this->mod_items->show_category();
            $title1=$data['value1']->row();
            $data['title2']=$this->mod_items->select_category($title1->product_category);
          $title3=$data['title2']->row();
            $data['title']=$title3->category_name;
         $this->load->view('products',$data);
      }
      
      public function show_each_products($id)
      {
         $data['value1']=$this->mod_items->select_product($id);
         $data['value2']=$this->mod_items->show_products();
         $data['value3']=$this->mod_items->show_category();
         
         $this->load->view('single_product',$data);
      }
      
      
   }