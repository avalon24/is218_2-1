<?php

   $product_desc = filter_input(INPUT_POST,'product_description');
   $list_price   = filter_input(INPUT_POST,'list_price');
   $discount_pct = filter_input(INPUT_POST,'discount_percent');
   $discount_amt = $list_price * $discount_pct * 0.01;
   $discount_price = $list_price - $discount_amt;

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
        <span><?php echo $list_price; ?></span><br>

        <label>Standard Discount:</label>
        <span><?php echo $discount_pct; ?></span><br>

        <label>Discount Amount:</label>
        <span><?php echo $discount_amt; ?></span><br>

        <label>Discount Price:</label>
        <span><?php echo $discount_price; ?></span><br>
    </main>
</body>
</html>
