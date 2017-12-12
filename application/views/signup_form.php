
<br>
<div class=" well">
<?php 
$this->load->view('includes/menu.php');

?>
</div>


<div class="container well"> 
   <div class="row">
   <div class="col-lg-5">
      <div class="thumbnail">
<img  src="<?php echo site_url('uploads/apertureworld.jpg');?>" height="350" width="350" />

      </div>
      <div class="media-body">
         <p class="media-heading lead text-right"><strong>The Best Photography Web Portal in Nepal</strong></p>
         <p class="lead text-right">Join Free* and experience the awesome world of Photography </p>
      </div>
      </div>
       
  <div class="col-lg-7">
     <div class="well">
         
        <?php if($this->session->flashdata('register')){?>
            <div class="row">
               <div class="col-lg-12">
                            <div class="alert alert-success" role="alert">
                                 <?php echo $this->session->flashdata('register');?>
             </div></div></div> 

            <?php
            }
            ?>
     
     <p class="text-justify"><h2>Please enter your Contact Details:</h2></p>
   <form class="form-horizontal" action="<?php echo site_url('login_controller/process_signup_form');?>" method="POST" id="baseform" >
        
     <div class="form-group">
      <label class="col-sm-3 control-label">Your Name:</label>
      <div class="col-sm-6">
         <input type="text" id="name" name="name" class="required form-control"/>
      
      </div>
   </div>
      
    <div class="form-group">
      <label class="col-sm-3 control-label">Your Address :</label>
      <div class="col-sm-6">
        
      <input type="text" id="address" name="address" class="required form-control" />
      </div>
   </div>
      
        <div class="form-group">
      <label class="col-sm-3 control-label"> Your Email:</label>
      <div class="col-sm-6">
        <input type="text" id="email" name="email" class="required form-control" />
      
      </div>
   </div>
      
      <div class="form-group">
      <label class="col-sm-3 control-label"> Please enter a password:</label>
      <div class="col-sm-6">
        
      <input type="password" id="pass" name="pass" class="required form-control"/>
      </div>
   </div>
   
   
 
        
       
      <div class="form-group">
        <div class="col-md-4 control-label">
  <input type="submit" class="btn btn-success" id="submit" name="submit" value="SAVE" /><br><br>
        </div>
        </div>
   
       
       
      
       

</form>
  </div>
    </div>
   </div>
   
  
</div>