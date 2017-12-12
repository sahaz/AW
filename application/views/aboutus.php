<br>
<div class=" well">
<?php 
$this->load->view('includes/menu.php');

?>
</div>
<div class="container well well-sm">
   
   
   <h1 class="text-center">Aperture World <em>Inc.</em> </h1>
   <h5 class="text-center"><em>where we replenish your thirst for Photography...</em></h5><hr>
   
 
   
   
   
   
   <div class="row">
      
        
    <div class="col-lg-3">
            
            
    <div class="thumbnail">
     <h3 class="text-center">Sahaj Bhattarai</h3><hr>
       <img class="img-circle" src="<?php echo site_url('uploads/sahaz.jpg');?>" alt="" height="169" width="169">
      <div class="caption">
        
        <p class="text-center lead">Founder, CEO</p>
        <p class="text-justify lead "><small>Sahaj started this web site for the sake of photography users in Nepal so that they could improve their photography. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu.</small></p>
        <p class="text-center"><a href="#" class="btn btn-primary btn-xs" role="button">facebook</a> 
           <a href="#" class="btn btn-info btn-xs" role="button">twitter</a>
        <a href="#" class="btn btn-danger btn-xs" role="button">google+</a></p>
        
      </div>
    </div>
       

         </div>
<div class="col-lg-9">
   <div class="well well-sm">
                  <h3 class="text-center"><em><u> About Us </u></em></h3><hr>
       <?php $r=$value1->row();?>
         <div class="col-lg-3">
            <img  src="<?php echo site_url('uploads/'.$r->image);?>" alt="" height="140" width="800"><hr>
         </div>   
      
      <div class="row">
      <div class="col-lg-12">   
     
      <p class="lead"><?php echo $r->about_us;?></p>
   </div>
   </div>
   </div>
</div>         
     
    
 

</div>
     
     
     <hr>
     <div class="row">
        <div class="col-lg-2"></div>
        <div class="col-lg-4">
      
        <img class="img-rounded thumbnail" src="<?php echo site_url('uploads/aboutus.jpg');?>" height="120" width="390" />

         </div>
        
        <div class="col-lg-6">
      
         <p class="media-heading lead text-left"><strong><small>The Best Photography Web Portal in Nepal</small></strong></p>
         <p>Join Free* and experience the awesome world of Photography</p>
          <p class="text-left"><a href="#" class="btn btn-primary btn-xs" role="button">facebook</a> 
           <a href="#" class="btn btn-info btn-xs" role="button">twitter</a>
        <a href="#" class="btn btn-danger btn-xs" role="button">google+</a></p>      
         
         <h6>Want to be part of us ? &nbsp;&nbsp;  <a class="btn btn-default btn-xs" href="<?php echo site_url('login_controller/signup');?>">
               Join Us here </a></h6> 
      </div>
        
     </div>
     </div>

</div>
<br>
   <?php 

$this->load->view('includes/footer.php');

?>
