<?php
$this->load->view('admin/includes/header.php');
$this->load->view('admin/includes/menu.php');
$r=$value->row();
?>

<div class="container well"> 

<h1>Add About Us :</h1><br>
<form class="form-horizontal" id="baseform" action="<?php echo site_url('admin/con_aboutus/process_edit_aboutus/'.$r->id);?>" method="POST" enctype="multipart/form-data" >
   
   <div class="form-group">
      <label class="col-sm-3 control-label">About Us:</label>
      <div class="col-sm-6">
      <textarea rows="4" cols="20" name="aboutus" id="aboutus" class="required form-control"><?php echo $r->about_us;?></textarea><br><br>
             <script>
                    CKEDITOR.replace('aboutus');
            </script>
      </div>
   </div>
   
   <div class="form-group">
      <label class="col-sm-3 control-label"> Our Team:</label>
      <div class="col-sm-6">
         <input type="file" name="image" id="image" />
         <p class="help-block">upload our team </p>
      </div>
   </div>
   
   <div class="form-group">
        <div class="col-md-4 control-label">
    <input type="hidden" id="hidden" name="hidden"  value="<?php echo $r->image;?>"  /><br><br>      
           <input type="submit" class="btn btn-info" id="submit" name="submit" value="UPLOAD" /><br><br>
        </div>
        </div>
   
      
</form>
</div>
  
   
   