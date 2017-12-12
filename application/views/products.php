<br>
<div class=" well">
<?php 
$this->load->view('includes/menu.php');

?>
</div>

<div class="container well">
   Categories:
   <?php foreach($value2->result()as $s){;?>
      <a href="<?php echo site_url('products_controller/show_products/'.$s->id);?>">       
                <button class="btn btn-default btn-xs" type="button" >
                <span class="glyphicon glyphicon-search"></span> <?php echo $s->category_name;?>
                  </button></a>
                  <?php }?>
                  
   
   <br>

 
   <?php   $count=0;
                  foreach($value1->result() as $r) {
                     foreach($value2->result()as $s){
                        if($s->id == $r->product_category && $count<1){
                           
                         echo "<h2>".$s->category_name." : </h2>";
                        $count+=1;
                                }
                     }
}
                  
            ?>
<hr>




  <?php foreach($value1->result() as $r) {?>
<div class="col-lg-2">
   
      
         <div class="thumbnail">
         
              <a href="<?php echo site_url('products_controller/show_each_products/'.$r->id);?>"> 
               <img class="thumbnail" src="<?php echo site_url('uploads/'.$r->product_image);?>" height="350" width="500" ></a>
              
               <div class="caption">
                  <h5>  <?php echo $r->product_name ;?></h5>
              
               
            <a href="<?php echo site_url('products_controller/show_each_products/'.$r->id);?>">    
         <button class="btn btn-primary btn-lg" type="button" >
            <span class="glyphicon glyphicon-search"></span> View
         </button></a>
               
         </div>
         </div>
       
         
      
      </div>

             
      <?php }?>
   


</div>


<?php 
$this->load->view('includes/footer.php');

?>
