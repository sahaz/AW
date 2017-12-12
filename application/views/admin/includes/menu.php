<?php $this->load->view('admin/includes/header.php');?>
   <body><br>
      <div class="container well">  
    <ul class="nav nav-pills nav-justified">
   
       <li type="square"><a href="<?php echo site_url('admin/con_news/show_news'); ?>"><h3><span class="glyphicon glyphicon-globe"></span> News</h3></a></li>
 
   <li type="square"><a href="<?php echo site_url('admin/con_todaysdeal/show_todaysdeal'); ?>"><h3><span class="glyphicon glyphicon-usd"></span> Todaysdeal</h3></a></li>
   
   <li type="square"><a href="<?php echo site_url('admin/con_slider/show_slider_images'); ?>"><h3><span class="glyphicon glyphicon-picture"></span> Slider</h3></a></li>
   
   <li type="square"><a class="btn-outline btn-circle" href="<?php echo site_url('admin/con_items/show_category'); ?>"><h3><span class="glyphicon glyphicon-th-list"></span> Category</h3></a></li>
   
   <li type="square"><a href="<?php echo site_url('admin/con_items/show_products'); ?>"><h3><span class="glyphicon glyphicon-camera"></span> Product</h3></a></li>

   
   <li type="square"><a href="<?php echo site_url('admin/con_aboutus/show_aboutus'); ?>"><h3><span class="glyphicon glyphicon-eye-open"></span> Aboutus</h3></a></li>
   
   <li><a href="<?php echo site_url('admin/con_login/logout'); ?>"><h3><span class="glyphicon glyphicon-new-window"></span> Logout</h3></a></li>
</ul>
      </div>
   

   </body>
</html>
   