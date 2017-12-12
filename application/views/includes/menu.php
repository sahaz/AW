<?php $this->load->view('includes/header.php');?>

<div class="row">
   <div class="col-lg-9">
     <a href="<?php echo site_url('apertureworld/index'); ?>">  <img  class="img-rounded" src="<?php echo site_url('uploads/aboutus.jpg');?>" height="60" width="170" /></a>
</div>
   
   <div class="col-lg-3">
    
      <?php 
      
      if(null == ($this->session->userdata('status')))
      {    
                  echo '<p class="text-right lead"><strong>'."Welcome"."</strong></p>";
                  echo '<p class="text-right">'.'<span class="glyphicon glyphicon-user">'.'</span>';
                    echo " Guest ";?>
       &nbsp;&nbsp;<a class="btn btn-success btn-xs" href="<?php echo site_url('login_controller/sign_in'); ?>"> Sign In <span class="glyphicon glyphicon-log-in"></span></a></p>
            
 <?php
      }
      else
      {
         $value=$this->session->userdata('status');
                  $value2=$this->session->userdata('name');
                
                 
                 echo '<p class="text-right lead"><strong>'."Welcome"."</strong></p>";
          echo '<p class="text-right"><em>'.'<span class="glyphicon glyphicon-tower">'.'</span>';
                 echo "  ".$value2 ."  </em>";?>
   <a class="btn btn-warning btn-xs" href="<?php echo site_url('store_controller/view_cart');?>">
      <span class="glyphicon glyphicon-shopping-cart"></span> Cart</a> <a class="btn btn-danger btn-xs" href="<?php echo site_url('login_controller/logout');?>">
        Logout <span class="glyphicon glyphicon-new-window"></span></a></p>
   
           
                  
      <?php } ?>
   
</div>
  
</div>
</div>


  <div class="row">
    <div class="col-lg-12">
   <ul class="navbar navbar-default nav-justified">
      
      
      
      <li ><a class="btn btn-primary btn-xs" href="<?php echo site_url('apertureworld/index'); ?>"><h5><span class="glyphicon glyphicon-home"></span> HOME</h5></a></li>

      <li ><a class="btn btn-primary btn-xs" href="<?php echo site_url('news_controller/display_all_news'); ?>"><h5><span class="glyphicon glyphicon-home"></span> NEWS</h5></a></li>
 
   <li ><a class="btn btn-primary btn-xs" href="<?php echo site_url('products_controller/show_category'); ?>"><h5><span class="glyphicon glyphicon-camera"></span> PRODUCTS</h5></a></li>
   
   <li ><a  class="btn btn-primary btn-xs"   href="<?php echo site_url('store_controller/show_store'); ?>"><h5><span class="glyphicon glyphicon-shopping-cart"></span> STORE</h5></a></li>
   
   <li ><a  class="btn btn-primary btn-xs"  href="<?php echo site_url('aboutus_controller/show_aboutus'); ?>"><h5><span class="glyphicon glyphicon-tower"></span> ABOUTUS</h5></a></li>
   
   <li ><a class="btn btn-xs btn-primary" href="<?php echo site_url('contactus_controller/show_contactus'); ?>"><h5><span class="glyphicon glyphicon-phone-alt"></span> CONTACTUS</h5></a></li>

   
   </ul>
   </div>
  </div>
       
      
   
   

   