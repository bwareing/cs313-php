<?php $iteams =($_POST["iteams"]); 
 $address = htmlspecialchars($_POST["address"]); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Purchase confirmed</h1>
    <p>iteams in cart: <?=$iteams ?></p>
    <p>Your address: <?=$address ?></p>
</body>
</html>