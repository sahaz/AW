<?php
$this->load->view('admin/includes/header.php');
$this->load->view('admin/includes/menu.php');
?>

<div class="container well"> 
   

<a  class="btn btn-success" href="<?php echo site_url('admin/con_todaysdeal/add_deal');?>">Add DEALS</a><br><br>

<div class="table-responsive">
<table border=2 class="table table-striped table-hover table-condensed" >

   <tr>
      <th>Deal Title</th>
      <th>Deal Price</th>
      <th>Picture</th>
      <th colspan="2">Modification options</th>
   </tr>
   <?php 
   
   
   foreach($value->result() as $r)
   {
      echo'<tr>';
      echo'<td align="center">';
      echo $r->deal_title;
      
      echo'<td align="center">';
      echo $r->deal_price;
     
      
       
      echo'<td align="center">';
      ?><img src="<?php echo site_url('uploads/'.$r->deal_pic);?>" height=124 width=115 border="5" />
     
 <td width="75" align="center"><a href="<?php echo site_url('admin/con_todaysdeal/edit_deal/'.$r->id);?>"><div class="btn btn-warning">EDIT</div></a></td>
   <td width="75" align="center"><a href="<?php echo site_url('admin/con_todaysdeal/delete_deal/'.$r->id);?>"><div class="btn btn-danger">DELETE</div></a></td>
<?php
   }
?>
</div>
</div>