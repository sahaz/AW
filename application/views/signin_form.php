
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
         
      
     
     <p class="text-center"><h2>Sign In :</h2></p>
  
     <form class="form-horizontal" action="<?php echo site_url('login_controller/process_signin');?>" method="POST" id="baseform" >
        
         
         <div class="form-group">
           <label class="col-sm-4 control-label"> Email:</label>
           <div class="col-sm-7">
           <input type="text" id="email" name="email" class="required email form-control"  />

           </div>
         </div>

   
             
         <div class="form-group">
           <label class="col-sm-4 control-label"> Password:</label>
           <div class="col-sm-7">
           <input type="password" id="pass" name="pass" class="required form-control"   />


           </div>
         </div> 

            <div class="form-group">
               <div class="col-sm-11 control-label">
               <input type="submit" class="btn btn-info btn-sm" id="submit" name="submit" value="Sign In" /><br><br>
               </div>
             </div>
    </form>
       Haven't registered ? Sign Up here &nbsp;<a class="btn btn-warning" href="<?php echo site_url('login_controller/signup');?>"><span class="glyphicon glyphicon-plus"></span> Sign UP </a>
    </div>
    </div>
   </div>
   
  
</div>