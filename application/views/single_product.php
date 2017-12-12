<br>
<div class=" well">
<?php 
$this->load->view('includes/menu.php');

?>
</div>

<div class="container well"> 
     Categories:
   <?php foreach($value3->result()as $s){;?>
      <a href="<?php echo site_url('products_controller/show_products/'.$s->id);?>">       
                <button class="btn btn-default btn-xs" type="button" >
                <span class="glyphicon glyphicon-search"></span> <?php echo $s->category_name;?>
                  </button></a>
                  <?php }?><hr>
   <div class="row">
      
      <div class="col-lg-9">
   
         <div class="thumbnail">
               <?php $r=$value1->row();?>
             <a href="<?php echo site_url('uploads/'.$r->product_image);?>" rel="prettyPhoto" title="<?php echo $r->product_name;?>">   
            <img class="thumbnail"src="<?php echo site_url('uploads/'.$r->product_image);?>" height="450" width="350" ></a>
         <div class="caption">
               <h1><?php echo $r->product_name;?></h1><hr>
               <p><?php echo $r->product_description."<br>";
              ?></p>
               For the price of  <strong><?php echo $r->product_name;?></strong> or to purchase it, please visit Store Section from here:
                 <a href="<?php echo site_url('store_controller/single_store_product/'.$r->id);?>"> 
                <button class="btn btn-warning btn-md" type="button">
                 <span class="glyphicon glyphicon-shopping-cart"></span> Store 
               </button></a>
              
         </div>
         </div>
         
      
      </div>
       <?php $num=0; 
             foreach($value2->result() as $s) { 
                              if($s->product_category==$r->product_category){$num+=1;}} ;?>
      
      <div class="col-lg-3">
         <div class="well well-sm">
       <a href="<?php echo site_url('products_controller/show_products/'.$r->product_category);?>"> 
         <button class="btn btn-danger btn-md" type="button">
                 View all under this category <span class="badge"><?php echo $num;?></span>
         </button></a>
         
         <h2><hr></h2>
          <?php foreach($value2->result() as $t) { 
                if($t->product_category==$r->product_category){  ?>
         <a href="<?php echo site_url('products_controller/show_each_products/'.$t->id);?>">
          <div class="row">
              
             <div class="col-lg-12">
                 
                 
                
                    <?php echo $t->product_name;?>
                 
             </div> 
      
          </div>
          
         </a>
         <hr>
         <?php }?>
          
         
        
             <?php }?>
         
         </div>
         
      </div>
   
   </div>

</div>

<?php 
$this->load->view('includes/footer.php');

?>