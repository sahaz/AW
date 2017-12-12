<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

   class Store_controller extends CI_Controller {
   
      
      
      public function __construct() 
      {
        parent::__construct();
         $this->load->model('mod_items');
          $this->load->library('cart');
          $this->load->library('email');
          
         
      }
      public function status()
              {
         $this->load->view('status');
      }
      public function show_store()
      {
         $data['value1']=$this->mod_items->show_category();
         $data['title']="STORE";
         $this->load->view('store_main',$data);
      }
       public function get_products($id)
      {
         $data['value1']=$this->mod_items->choose_products($id);
         $data['value2']=$this->mod_items->show_category();
          $title1=$data['value1']->row();
            $data['title2']=$this->mod_items->select_category($title1->product_category);
          $title3=$data['title2']->row();
            $data['title']=$title3->category_name;
         $this->load->view('store_products',$data);
                  
      }
       public function single_store_product($id)
      {
         $data['value1']=$this->mod_items->select_product($id);
         $data['value2']=$this->mod_items->show_products();
         
         $this->load->view('single_store_product',$data);
      }
      public function add_to_cart($id)
         {
                    if(null == ($this->session->userdata('status'))){
                    
            $this->session->set_flashdata('error_cart',"Error !! Sign In to use Add to Cart feature");
            redirect('store_controller/single_store_product/'.$id);
                       
                    }
                    else{
           $data= $this->mod_items->choose_cart_item($id);
           
           $r=$data->row();
           $data2 = array(
               'id'      => $r->id,
               'name'     => $r->product_name,
               'price'   => $r->product_price,
               'qty'    => $this->input->post('quantity')
               
            );

            $this->cart->insert($data2);
            
            $this->session->set_flashdata('cart',"Successfully added to cart !!");
            redirect('store_controller/single_store_product/'.$r->id);
                    }
         }
   
          public function view_cart()
         {  
             if(!null == ($this->session->userdata('status'))){
             $data['title']="YOUR CART";
            $this->load->view('display_cart',$data);
             }else{
                $this->load->view('signin_form');
             }
         }
         public function update($id)
         {     
            $data = array(
               'rowid' => $id,
               'qty'   => $this->input->post('qty')
            );

            $this->cart->update($data); 
            $this->load->view('display_cart');
         }
         public function delete_cart($id)
         {
                
            $data = array(
               'rowid' => $id,
               'qty'   => 0
            );

            $this->cart->update($data); 
            $this->load->view('display_cart');
         }
         
         
         public function check_out()
         {
            
          $name=$this->session->userdata('name');
          $email=$this->session->userdata('status');
            
           $this->load->library('email');
          $config['mail_type']='html';
          $this->email->initialize($config);
         
          $this->email->from($email, $name);
          $this->email->to('sahazbhattarai@gmail.com'); 


          $this->email->subject('Purchase Order');
          
        
           $message_content = "
<html>
 <body>
  <table>";
    foreach ($this->cart->contents() as $items){
       $message_content .="<tr><td>";
      $message_content .= $items['name'];
    $message_content .= "</td><td>";
           $message_content .= $items['qty'];
    $message_content .= "</td><td>";
         $message_content .= $this->cart->format_number($items['price']);
         $message_content .= "</td><td> $";
         $message_content .= $this->cart->format_number($items['subtotal']);
         $message_content .= "</td></tr>";
         
    }
$message_content .= "<tr><td> $";
 
       $message_content .= $this->cart->format_number($this->cart->total());
       $message_content .= "</td></tr></table></body></html> ";$message_content = "
<html>
 <body>
  <table>";
    foreach ($this->cart->contents() as $items){
       $message_content .="<tr><td>";
      $message_content .= $items['name'];
    $message_content .= "</td><td>";
           $message_content .= $items['qty'];
    $message_content .= "</td><td>";
         $message_content .= $this->cart->format_number($items['price']);
         $message_content .= "</td><td> $";
         $message_content .= $this->cart->format_number($items['subtotal']);
         $message_content .= "</td></tr>";
         
    }
$message_content .= "<tr><td> $";
 
       $message_content .= $this->cart->format_number($this->cart->total());
       $message_content .= "</td></tr></table></body></html> ";

                $this->email->message($message_content);
  
                
                 if($this->email->send())
             {
             $this->session->set_flashdata('email'," Successfully Sent !");
            redirect('store_controller/view_cart');
           
        
          }
          else
             {
           $this->session->set_flashdata('email'," Error Email not Sent !");
            redirect('store_controller/view_cart');
          }

                }
            
   }
   