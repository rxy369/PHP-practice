<?php
    // get data from form
    $product_description = filter_input(INPUT_POST, 'product_description');
    $list_price = filter_input(INPUT_POST, 'list_price');
    $discount_percent = filter_input(INPUT_POST, 'discount_percent');
    $sales_tax = 8;

    // calculate the discount and discounted price
    $discount = $list_price * ($discount_percent / 100);
    $discounted_price = $list_price - $discount;

    // apply currency fortmatting and percent format
    // display discounted price
    $list_price_f = "$".number_format($list_price, 2);
       $discount_percent_f = $discount_percent . "%";
    $discount_f = "$".number_format($discount,2);
    $discounted_price_f = number_format($discounted_price,2);

    // get and apply sales tax of 8% to discounted price to get sales_tax_amount
    $sales_tax_f = 8;
    $sales_tax_amount_f = "$".number_format(($discounted_price_f * $sales_tax /100),2);
?>

<!DOCTYPE html>
<html>
	<head>
		<title> Product discount calc </title>
		<link rel="stylesheet" type="text/css" href="main.css">
	</head>

	<body>
		<h1> Product Discount Calculator </h1>

		<label>Product Description</label>
		<span> <?php echo htmlspecialchars($product_description); ?> </span>
		<br>

		<label>List Price</label>
		<span> <?php echo htmlspecialchars($list_price_f); ?> </span>
		<br>

		<label>Standard Discount</label>
		<span> <?php echo htmlspecialchars($discount_percent_f); ?> </span>
		<br>

		<label>Discount Amount</label>
		<span> <?php echo htmlspecialchars($discount_f); ?> </span>
		<br>

		<label>Discount Price</label>
		<span> <?php echo htmlspecialchars($discounted_price_f); ?> </span>
		<br>
		<br>

		<label>Sales Tax</label>
		<span> <?php echo htmlspecialchars($sales_tax_f); ?> </span>
		<br>

		<label>Sales Tax Amount</label>
		<span> <?php echo htmlspecialchars($sales_tax_amount_f); ?> </span>
		<br>
	</body>
</html>
