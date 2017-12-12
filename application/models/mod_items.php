<?php 
class Mod_items extends CI_Model{
 
   public function show_category()
   {
      $value=$this->db->get('category');
      return $value;
   }
   
   public function show_products()
   {
      $value=$this->db->get('products');
      return $value;
   }
   
   public function upload_category($data)
   {
      $this->db->insert('category',$data);
   }
   
   public function select_category($id)
   {
      $value=$this->db->get_where('category',array('id'=>$id));
      return $value;
   }
   
   public function upload_edit_category($data,$id)
   {
      $this->db->where('id',$id);
      $this->db->update('category',$data);
   }
   
   
   public function delete_category($id)
   {  
      $this->db->where('id',$id);
      $this->db->delete('category');
   }
   
   
    public function upload_product($data)
   {
      $this->db->insert('products',$data);
   }
   
   public function select_product($id)
   {
      $value=$this->db->get_where('products',array('id'=>$id));
      return $value;
   }
   
   public function upload_edit_product($data,$id)
   {
      $this->db->where('id',$id);
      $this->db->update('products',$data);
   }
   
    public function delete_product($id)
   {  
      $this->db->where('id',$id);
      $this->db->delete('products');
   }
   
   public function choose_products($id)
   {
      $value=$this->db->get_where('products',array('product_category'=>$id));
      return $value;
   }
   public function choose_cart_item($id)
   {
      $value=$this->db->get_where('products',array('id'=>$id));
      return $value;
   }
}