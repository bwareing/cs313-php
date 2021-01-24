<?php
 $iteams = ($_POST["iteams"]);
  
 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>your cart</title>
 </head>
 <body>

   
     <?php foreach ($iteams as $iteam)
     {
       
        echo "$iteam";
     }
      ?>


     <p><a href = "prove03.html">back to shopping</a></p>
     <p><a href = "checkout.php">checkout</a></p>

     
 </body>
 </html>