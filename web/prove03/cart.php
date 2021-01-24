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
     <p>iteams in cart: <?$iteams ?></p>



     <p><a href = "prove03.html">back to shopping</a></p>
     <p><a href = "confirmation.php">confirmation</a></p>

     
 </body>
 </html>