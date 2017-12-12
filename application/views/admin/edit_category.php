

<?php
$this->load->view('admin/includes/header.php');
$this->load->view('admin/includes/menu.php');

$r=$value->row();
?>

<div class="container well"> 
<h1>Edit Categories:</h1><br>


<form  class="form-horizontal" id="baseform" action="<?php echo site_url('admin/con_items/process_edit_category/'.$r->id);?>" method="POST" enctype="multipart/form-data"  >
  
   <div class="form-group">
      <label class="col-sm-3 control-label">Enter a Category:</label>
      <div class="col-sm-6">
      <input type="text" name="category_name" id="category_name" value="<?php echo $r->category_name;?>" class="required form-control"/>
         
      </div>
   </div>
   
   
   <div class="form-group">
      <label class="col-sm-3 control-label">Choose icon:</label>
      <div class="col-sm-6">
         <input type="file" name="image" id="image" />
         <p class="help-block">upload deal image </p>
      </div>
   </div> 
  
   <div class="form-group">
        <div class="col-md-4 control-label">
  <input type="hidden" name="hidden" id="hidden" value="<?php echo $r->category_image;?>" />
           <input type="submit" class="btn btn-info" id="submit" name="submit" value="UPLOAD" /><br><br>
        
        </div>
        </div>
   
   
</form>
</div>
