<?php 
class Mod_news extends CI_Model{
   
public function show_news()
{
   $value=$this->db->get('news');
   return $value;
}


public function upload_news($data)
{
   $this->db->insert('news',$data);
}

public function select_news($id)
{
   $value=$this->db->get_where('news',array("id"=>$id));
   return $value;
}

public function upload_edit_news($data,$id)
{
   $this->db->where('id',$id);
   $this->db->update('news',$data);
}

public function delete_news($id)
{
   $this->db->where('id',$id);
   $this->db->delete('news');
}
        


}
 
