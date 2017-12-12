<br>
<div class=" well">
<?php 
$this->load->view('includes/menu.php');

?>
</div>

<div class="container well"> 

      <?php foreach($value1->result() as $r) {?>
      <div class="col-lg-3">
   <div class="well well-sm"> 
         
              <a href="<?php echo site_url('products_controller/show_products/'.$r->id);?>"> 
               <img class="img-rounded" src="<?php echo site_url('uploads/'.$r->category_image);?>" height="230" width="230" >
              </a><hr>
              
              
               <p class="text-center">
               <a href="<?php echo site_url('products_controller/show_products/'.$r->id);?>">    
         <button class="btn btn-primary btn-lg" type="button" >
             <?php echo $r->category_name ;?>
         </button></a></p>
               
      
        
         </div>
         
      
      </div>
      
             
      <?php }?>
   
  

</div>
<?php 
$this->load->view('includes/footer.php');

?>
