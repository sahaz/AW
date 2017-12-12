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
<a class="btn btn-success"  href="<?php echo site_url('admin/con_items/add_category');?>">Add a new Category</a><br><br>

<div class="table-responsive">
<table border="2" class="table table-striped table-hover table-condensed" >
   <tr>
      <th>Categories</th>
      <th>Images</th>
      <th colspan="2">Modification options</th>
   </tr>
      <?php foreach($value1->result() as $s)
      {  
         echo '<tr>';
        echo '<td align="center">'.$s->category_name.'</td>';
        echo'<td align="center" >';
        ?><img src="<?php echo site_url('uploads/'.$s->category_image);?>" height=350 width=350 border="2" />
        
        <td align="center"><a href="<?php echo site_url('admin/con_items/edit_category/'.$s->id);?>" ><div class="btn btn-warning">EDIT</div></a></td>
       <td align="center"> <a href="<?php echo site_url('admin/con_items/delete_category/'.$s->id);?>" ><div class="btn btn-danger">DELETE</div></a> </td>
       
          </tr>

    <?php } ?>
            
</table>
</div>

