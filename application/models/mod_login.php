<?php 
class Mod_login extends CI_Model{
   
   
   
   public function check_user($data)
   {
      
         $res=$this->db->get_where('user',array('email'=>$data['email'], 'password'=>$data['password'],'access_level'=>"client"));
         return $res;
   }
   
   public function check_admin($data)
   {
      
         $res=$this->db->get_where('user',array('email'=>$data['email'], 'password'=>$data['password'],'access_level'=>"admin"));
         return $res;
   }
    public function register_user($data)
   {
      $this->db->insert('user',$data);
   }
}