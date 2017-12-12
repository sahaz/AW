<br>
<div class=" well">
<?php 
$this->load->view('includes/menu.php');

?>
</div>

<div class="container well well-sm">
     <h1 class="text-center">Contact Us : </h1>
     <h5 class="text-center">We are always keen for your Feedback or Queries so feel free to contact us.</h5><hr>
      <div class="row">
         <div class="col-lg-4"></div>
         <div class="col-lg-4"></div>
          <div class="col-lg-4">
               <?php if($this->session->flashdata('email_sent')){?>
                   <div class="row">
                      <div class="col-lg-12">

                          <div class="alert alert-success alert-dismissible" role="alert">
                                      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                       <span class="glyphicon glyphicon-ok-sign"></span> <?php echo $this->session->flashdata('email_sent');?>
                                   </div>


                      </div></div>

                   <?php  
                   }?>
             
                    <?php if($this->session->flashdata('email_notsent')){?>
                   <div class="row">
                      <div class="col-lg-12">

                          <div class="alert alert-danger alert-dismissible" role="alert">
                                      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                       <span class="glyphicon glyphicon-remove-sign"></span> <?php echo $this->session->flashdata('email_notsent');?>
                                   </div>


                      </div></div>

                   <?php  
                   }?> 
                    
            </div>
      </div>
     <div class="row">
       <div class="col-lg-4">
         <div class="well well-sm">  
    <div class="thumbnail">
     <h2 class="text-center">Sahaj Bhattarai</h2>
     <p class="text-center lead">Founder, CEO</p><hr>
       <img class="img-circle" src="<?php echo site_url('uploads/sahaz.jpg');?>" alt="" height="250" width="250">
      <div class="caption"><hr>
        
        
        <p class="text-center lead "><small><strong>Phone ( <span class="glyphicon glyphicon-phone"></span> ) : </strong>+977-9841780388</small><br>
        <small><strong>Email : </strong>sahazbhattarai@gmail.com</small></p>
        
        <p class="text-center">
           <a href="#" class="btn btn-primary btn-sm" role="button">facebook</a> 
           <a href="#" class="btn btn-info btn-sm" role="button">twitter</a>
        <a href="#" class="btn btn-danger btn-sm" role="button">google+</a></p>
        
      </div>
    </div>
    </div>
     </div>
      
     <div class="col-lg-4">
            
         <div class="well well-sm">  
    <div class="thumbnail">
     <h2 class="text-center">Aperture World Inc.</h2>
     <p class="text-center lead">Dhumbarahi, KTM</p><hr>
       <img class="img-rounded" src="<?php echo site_url('uploads/apertureworld.jpg');?>" alt="" height="270" width="270">
      <div class="caption"><hr>
        
        
        <p class="text-center lead "><small><strong>Phone ( <span class="glyphicon glyphicon-phone-alt"></span> ) : </strong>+977-014009070</small><br>
        <small><strong>Email : </strong>apertureworld@gmail.com</small></p>
        
        <p class="text-center">
           <a href="#" class="btn btn-primary btn-sm" role="button">facebook</a> 
           <a href="#" class="btn btn-info btn-sm" role="button">twitter</a>
        <a href="#" class="btn btn-danger btn-sm" role="button">google+</a></p>
        
      </div>
    </div>
    </div>
       

         </div>
     
   
     
     <div class="col-lg-4">
        
    <div class="well well-sm">
      
       <div class="thumbnail">
        
            <h1><span class="glyphicon glyphicon-envelope"></span> Feedback  </h1>
         <hr>
    <form class="form-horizontal" action="<?php echo site_url('contactus_controller/send_feedback');?>" method="POST" id="baseform" >
        
         
         <div class="form-group">
           <label class="col-sm-4 control-label"> Your Name:</label>
           <div class="col-sm-11">
           <input type="text" id="name" name="name" class="required form-control"  />

           </div>
         </div>
       
         <div class="form-group">
           <label class="col-sm-4 control-label"> Your Email:</label>
           <div class="col-sm-11">
           <input type="text" id="email" name="email" class="required email form-control"  />

           </div>
         </div>

   
             
         <div class="form-group">
           <label class="col-sm-4 control-label"> Feedback/Query:</label>
           <div class="col-sm-11">
           <textarea name="content" id="content" rows="9"  class="required form-control"></textarea>
           
         </div>
         </div> 

            <div class="form-group">
               <div class="col-lg-2 control-label">
               <input type="submit" class="btn btn-warning btn-md" id="submit" name="submit" value="Send" />
               </div>
             </div>
    </form>
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
<br>
   <?php 

$this->load->view('includes/footer.php');

?>
