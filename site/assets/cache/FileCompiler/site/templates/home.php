<?php include(\ProcessWire\wire('files')->compile(\ProcessWire\wire("config")->paths->root . 'site/templates/_head.php',array('includes'=>true,'namespace'=>true,'modules'=>true,'skipIfNamespace'=>true))); // include header markup ?>

<div id='content'><?php

	echo "<h3 class='site-title'>" . $page->get('headline|title') . "</h1>";

	echo "<div class='products'>";

		echo $page->body;

		foreach($page->children() as $product) {
			$image = $product->product_image->first->url;
			$render = "<div class='product'>"
					. "<div class='product-description'>"

						. "<img src='$image' height='150px'>"
						. "<a href='$product->url'>$product->title"
						. "<p>$product->product_description</p>"
					. "</div>"
					. "<button class='snipcart-add-item'
									data-item-id='$product->product_id'
									data-item-name='$product->product_name'
									data-item-price='$product->product_price'
									data-item-url='$product->product_url'
									data-item-image='$image'
									data-item-description='$product->product_description'>
									Buy $product->product_name
							</button>"
				.	"</a>"
			. "</div>";

			echo $render;
		}

	echo "</div>";


?></div><!-- end content -->

<?php include(\ProcessWire\wire('files')->compile(\ProcessWire\wire("config")->paths->root . 'site/templates/_snipcart.php',array('includes'=>true,'namespace'=>true,'modules'=>true,'skipIfNamespace'=>true)));?>
<?php include(\ProcessWire\wire('files')->compile(\ProcessWire\wire("config")->paths->root . 'site/templates/_foot.php',array('includes'=>true,'namespace'=>true,'modules'=>true,'skipIfNamespace'=>true))); // include footer markup ?>
