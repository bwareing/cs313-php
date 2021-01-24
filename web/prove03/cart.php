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

     <?php
        $iteams = array(
            '0' => "piano",
            '1' => "black piano",
            '2' => "red gutiar",
            '3' => "white gutiar");
            
         ?>
     <?php foreach (($_POST["iteams"]) as $vaule)
     {
       
        echo $_POST[$vaule])
     }
      ?>


     <p><a href = "prove03.html">back to shopping</a></p>
     <p><a href = "checkout.php">checkout</a></p>

     
 </body>
 </html>