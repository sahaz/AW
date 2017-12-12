 <div class="well"> 
<?php
$this->load->view('admin/includes/header.php');



     
                 echo "<h4>Welcome</h4>"."Guest";
       
echo "<br><br>";
?>
<?php
if($this->session->flashdata('logout')){?>
<div class="row">
   <div class="col-sm-4">
                <div class="alert alert-success" role="alert">
                     <?php echo $this->session->flashdata('logout');?>
 </div></div></div> 
    
<?php
}
if($this->session->flashdata('register')){?>
<div class="row">
   <div class="col-sm-4">
                <div class="alert alert-success" role="alert">
                     <?php echo $this->session->flashdata('register');?>
 </div></div></div> 
    
<?php
}
?>
</div>
<div class="container well"> 

<form class="form-horizontal" action="<?php echo site_url('admin/con_login/process');?>" method="POST" id="baseform" >
        
         
    <div class="form-group">
      <label class="col-sm-3 control-label"> Email:</label>
      <div class="col-sm-6">
      <input type="text" id="email" name="email" class="required email form-control"  />
         
      </div>
   </div>
   
   
             
    <div class="form-group">
      <label class="col-sm-3 control-label"> Password:</label>
      <div class="col-sm-6">
      <input type="password" id="pass" name="pass" class="required form-control"   />
         
         
      </div>
   </div> 
       
     <div class="form-group">
        <div class="col-md-4 control-label">
  <input type="submit" class="btn btn-info" id="submit" name="submit" value="Signin" /><br><br>
        </div>
        </div>
       
       
       

</form>
   <?php if($this->session->flashdata('error')){?>
<div class="row">
   <div class="col-lg-12">
                <div class="alert alert-danger" role="alert">
                     <?php echo $this->session->flashdata('error');?>
</div></div></div>
                
<?php  
}?>




</div>
 

