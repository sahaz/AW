<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Con_dashboard extends CI_Controller {
   
   
   public function show_dashboard()
   {
      $this->load->view('admin/dashboard');
   }
}
   