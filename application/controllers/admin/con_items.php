<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Con_items extends CI_Controller {
   
   public function __construct() {
      parent::__construct();
      $this->load->model('mod_items');
      }
      
      public function show_category()
      {
         $data['value1']=$this->mod_items->show_category(); 
          
       $this->load->view('admin/show_category',$data);
      }
       
         public function show_products()
      {
         
         $data['value2']=$this->mod_items->show_products(); 
         $data['value3']=$this->mod_items->show_category(); 
       $this->load->view('admin/show_products',$data);
      }
      
      public function add_category()
      {
         $this->load->view('admin/add_category');
      }
        public function process_category()
      {
         $data['category_name']=$this->input->post('category_name');
         $data['category_image']=$_FILES['image']['name'];
         
         $source=$_FILES['image']['tmp_name'];
           $destination=BASEPATH."../uploads/".$_FILES['image']['name'];
           move_uploaded_file($source,$destination);
            
           $this->mod_items->upload_category($data);
           $this->session->set_flashdata('uploaded','Successfully uploaded');
            redirect('admin/con_items/show_category');
         
      }
      public function edit_category($id)
      {
         $data['value']=$this->mod_items->select_category($id);
         $this->load->view('admin/edit_category',$data);
      }
      public function process_edit_category($id)
      {
         $data['category_name']=$this->input->post('category_name');
         
         
         $img1=$this->input->post('hidden');
         $img2=$_FILES['image']['name'];
          
           if ($img2=='')
           {
              $data['category_image']=$img1;
           }
           else
           {
              $data['category_image']=$img2;
              unlink(BASEPATH."../uploads/".$img1);
              
           }
         
         
         $source=$_FILES['image']['tmp_name'];
           $destination=BASEPATH."../uploads/".$_FILES['image']['name'];
           move_uploaded_file($source,$destination);
            
           $this->mod_items->upload_edit_category($data,$id);
           $this->session->set_flashdata('edited','Successfully edited : '.$data['category_name']);
            redirect('admin/con_items/show_category');
         
      }
     
      public function delete_category($id)
      {
          $data['value']=$this->mod_items->select_category($id);
           
           $r=$data['value']->row();
           
           unlink(BASEPATH."../uploads/".$r->category_image);
           $v=$r->category_name;
           $this->mod_items->delete_category($id);
           $this->session->set_flashdata('deleted','Successfully deleted : '.$v);
        
          redirect('admin/con_items/show_category');
        
      }
      
      public function add_product()
      {  
         $data['value']=$this->mod_items->show_category();
         $this->load->view('admin/add_product',$data);
      }
      
      public function process_product()
      {
         $data['product_name']=$this->input->post('productname');
           $data['product_description']=$this->input->post('description');
           $data['product_price']=$this->input->post('price');
           $data['product_category']=$this->input->post('category');
           
           $data['product_image']=$_FILES['image']['name'];
           
      
           
           $source=$_FILES['image']['tmp_name'];
           $destination=BASEPATH."../uploads/".$_FILES['image']['name'];
           move_uploaded_file($source,$destination);
           
           $this->mod_items->upload_product($data);
            $this->session->set_flashdata('uploaded','Successfully uploaded');
            redirect('admin/con_items/show_products');
      }
      
      
      public function edit_product($id)
      {
         $data['value1']=$this->mod_items->show_category();
         $data['value2']=$this->mod_items->select_product($id);
         
         $this->load->view('admin/edit_product',$data);
      }
      
        public function process_edit_product($id)
      {
         $data['product_name']=$this->input->post('productname');
           $data['product_description']=$this->input->post('description');
           $data['product_price']=$this->input->post('price');
           $data['product_category']=$this->input->post('category');
         
         
         $img1=$this->input->post('hidden');
         
         $img2=$_FILES['image']['name'];
          
           if ($img2=='')
           {
              $data['product_image']=$img1;
           }
           else
           {
              $data['product_image']=$img2;
              unlink(BASEPATH."../uploads/".$img1);
              
           }
         
         
         $source=$_FILES['image']['tmp_name'];
           $destination=BASEPATH."../uploads/".$_FILES['image']['name'];
           move_uploaded_file($source,$destination);
            
           $this->mod_items->upload_edit_product($data,$id);
           $this->session->set_flashdata('edited','Successfully edited : '.$data['product_name']);
            redirect('admin/con_items/show_products');
         
      }
      
      
      public function delete_product($id)
      {
          $data['value']=$this->mod_items->select_product($id);
           
           $r=$data['value']->row();
           
           unlink(BASEPATH."../uploads/".$r->product_image);
           $v=$r->product_name;
           $this->mod_items->delete_product($id);
           $this->session->set_flashdata('deleted','Successfully deleted : '.$v);
        
          redirect('admin/con_items/show_products');
        
      }
      
}
