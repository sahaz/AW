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

<a class="btn btn-success" href="<?php echo site_url('admin/con_items/add_product');?>">Add Products</a><br><br>

<div class="table-responsive">
<table border="2" class="table table-striped table-hover table-condensed" >
   <tr>
      <th>Product Name</th>
      <th>Price</th>
      <th>Image</th>
      <th>Category</th>
      <th colspan="2">Modification options</th>
   </tr>
   <?php 
   
   
   foreach($value2->result() as $r)
   {
      echo'<tr>';
      echo'<td align="center">';
      echo $r->product_name;

      echo'<td align="center">';
      echo "<p>".$r->product_price."</p>";
      
       
       
      echo'<td align="center">';
      ?><img src="<?php echo site_url('uploads/'.$r->product_image);?>" height=124 width=115 border="2" />
      
      <?php 
      foreach($value3->result() as $s) 
      {  if($s->id == $r->product_category)
         {
                echo'<td align="center">';
                  echo $s->category_name;
      
         }
      }
     ?>

 <td width="75" align="center"><a href="<?php echo site_url('admin/con_items/edit_product/'.$r->id);?>"><div class="btn btn-warning">EDIT</div></a></td>
   <td width="75" align="center"><a href="<?php echo site_url('admin/con_items/delete_product/'.$r->id);?>"><div class="btn btn-danger">DELETE</div></a></td>
<?php
   }
?>
            
</table>
</div>
