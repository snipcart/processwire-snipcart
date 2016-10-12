<?php

include('./_head.php'); // include header markup ?>

	<div class='product'><?php

    $image = $page->product_image->first->url;

    echo "<img src=$image height='200px'>";

		echo "<h1>" . $page->product_name . "</h1>";

		echo "<p>" . $page->product_description . "</p>";

    echo "<button class='snipcart-add-item'
            data-item-id=$page->product_id
            data-item-name=$page->product_name
            data-item-price=$page->product_price
            data-item-url=$page->product_url
            data-item-image=$image
            data-item-description=$page->product_description>
            Buy $page->product_name
        </button>";


	?></div><!-- end content -->

<?php include('./_snipcart.php'); ?>
<?php include('./_foot.php'); // include footer markup ?>
