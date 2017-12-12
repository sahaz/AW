
 <div class="well"> 
<?php 
                  $this->load->view('admin/includes/header.php');

                  $value=$this->session->userdata('status');
                  $value2=$this->session->userdata('name');
                 echo "<h3>"."Welcome  "."</h3>";
                 echo '<div class="btn btn-default">';
                 echo $value2." ( ".$value." )";
                 echo '</div>';
                 ?>
                  <div class="btn btn-default">
                  <a href="<?php echo site_url('admin/con_login/logout');?>">Logout</a>
                  </div>
 </div>

<?php 

$this->load->view('admin/includes/menu.php');

?>