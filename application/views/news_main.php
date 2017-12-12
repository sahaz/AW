
<br>
<div class=" well">
<?php 
$this->load->view('includes/menu.php');

?>
</div>
<hr>

<div class="well well-sm"> 
        
       <h2 class="text-center">Photography News</h2>
   <h5 class="text-center">We keep an update with all the happenings around the world of Photography</h5><hr>
  
 


 <?php foreach($value1->result() as $r) { ?>
   <div class="row">
      <div class="col-lg-1 "></div>
            <div class="col-lg-3">
                <a href="<?php echo site_url('news_controller/display_news/'.$r->id);?>"> 
                  
                  <img class="thumbnail" src="<?php echo site_url('uploads/'.$r->headlinepic);?>" height="250" width="300" >
                </a>
            </div>
      
            <div class="col-lg-8">
               <div class="well well-sm">
                  <p class="lead"><strong><?php echo $r->headline;?></strong></p>
                  <h5 class="lead"><small>Published : <?php echo $r->date;?></small></h5>
                  <h5 class="lead"><small>Location : <?php echo $r->location;?></small></h5>
                  <a href="<?php echo site_url('news_controller/display_news/'.$r->id);?>"> 
         <button class="btn btn-success btn-md" type="button">
                  <span class="glyphicon glyphicon-search"></span> &nbsp;Read More ...
         </button></a>
            </div>
            </div>
     
   </div>
   
<?php }?>
   

</div>
<?php 
$this->load->view('includes/footer.php');

?>