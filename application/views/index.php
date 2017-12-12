
<br>
<div class=" well">
<?php 
$this->load->view('includes/menu.php');

?>
</div>
<hr>

<div class="container">
   <div class="row">
	<div class="col-sm-12">
            <div id="myCarousel" class="carousel  slide" data-ride="carousel">
   
   <ol class="carousel-indicators">
      <?php
      $n=0;
      foreach($slider ->result() as $s) {?>
      <li data-target="#myCarousel" data-slide-to=$n <?php if($n==0){?>class="active" <?php }?>></li>
   <?php $n+=1;}?>
   </ol>
   <div class="carousel-inner">
      <?php 
      $z=0;
      foreach($slider ->result() as $t) {?>
      <div <?php if($z==0){?>class="item active" <?php }else{?> class="item" <?php }?> >
         <a href="<?php echo site_url('uploads/'.$t->slider_image);?>" rel="prettyPhoto[pp_gal]" title="<?php echo $t->image_description ;?>">
         <img src="<?php echo site_url('uploads/'.$t->slider_image);?>"/>
         </a>
          <div class="carousel-caption">
            <?php echo $t->image_description ;?>
            
            </div>
      </div>
            <?php $z+=1;}?>
   </div>
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>
</div>
</div>

 <h2 class="text-center lead"> <span class="glyphicon glyphicon-camera" aria-hidden="true"></span> Best Picked Photographs around the world</h2>
<hr>
<div class="container">
   
   <div class="row">
     
       <div class="col-lg-5">
           <div class="well well-sm">
          
              <h2>Latest News <span class="glyphicon glyphicon-globe"></span></h2>
               <h6>Keep up-to-date with all the happenings around the world of Photography</h6>
          <hr>
          
          
          <?php 
            $num2=1;
          
            foreach($value2 ->result() as $u) { 
               if($num2<=4){  ?> 
                  <div class="media">
                  <div class="media-left">
                  <a href="<?php echo site_url('news_controller/display_news/'.$u->id);?>">
                  <img class="media-object" src="<?php echo site_url('uploads/'.$u->headlinepic);?>" alt="nikon" height="50" width="70">
                  </a>
                  </div>
                  <div class="media-body">
                   <small>
                 <?php echo $u->date;?></small>
                     <h4 class="media-heading"> <?php echo $u->headline;?></h4>
                     
                     <a href="<?php echo site_url('news_controller/display_news/'.$u->id);?>">    
                     <button class="btn btn-info btn-sm" type="button" >
                          <span class="glyphicon glyphicon-search"></span>  Read More...
                        </button></a>
               
             
                   </div>
                  </div>
          <?php $num2+=1;}
          
             }?>
          
          
          
          <?php $num=0; 
             foreach($value2->result() as $u) { 
          $num+=1;} ;?>
          
          <br><a href="<?php echo site_url('news_controller/display_all_news/');?>">    
         <button class="btn btn-success btn-md" type="button" >
             Click Here for all News <span class="badge"><?php echo $num;?></span>
         </button></a>
      
      
 
       
   </div>
       </div>
 
     <div class="col-lg-4">
     
        <div class="well well-sm">
          <h2><span class="glyphicon glyphicon-star"></span> Today's Deals</h2>
          <h6>Hurry up and grab a deal</h6>
          <hr>
          
            <?php 
            $num3=1;
          
            foreach($value3 ->result() as $v) { 
               if($num3<=3){  ?> 
                  <div class="media">
                  <div class="media-left">
                  <a href="<?php echo site_url('todaysdeal_controller/display_deal/'.$v->id);?>">
                  <img class="media-object" src="<?php echo site_url('uploads/'.$v->deal_pic);?>" alt="$v->deal_title" height="70" width="70">
                  </a>
                  </div>
                  <div class="media-body">
                   <a href="<?php echo site_url('todaysdeal_controller/display_deal/'.$v->id);?>">
                     <h4 class="media-heading"> <?php echo $v->deal_title;?></h4></a>
                     <p>Old Price :$<s><?php echo $v->deal_price+(28%$v->deal_price);?></s> &nbsp; New Price : $<?php echo $v->deal_price;?> </p>
                     <a href="<?php echo site_url('todaysdeal_controller/display_deal/'.$v->id);?>">    
                     <button class="btn btn-warning btn-sm" type="button" >
                        <span class="glyphicon glyphicon-thumbs-up"></span> &nbsp;Grab Deal !
                        </button></a>
               
             
                   </div>
                  </div>
          <?php $num3+=1;}
          
             }?>
          
          
          
          <?php $num4=0; 
             foreach($value3->result() as $u) { 
          $num4+=1;} ;?>
          
          <br><a href="<?php echo site_url('todaysdeal_controller/display_all_todaysdeal');?>">    
         <button class="btn btn-success btn-md" type="button" >
             Click Here for all Deals <span class="badge"><?php echo $num4;?></span>
         </button></a>
      
      
 
     </div>
   
       </div>
     
     
      
 <div class="col-lg-3">
   <?php if($this->session->flashdata('error')){?>
 
     
     <div class="alert alert-danger alert-dismissible" role="alert">
                                      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                       <span class="glyphicon glyphicon-remove-sign"></span> <?php echo $this->session->flashdata('error');?>
        
     </div>
   <?php }
     
   if($this->session->flashdata('signout')){?>
     
                             
                            <div class="alert alert-success alert-dismissible" role="alert">
                               <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <span class="glyphicon glyphicon-ok-sign"></span> <?php echo $this->session->flashdata('signout');?>
                            </div> 

            <?php
            }?>
                                       
    <div class="well well-sm">
      <h2> Sign in  &nbsp;<span class="glyphicon glyphicon-circle-arrow-down"></span></h2>
      <h6>Login and enjoy exciting features included.</h6>
         
       <hr>
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

<div class="container">
      <?php $this->load->view('includes/footer.php');?>
</div>


       