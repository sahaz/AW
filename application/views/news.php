
<br>
<div class=" well">
<?php 
$this->load->view('includes/menu.php');

?>
</div>
<hr>

<div class="container well"> 
  
   <div class="row">
      
      <div class="col-lg-9">
         
         <div class="thumbnail">
             <div class="caption">
          <?php $r=$value1->row();?>
    <h1><em><?php echo $r->headline;?></em></h1>
               <p><?php echo $r->date."<br>";
               echo $r->location;?></p><hr>
          </div>
               <a href="<?php echo site_url('uploads/'.$r->headlinepic);?>" rel="prettyPhoto" title="<?php echo $r->headline;?>">
               <img class="thumbnail"src="<?php echo site_url('uploads/'.$r->headlinepic);?>" >
               </a>
         <div class="caption">
              
               <p class="text-justify lead" ><?php echo $r->news;?></p>
        
         </div>
         </div>
         
      
      </div>
       <?php $num=0; 
             foreach($value2->result() as $s) { 
          $num+=1;} ;?>
      
      <div class="col-lg-3">
       <a href="<?php echo site_url('news_controller/display_all_news/');?>"> 
         <button class="btn btn-success btn-lg" type="button">
                  News <span class="badge"><?php echo $num;?></span>
         </button></a>
         
         <h2><hr></h2>
          <?php foreach($value2->result() as $s) { ;?>
          
         <a href="<?php echo site_url('news_controller/display_news/'.$s->id);?>">
          <div class="row">
              
             <div class="col-lg-12">
                 
                 
                
                    <?php echo $s->headline;?>
                 
             </div> 
      
          </div>
          </a>
         
         <hr>
             <?php }?>
         
         
         
      </div>
   
   </div>

</div>

<?php 
$this->load->view('includes/footer.php');

?>