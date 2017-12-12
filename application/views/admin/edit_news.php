<?php
$this->load->view('admin/includes/header.php');
$this->load->view('admin/includes/menu.php');
$r=$value->row();
?>
<div class="container well"> 
<h1>EDIT NEWS :</h1><br>
<form class="form-horizontal" id="baseform" action="<?php echo site_url('admin/con_news/process_edit_news/'.$r->id);?>" method="POST" enctype="multipart/form-data" >
   
   <div class="form-group">
      <label class="col-sm-3 control-label">News Headline:</label>
      <div class="col-sm-6">
      <input type="text" name="headline" id="headline" value="<?php echo $r->headline;?>" class="required form-control" />
      </div>
   </div>
   
    
   <div class="form-group">
      <label class="col-sm-3 control-label">Date:</label>
      <div class="col-sm-6">
      <input type="text"   name="date" id="date"  value="<?php echo $r->date;?>" class="required form-control"/>
      </div>
   </div>
   
    
   <div class="form-group">
      <label class="col-sm-3 control-label">Location:</label>
      <div class="col-sm-6">
        <input type="text"  name="location" id="location"  value="<?php echo $r->location;?>" class="required form-control"/>
      </div>
   </div>
   
   
   <div class="form-group">
      <label class="col-sm-3 control-label">News:</label>
      <div class="col-sm-6">
        <textarea rows="7" cols="28" name="news"  class="required form-control"><?php echo $r->news;?></textarea>
             <script>
                    CKEDITOR.replace('news');
            </script>
      </div>
   </div>
  
   <div class="form-group">
      <label class="col-sm-3 control-label"> Image:</label>
      <div class="col-sm-6">
        <input type="file" name="image" id="image" />
         <p class="help-block">upload news images </p>
      </div>
   </div>
   <br>
   
   <div class="form-group">
        <div class="col-md-4 control-label">
  <input type="submit" class="btn btn-info" id="submit" name="submit" value="UPLOAD" /><br><br>
  <input type="hidden" id="hidden" name="hidden" value="<?php echo $r->headlinepic;?>" /><br><br>      
        </div>
        </div>

   
</form>
</div>