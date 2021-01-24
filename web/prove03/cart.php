<?php
 $iteams = htmlspecialchars($_POST["iteams"]); 
 $address = htmlspecialchars($_POST["address"]); ?>

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
         $iteam_clean = htmlspecialchars($iteam);
         echo "<li><p>$place_clean</p></li>";

     }



     <p><a href = "prove03.html">back to shopping</a></p>
     <p><a href = "checkout.php">confirmation</a></p>

     
 </body>
 </html>