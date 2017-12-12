<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Con_aboutus extends CI_Controller {
   public function __construct() {
      parent::__construct();
      $this->load->model('mod_ourteam'); 
   }
   
         public function show_aboutus()
         {
            $data['value']=$this->mod_ourteam->show_aboutus();
            $this->load->view('admin/show_aboutus',$data);
         }
         
         public function add_aboutus()
         {
           
            $this->load->view('admin/add_aboutus');
         }
        
         public function process_aboutus()
         {
     
          $data['about_us']=$this->input->post('aboutus');
           
       
         
         
           
           $data['image']=$_FILES['image']['name'];
           
           $source=$_FILES['image']['tmp_name'];
           $destination=BASEPATH."../uploads/".$_FILES['image']['name'];
           move_uploaded_file($source,$destination);
           
           $this->mod_ourteam->upload_aboutus($data);
           $this->session->set_flashdata('uploaded','Successfully uploaded');
             redirect('admin/con_aboutus/show_aboutus');
        
         }
         public function edit_aboutus($id)
      {
        $data['value']=$this->mod_ourteam->select_aboutus($id);
        $this->load->view('admin/edit_aboutus',$data);
      }
      
        public function process_edit_aboutus($id)
      {
         $data['about_us']=$this->input->post('aboutus');
           
       

           
           $img1=$this->input->post('hidden');
           
           $img2=$_FILES['image']['name'];
           if ($img2=='')
           {
              $data['image']=$img1;
           }
           else
           {
              $data['image']=$img2;
              unlink(BASEPATH."../uploads/".$img1);
              
           }
           $source=$_FILES['image']['tmp_name'];
           $destination=BASEPATH."../uploads/".$_FILES['image']['name'];
           move_uploaded_file($source,$destination);
           
           
           $this->mod_ourteam->upload_edit_aboutus($data,$id);
           $this->session->set_flashdata('edited','Successfully edited');
           redirect('admin/con_aboutus/show_aboutus');
      }
      
      public function delete_aboutus($id)
      {
           
       
           $data['value']=$this->mod_ourteam->select_aboutus($id);
           
           $r=$data['value']->row();
           unlink(BASEPATH."../uploads/".$r->image);
           
           $this->mod_ourteam->delete_aboutus($id);
        $this->session->set_flashdata('deleted','Successfully deleted');
          redirect('admin/con_aboutus/show_aboutus');
        
      }
      
         
}