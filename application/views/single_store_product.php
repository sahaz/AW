<br>
<div class=" well">
<?php 
$this->load->view('includes/menu.php');

?>
</div>

<div class="container well"> 
  
   <div class="row">
      
      <div class="col-lg-9">
   
         <div class="thumbnail">
               <?php $r=$value1->row();?>
             <h1><?php echo $r->product_name;?></h1><hr>
             <a href="<?php echo site_url('uploads/'.$r->product_image);?>" rel="prettyPhoto" title="<?php echo $r->product_image;?>">  
             <img class="thumbnail"src="<?php echo site_url('uploads/'.$r->product_image);?>" height="450" width="350" >
             </a>
             <div class="caption">
            <hr>
            <div class="row">
               <div class="col-lg-5">
                  <p class="lead">Item : <?php echo $r->product_name."<br>";?>
                  Price : <strong>$<?php echo $r->product_price."<br>";?></strong></p>
                  <h6><em> *All the items purchased from this site doesn't have any inc. VAT</em></h6>
               </div>
               <div class="col-lg-2">
                  
             <form class="form-horizontal" action="<?php echo site_url('store_controller/add_to_cart/'.$r->id);?>" method="POST" id="baseform" >
                   
           <div class="form-group">
           <label class="col-lg-1 control-label"> Qty: </label>
           <div class="col-lg-8">
           <input type="text" id="quantity" name="quantity" class="required form-control" value="1"  />
           </div>
           </div>
           
        
                  <div class="form-group">
               <div class="col-lg-1 control-label">
               <input type="submit" class="btn btn-warning btn-sm" id="submit" name="submit" value="Add to Cart" />
               </div>
             </div>
               
             </form>
               </div>
               <div class="col-lg-5">
               
               </div>
               
            </div>
            <hr>
               <h3>Product Specifications : </h3><p class="lead text-justify"><small><?php 
              
               echo $r->product_description."<br>";
               
              ?></small></p>
                
                 
             
                  
                  
               
                
              
         </div>
               <div class="caption">
                 <?php if($this->session->flashdata('error_cart')){?>
                  
                <div class="col-lg-5">
                            <div class="alert alert-danger" role="alert">
                           <span class="glyphicon glyphicon-remove-sign"></span> &nbsp;<?php echo $this->session->flashdata('error_cart');?>
                            </div></div> 

            <?php
            }
            ?>
               </div>
         </div>
          
      </div>
       <?php $num=0; 
             foreach($value2->result() as $s) { 
                              if($s->product_category==$r->product_category){$num+=1;}} 
                              
                  $num2=0; 
              foreach ($this->cart->contents() as $items) 
              { 
                $num2+=1;
              } 
      
                         
                              ;?>
      
      <div class="col-lg-3">
         <?php if(!null == ($this->session->userdata('status'))){?>
                <?php if($this->session->flashdata('cart')){?>
            <div class="row">
               <div class="col-lg-12">
                            <div class="alert alert-success" role="alert">
                              <span class="glyphicon glyphicon-ok-sign"></span>   <?php echo $this->session->flashdata('cart');?>
             </div></div></div> 

            <?php
            }
            ?>
               <div class="well well-sm">
           
                <a href="<?php echo site_url('store_controller/view_cart');?>"> 
                <button class="btn btn-warning btn-lg" type="button">
                   &nbsp;Items in Your Cart &nbsp; <span class="glyphicon glyphicon-shopping-cart"></span><span class="badge"><?php echo $num2;?></span>
               </button></a>
                <h5 class="text-center"> Total Amount : $<?php echo $this->cart->format_number($this->cart->total()); ?></h5>
                  <hr>
               
                <div class="row">
               <?php foreach ($this->cart->contents() as $items): ?>
             <div class="col-lg-12">
                 <?php echo $items['name']; ?> &nbsp;&nbsp;
                <?php echo "( ".$items['qty']." )"; ?>
                 
                
                    
             </div> 
      <?php endforeach; ?>
          </div>
            
         </div>
         <?php }?>
         <div class="well well-sm">
       <a href="<?php echo site_url('store_controller/get_products/'.$r->product_category);?>"> 
         <button class="btn btn-primary btn-md" type="button">
                 View all under this category <span class="badge"><?php echo $num;?></span>
         </button></a>
         
         <h2><hr></h2>
          <?php foreach($value2->result() as $t) { 
                if($t->product_category==$r->product_category){  ?>
         <a href="<?php echo site_url('store_controller/single_store_product/'.$t->id);?>">
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