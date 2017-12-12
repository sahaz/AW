<br>
<div class=" well">
<?php 
$this->load->view('includes/menu.php');

?>
</div>

<div class="container well">   
   <h1><span class="label label-info"><span class="glyphicon glyphicon-shopping-cart"></span> Your Cart </span></h1>
   <?php if($this->session->flashdata('email')){?>
                  
            
                            <div class="alert alert-danger" role="alert">
                           <?php echo $this->session->flashdata('email');?>
                            </div>

            <?php
            }
            ?>
   <hr>
<div class="row">
   
 
   <div class="col-lg-4">
            
       <?php $value=$this->session->userdata('status');
                  $value2=$this->session->userdata('name');?>
      
      <a href="<?php echo site_url('uploads/user.jpg'); ?>" rel="prettyPhoto[pp_gal]" title="<?php echo $value2; ?>">
         <img src="<?php echo site_url('uploads/user.jpg'); ?>" height="90" width="90"/>
         </a>
  
         
                  
            <h6 class="lead"><strong>User : </strong><?php echo $value2; ?></h6> 
            <p class="lead"><strong>Email : </strong><?php echo $value; ?></p> 
             
   </div>
  
<div class="col-lg-8">
<div class="table-responsive">
<table class="table table-striped table-hover" cellpadding="6" cellspacing="1" style="width:75%" border="1">

<tr>
  
  <th>Product Name</th>
  <th>Qty</th>
  <th style="text-align:right">Product Price</th>

  <th style="text-align:right">Sub Total</th>
  <th colspan="2">Add/Remove items from Cart</th>
</tr>



<?php foreach ($this->cart->contents() as $items): ?>

	

	<tr>
	
	  <td><?php echo $items['name']; ?></td>
	  <td><?php echo $items['qty']; ?></td>
	  <td style="text-align:right"><?php echo $this->cart->format_number($items['price']); ?></td>
	 
          <td style="text-align:right">$<?php echo $this->cart->format_number($items['subtotal']); ?></td>
	  
          <td><form action="<?php echo site_url('store_controller/update/'.$items['rowid']);?> " method="POST">
             
             <input type="text" name="qty" id="qty" >
             <input type="submit" name="submit" id="submit" value="Update Cart" >
          </form>
          <td> 
             <a class="btn btn-danger btn-xs" href="<?php echo site_url('store_controller/delete_cart/'.$items['rowid']); ?>">
                <span class="glyphicon glyphicon-trash"></span> Remove form cart</a>
          </td>
          </td>
        </tr>



<?php endforeach; ?>

<tr>
  <td colspan="2"></td>
  <td class="right"><strong>Total</strong></td>
  <td class="right" colspan="3" style="text-align:right">$<?php echo $this->cart->format_number($this->cart->total()); ?></td>
</tr>

</table>
   
     
      <div class="col-lg-8">
         <div class="well -well-sm">
           <h6> * By clicking the Checkout button :</h6>
           <h6>1. You agree all the customer rules issued by ApertureWorld.com</h6>
           <h6>2. You are submitting this table of cart to us with an intent of buying these items.</h6> </h6>
         </div>
      </div>
      <div class="col-lg-4">
         <a href="<?php echo site_url('store_controller/check_out/');?>">    
         <button class="btn btn-warning btn-md" type="button" >
            Check Out &nbsp;<span class="glyphicon glyphicon-log-out"></span>
         </button></a>
      </div>
      
      
 
</div>
</div>
</div>
</div>


<?php 
$this->load->view('includes/footer.php');

?>