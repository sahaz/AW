<?php
$this->load->view('admin/includes/header.php');
$this->load->view('admin/includes/menu.php');
$r=$value->row();
?>

<div class="container well"> 
<h1>ADD DEAL :</h1><br>
<form class="form-horizontal" id="baseform" action="<?php echo site_url('admin/con_todaysdeal/process_edit_deal/'.$r->id);?>" method="POST" enctype="multipart/form-data" >
   
    <div class="form-group">
      <label class="col-sm-3 control-label">DEAL Title:</label>
      <div class="col-sm-6">
      <input type="text" name="title" id="title"   value="<?php echo $r->deal_title;?>" class="required form-control" />
      </div>
   </div>
   
    <div class="form-group">
      <label class="col-sm-3 control-label">DEAL Price:</label>
      <div class="col-sm-6">
      <input type="text" name="price" id="price"  value="<?php echo $r->deal_price;?>"  class="required form-control" />
      </div>
   </div>
   
   <div class="form-group">
      <label class="col-sm-3 control-label"> Image:</label>
      <div class="col-sm-6">
         <input type="file" name="image" id="image" />
         <p class="help-block">upload deal image </p>
      </div>
   </div>
   <br>
   <div class="form-group">
        <div class="col-md-4 control-label">
            <input type="submit" class="btn btn-info" id="submit" name="submit" value="UPLOAD" />
            <input type="hidden" id="hidden" name="hidden" value="<?php echo $r->deal_pic;?>" />
        </div>
        </div>
</form>
</div>
