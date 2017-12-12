<?php $this->load->view('includes/header.php');?>

<div class="container well well-sm">
   <div class="row">
    
     
      <div class="col-lg-8">
   <nav class="navbar">
  

     <a href="<?php echo site_url('apertureworld/index'); ?>"> HOME</a> |

     <a href="<?php echo site_url('news_controller/display_all_news'); ?>"> NEWS</a> | 
 
   <a href="<?php echo site_url('products_controller/show_category'); ?>">PRODUCTS</a> |  
   
   <a     href="<?php echo site_url('store_controller/show_store'); ?>">STORE</a> | 
   
 <a    href="<?php echo site_url('aboutus_controller/show_aboutus'); ?>">ABOUTUS</a> | 
   
  <a href="<?php echo site_url('contactus_controller/show_contactus'); ?>">CONTACTUS</a> | 

   
</nav>
      
      </div>
<div class="col-lg-4">   
<h6 class="text-right">copyright 2017 Site By :Sahaj Bhattarai</h6>
</div>
</div>
</div>

</body>
</html>
  