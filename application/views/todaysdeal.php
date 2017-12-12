
<br>
<div class=" well">
<?php 
$this->load->view('includes/menu.php');

?>
</div>
<hr>

<div class="container well"> 
  
   <div class="row">
      
      <div class="col-lg-9">
   
         <div class="thumbnail">
               <?php $r=$value1->row();?>
               <a href="<?php echo site_url('uploads/'.$r->deal_pic);?>" rel="prettyPhoto" title="<?php echo $r->deal_title;?>">
         <img class="thumbnail"src="<?php echo site_url('uploads/'.$r->deal_pic);?>" />
         </a>
            
         <div class="caption">
               <h1><?php echo $r->deal_title;?></h1>
               <h4> <p>Old Price :$<s><?php echo $r->deal_price+(28%$r->deal_price);?></s> </h4><h4> New Price : $<?php echo $r->deal_price;?> </p></h4>
        
         
         
               <a href="<?php echo site_url('todaysdeal_controller/add_to_cart/'.$r->id);?>">    
         <button class="btn btn-warning btn-lg" type="button" >
              <span class="glyphicon glyphicon-shopping-cart"></span> Add to Cart 
         </button></a>
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
      
      </div>
       <?php $num=0; 
             foreach($value2->result() as $s) 
             { 
                $num+=1;
             } 
             
               $num2=0; 
              foreach ($this->cart->contents() as $items) 
              { 
                $num2+=1;
              } 
      
          
          
          
          
          ;?>
      
      <div class="col-lg-3"> 
      
       <?php if(!null == ($this->session->userdata('status'))){?>
                <?php if($this->session->flashdata('deal_cart')){?>
            <div class="row">
               <div class="col-lg-12">
                            <div class="alert alert-success" role="alert">
                              <span class="glyphicon glyphicon-ok-sign"></span>   <?php echo $this->session->flashdata('deal_cart');?>
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
      
     
         <h3>Latest Deals</h3>
         
         <h2><hr></h2>
          <?php 
                 $num2=1;
               foreach($value2->result() as $s) { 
           if($num2<=6){  ?> 
         <a href="<?php echo site_url('todaysdeal_controller/display_deal/'.$s->id);?>">
          <div class="row">
              
             <div class="col-lg-12">
                 
                 
                
                    <?php echo $s->deal_title;
                    echo " &nbsp;&nbsp;&nbsp;"."@ &nbsp;&nbsp;$";
                    echo $s->deal_price;
                    ?>
                
                 
             </div> 
      
          </div>
          </a>
         <hr>
       <?php $num2+=1;}
          
             }?>
         
          <a href="<?php echo site_url('todaysdeal_controller/display_all_todaysdeal');?>"> 
         <button class="btn btn-success btn-lg" type="button">
                  All Deals &nbsp;<span class="badge"><?php echo $num;?></span>
         </button></a>
         </div> 
      </div>
   
   </div>

</div>

<?php 
$this->load->view('includes/footer.php');

?>