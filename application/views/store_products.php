<br>
<div class=" well">
<?php 
$this->load->view('includes/menu.php');

?>
</div>

<div class="container well">
   Categories:
   <?php foreach($value2->result()as $s){;?>
      <a href="<?php echo site_url('store_controller/get_products/'.$s->id);?>">       
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
<div class="col-lg-3">
   
      
         <div class="thumbnail">
         
              <a href="<?php echo site_url('store_controller/single_store_product/'.$r->id);?>"> 
               <img src="<?php echo site_url('uploads/'.$r->product_image);?>" height="350" width="350" ></a>
              
               <div class="caption">
                 <h5>   Item: <?php echo $r->product_name ;?></h5>
                    <h5>Price:  $<?php echo $r->product_price ;?></h5>
              
               
            <a href="<?php echo site_url('store_controller/single_store_product/'.$r->id);?>">    
         <button class="btn btn-info btn-lg" type="button" >
            <span class="glyphicon glyphicon-search"></span>&nbsp;&nbsp; View item
         </button></a>
               
         </div>
         </div>
       
         
      
      </div>

             
      <?php }?>
   


</div>


<?php 
$this->load->view('includes/footer.php');

?>
