<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('welcome_message');
	}
        public function home()
	{
                $data['home']="Viewing HOME from CI";
		$this->load->view('home',$data);
	}
        public function aboutus()
	{
                  $data['aboutus']="Viewing ABOUTUS from CI";
		$this->load->view('aboutus',$data);
	}
        public function image()
	{
                  $data['image']="Viewing image from CI";
		$this->load->view('image',$data);
	}
        public function contactus()
	{
                  $data['contactus']="Viewing contactus from CI";
		$this->load->view('contactus',$data);
	}
        
        public function __construct()
        {
           parent::__construct();
           $this->load->model('mymodel');
        }
        public function add()
        {
            $name=$this->input->post('name');
            $address=$this->input->post('address');
            
            $abc['name']=$name;
            $abc['address']=$address;
            
            $this->mymodel->save($abc);
            
        }
        
        public function update()
        {
           $data['name']="Alis";
           $data['address']="Goganbu Buspark";
           $this->mymodel->update($data,11);
           
        }
        public function delete()
        {
           $this->mymodel->delete(12);
        }
        
        public function select()
        {
           $data['value']=$this->mymodel->gettable();
           $this->load->view('display',$data);
        }
        
        
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */