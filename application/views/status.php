<?php 

$message_content = "
<html>
 <body>
  <table border=1>
  <tr><th>item</th>
  <th>quantity</th>
  <th>price</th>
  <th>subtotal</th></tr>";
    foreach ($this->cart->contents() as $items){
       $message_content .="<tr><td>";
      $message_content .= $items['name'];
    $message_content .= "</td><td>";
           $message_content .= $items['qty'];
    $message_content .= "</td><td>";
         $message_content .= $this->cart->format_number($items['price']);
         $message_content .= "</td><td> $";
         $message_content .= $this->cart->format_number($items['subtotal']);
         $message_content .= "</td></tr>";
         
    }
$message_content .= "<tr><td colspan= 4 >Total: $";
 
       $message_content .= $this->cart->format_number($this->cart->total());
       $message_content .= "</td></tr></table></body></html> ";

               echo $message_content;
?>