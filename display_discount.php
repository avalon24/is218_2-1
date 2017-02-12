<?php

   $product_desc = filter_input(INPUT_POST,'product_description');
   $list_price   = filter_input(INPUT_POST,'list_price');
   $discount_pct = filter_input(INPUT_POST,'discount_percent');
   $discount_amt = $list_price * $discount_pct * 0.01;
   $discount_price = $list_price - $discount_amt;

   $list_price_f     = "$".number_format($list_price,2);
   $discount_pct_f   = number_format($discount_pct_f,1)."%";
   $discount_amt_f   = "$".number_format($discount_amt,2);
   $discount_price_f = "$".number_format($discount_price,2);  

?>
<!DOCTYPE html>
<html>
<head>
    <title>Product Discount Calculator</title>
    <link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
    <main>
        <h1>This page is under construction</h1>

        <label>Product Description:</label>
        <span><?php echo $product_desc; ?></span><br>

        <label>List Price:</label>
        <span><?php echo $list_price_f; ?></span><br>

        <label>Standard Discount:</label>
        <span><?php echo $discount_pct_f; ?></span><br>

        <label>Discount Amount:</label>
        <span><?php echo $discount_amt_f; ?></span><br>

        <label>Discount Price:</label>
        <span><?php echo $discount_price_f; ?></span><br>
    </main>
</body>
</html>
