<?php 
class Mod_todaysdeal extends CI_Model{

   
   public function show_deal()
{
   $value=$this->db->get('todaysdeal');
   return $value;
}

public function upload_todaysdeal($data)
{
   $this->db->insert('todaysdeal',$data);
}

  public function select_deal($id)
{
   $value=$this->db->get_where('todaysdeal',array('id'=>$id));
   return $value;
}

public function upload_edit_deal($data,$id)
{
   $this->db->where('id',$id);
   $this->db->update('todaysdeal',$data);
}

public function delete_deal($id)
{
   $this->db->where('id',$id);
   $this->db->delete('todaysdeal');
}

}