
<?php 
$this->load->view('admin/includes/header.php');
$this->load->view('admin/includes/menu.php');

$r=$value2->row();
?>


<div class="container well"> 

<h1>Edit PRODUCT :</h1><br>
<form class="form-horizontal" id="baseform" action="<?php echo site_url('admin/con_items/process_edit_product/'.$r->id);?>" method="POST" enctype="multipart/form-data" >
   
   <div class="form-group">
      <label class="col-sm-3 control-label">PRODUCT NAME:</label>
      <div class="col-sm-6">
      <input type="text" name="productname" id="productname" value="<?php echo $r->product_name;?>"  class="required form-control" />
         
      </div>
   </div>
   
   
   <div class="form-group">
      <label class="col-sm-3 control-label">PRODUCT DESCRIPTION:</label>
      <div class="col-sm-6">
      <textarea rows="3" cols="30" name="description"  class="required form-control"><?php echo $r->product_description;?></textarea><br><br>
          <script>
                    CKEDITOR.replace('description');
            </script>
      </div>
   </div>
   
   <div class="form-group">
      <label class="col-sm-3 control-label">PRODUCT PRICE:</label>
      <div class="col-sm-6">
      <input type="text" name="price" id="price" value="<?php echo $r->product_price;?>" class="required form-control" />
         
      </div>
   </div>
   
   <div class="form-group">
      <label class="col-sm-3 control-label">Choose category of the product:</label>
      <div class="col-sm-6">
       <select name="category" id="category" class="required form-control">
     
     <?php 
       foreach ($value1->result() as $s)
      {  ?>
         <option value="<?php echo $s->id;?>" <?php if(($s->id)==($r->product_category)){ ?> selected="selected"<?php };?>> <?php echo $s->category_name;?> </option>
       
      <?php } ?>
      
      </select>
         
      </div>
   </div>
   
   <div class="form-group">
      <label class="col-sm-3 control-label"> PRODUCT IMAGE:</label>
      <div class="col-sm-6">
         <input type="file" name="image" id="image" />
         <p class="help-block">upload product image </p>
      </div>
   </div>
   <br>
   <div class="form-group">
        <div class="col-md-4 control-label">
  <input type="submit" class="btn btn-info" id="submit" name="submit" value="UPLOAD" /><br><br>
   <input type="hidden" id="hidden" name="hidden" value="<?php echo $r->product_image;?>"/>     
        </div>
        </div>
  
   
</form>
</div>





















