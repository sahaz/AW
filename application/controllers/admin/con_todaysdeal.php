<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

   class Con_todaysdeal extends CI_Controller {
   
         
      public function __construct() {
         parent::__construct();
          $this->load->model('mod_todaysdeal');
      }
      
      public function show_todaysdeal()
      {
         $data['value']=$this->mod_todaysdeal->show_deal();
          $this->load->view('admin/show_todaysdeal',$data);
      }
      
     public function add_deal()
      {
          $this->load->view('admin/add_deal');
      }
      
      public function process_deal()
      {
          $data['deal_title']=$this->input->post('title');
           $data['deal_price']=$this->input->post('price');
           $data['deal_pic']=$_FILES['image']['name'];
           $source=$_FILES['image']['tmp_name'];
           $destination=BASEPATH."../uploads/".$_FILES['image']['name'];
           move_uploaded_file($source,$destination);
           
           $this->mod_todaysdeal->upload_todaysdeal($data);
             redirect('admin/con_todaysdeal/show_todaysdeal');
      }
   
       public function edit_deal($id)
      {
        $data['value']=$this->mod_todaysdeal->select_deal($id);
        $this->load->view('admin/edit_deal',$data);
      }
      
      public function process_edit_deal($id)
      {
           $data['deal_title']=$this->input->post('title');
           $data['deal_price']=$this->input->post('price');
           
           $img1=$this->input->post('hidden');
           
           $img2=$_FILES['image']['name'];
           if ($img2=='')
           {
              $data['deal_pic']=$img1;
           }
           else
           {
              $data['deal_pic']=$img2;
              unlink(BASEPATH."../uploads/".$img1);
              
           }
           $source=$_FILES['image']['tmp_name'];
           $destination=BASEPATH."../uploads/".$_FILES['image']['name'];
           move_uploaded_file($source,$destination);
           
           
           $this->mod_todaysdeal->upload_edit_deal($data,$id);
           redirect('admin/con_todaysdeal/show_todaysdeal');
      }
      
   public function delete_deal($id)
      {
           
       
           $data['value']=$this->mod_todaysdeal->select_deal($id);
           
           $r=$data['value']->row();
           unlink(BASEPATH."../uploads/".$r->deal_pic);
           
           $this->mod_todaysdeal->delete_deal($id);
        
          redirect('admin/con_todaysdeal/show_todaysdeal');
        
      }
      
      
   }
   
   
   
   
