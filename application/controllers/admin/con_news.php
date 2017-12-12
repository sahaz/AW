<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

   class Con_news extends CI_Controller {
      
      public function __construct() {
         parent::__construct();
          $this->load->model('mod_news');
      }
      
      
      
      
      public function show_news()
      {
       $data['value']=$this->mod_news->show_news();  
       $this->load->view('admin/show_news',$data);
       
      }
      
      public function add_news()
      {
          $this->load->view('admin/add_news');
      }
      
      public function process_news()
      {
          $data['headline']=$this->input->post('headline');
           $data['date']=$this->input->post('date');
           $data['location']=$this->input->post('location');
           $data['news']=$this->input->post('news');
           $data['headlinepic']=$_FILES['image']['name'];
           
           $source=$_FILES['image']['tmp_name'];
           $destination=BASEPATH."../uploads/".$_FILES['image']['name'];
           move_uploaded_file($source,$destination);
           
           $this->mod_news->upload_news($data);
            redirect('admin/con_news/show_news');
           
      }
      
      public function edit_news($id)
      {
        $data['value']=$this->mod_news->select_news($id);
        $this->load->view('admin/edit_news',$data);
      }
      
      public function process_edit_news($id)
      {
           $data['headline']=$this->input->post('headline');
           $data['date']=$this->input->post('date');
           $data['location']=$this->input->post('location');
           $data['news']=$this->input->post('news');
           $img1=$this->input->post('hidden');
           $img2=$_FILES['image']['name'];
           if ($img2=='')
           {
              $data['headlinepic']=$img1;
           }
           else
           {
              $data['headlinepic']=$img2;
              unlink(BASEPATH."../uploads/".$img1);
              
           }
           $source=$_FILES['image']['tmp_name'];
           $destination=BASEPATH."../uploads/".$_FILES['image']['name'];
           move_uploaded_file($source,$destination);
           
           
           $this->mod_news->upload_edit_news($data,$id);
           redirect('admin/con_news/show_news');
      }
      
   public function delete_news($id)
      {
           
       
           $data['value']=$this->mod_news->select_news($id);
           
           $r=$data['value']->row();
           unlink(BASEPATH."../uploads/".$r->headlinepic);
           
           $this->mod_news->delete_news($id);
        
          redirect('admin/con_news/show_news');
        
      }
      
      
   }
   
   
	
