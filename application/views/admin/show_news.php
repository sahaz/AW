<?php
$this->load->view('admin/includes/header.php');
$this->load->view('admin/includes/menu.php');
?>

<div class="container well">   
<br><br>
<a class="btn btn-success" href="<?php echo site_url('admin/con_news/add_news');?>">Add NEWS</a><br><br>

<div class="table-responsive">
<table border="2" class="table table-striped table-hover table-condensed" >
   <tr >
      <th>News Headline</th>
      <th>Date</th>
      <th>Location</th>
      <th>News</th>
      <th>Picture</th>
      <th colspan="2">Modification options</th>
   </tr>
   <?php 
   
   
   foreach($value->result() as $r)
   {
      echo'<tr>';
      echo'<td align="center">';
      echo $r->headline;
      
      echo'<td align="center">';
      echo $r->date;
     
      echo'<td align="center">';
      echo $r->location;
      
       echo'<td align="center">';
      echo substr($r->news, 0, 200).".......";
       
      echo'<td align="center">';
      ?><img src="<?php echo site_url('uploads/'.$r->headlinepic);?>" height="124" width="115" border="2" /> 
      <td width="75" align="center"><a href="<?php echo site_url('admin/con_news/edit_news/'.$r->id);?>"><div class="btn btn-warning">EDIT</div></a></td>
      <td width="75" align="center"><a href="<?php echo site_url('admin/con_news/delete_news/'.$r->id);?>"><div class="btn btn-danger">DELETE</div></a></td>
<?php
   }
   
?>
</table>
</div>
</div>