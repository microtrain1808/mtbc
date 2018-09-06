<?php
    $name = 'Bob Smith';
    $greeting = "Hello {$name}";
    $count=5;
    $price=.6;
    $total=($count*$price);
    $tax = ($total*.1);

    $totalWithTax = ($total + $tax);
    $msg = "I see you have {$count} oranges, that will be \${$totalWithTax}";
?>
<!DOCTYPE html>
<html lang="en">
    <head>
      <meta charset="UTF-8">
      <title>Contact</title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
       <h1><?php echo $greeting; ?></h1>
       <p><?php echo $msg; ?></p>
    </body>
</html>