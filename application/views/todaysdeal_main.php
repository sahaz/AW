
<br>
<div class=" well">
<?php 
$this->load->view('includes/menu.php');

?>
</div>
<hr>

<div class="container well"> 
   <h1 class="text-center">Aperture World<em> gives you the </em>Best Deals<em> around the town</em></h1>
   <h5 class="text-center">Hurry up and grab the deal listed below. You know deals hate waiting...</h5><hr>
      <?php foreach($value1->result() as $r) {?>
      <div class="col-lg-3">
   
         <div class="thumbnail">
              
               <img src="<?php echo site_url('uploads/'.$r->deal_pic);?>" height="300" width="300" >
         <div class="caption">
            
               <h3><?php echo $r->deal_title;?></h3>
              <h4> <p>Old Price :$<s><?php echo $r->deal_price+(28%$r->deal_price);?></s> </h4><h4> New Price : $<?php echo $r->deal_price;?> </p></h4>
       
               
               <a href="<?php echo site_url('todaysdeal_controller/display_deal/'.$r->id);?>">    
         <button class="btn btn-warning btn-lg" type="button" >
             <span class="glyphicon glyphicon-thumbs-up"></span>  Grab Deal 
         </button></a>
               
         </div>
         </div>
         
      
      </div>
      
             
      <?php }?>
   
  

</div>