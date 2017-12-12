<?php
$this->load->view('admin/includes/header.php');
$this->load->view('admin/includes/menu.php');
?>
<?php
if($this->session->flashdata('uploaded')){?>
<div class="row">
   <div class="col-lg-4">
                <div class="alert alert-success" role="alert">
                     <?php echo $this->session->flashdata('uploaded');?>
</div></div></div>
                
<?php  
}?>
<?php
if($this->session->flashdata('edited')){?>
<div class="row">
   <div class="col-lg-4">
                <div class="alert alert-success" role="alert">
                     <?php echo $this->session->flashdata('edited');?>
</div></div></div>
                
<?php  
}?>
<?php
if($this->session->flashdata('deleted')){?>
<div class="row">
   <div class="col-lg-4">
                <div class="alert alert-warning" role="alert">
                     <?php echo $this->session->flashdata('deleted');?>
</div></div></div>
                
<?php  
}?>
<div class="container well">   

<a class="btn btn-success" href="<?php echo site_url('admin/con_aboutus/add_aboutus');?>">Add About Us</a><br><br>

<div class="table-responsive">
<table border="2" class="table table-striped table-hover table-condensed" >
   <tr>
      <th>About us</th>
     
      <th>Our Team</th>
      <th colspan="2">Modification options</th>
   </tr>
   <?php 
   
   
   foreach($value->result() as $r)
   {
      echo'<tr>';
      echo'<td align="center">';
      echo $r->about_us;
      echo'<td align="center">';
      ?><img src="<?php echo site_url('uploads/'.$r->image);?>" height=220 width=370 border="2" />
      
     ?>

 <td width="75" align="center"><a href="<?php echo site_url('admin/con_aboutus/edit_aboutus/'.$r->id);?>"><div class="btn btn-warning">EDIT</div></a></td>
   <td width="75" align="center"><a href="<?php echo site_url('admin/con_aboutus/delete_aboutus/'.$r->id);?>"><div class="btn btn-danger">DELETE</div></a></td>
<?php
   }
?>
</table>
</div>